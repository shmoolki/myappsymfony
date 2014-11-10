<?php

class Util {

    private $utilId;
    private $utilLogin;
    private $utilPwd;
    private $dB;
    private $util_id;
    private $util_login;
    private $util_nom;
    private $util_prenom;
    private $util_mail;
    private $util_adresse;
    private $util_ville;
    private $util_tel1;
    private $util_tel2;
    private $util_password;
    private $util_active;
    private $util_compteDepot;
    private $util_admin;

    public function __construct($id) {


        try {
            $this->dB = new PDO('mysql:host=localhost;dbname=frxintranet', 'root', 'root');
            $this->dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dB->exec('SET NAMES "utf8"');
        } catch (Exception $e) {
            exit($e->getMessage());
        }

        //echo $id;
        $getUser = $this->dB->query('SELECT * FROM frxb_util WHERE util_id = ' . $this->dB->quote($id));
        $resultUser = $getUser->fetch(PDO::FETCH_ASSOC);
        $getUser->closeCursor();

        if ($resultUser == false OR empty($resultUser)) {
            return false;
        } else {
            //print_r($resultUser);
            $this->hydrate($resultUser);
        }
    }

    public function hydrate(array $donnees) {

        foreach ($donnees as $i => $value) {
            $method = 'set' . ucfirst($i);
            //echo "public function ".$method."(value){}<br/>";
            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                //echo "<br/>public function ". $i."(){return this->".$i."}";
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    //Les Setters

    public function setUtil_id($value) {
        $this->util_id = $value;
    }

    public function setUtil_login($value) {
        $this->util_login = $value;
    }

    public function setUtil_nom($value) {
        $this->util_nom = $value;
    }

    public function setUtil_prenom($value) {
        $this->util_prenom = $value;
    }

    public function setUtil_mail($value) {
        $this->util_mail = $value;
    }

    public function setUtil_adresse($value) {
        $this->util_adresse = $value;
    }

    public function setUtil_ville($value) {
        $this->util_ville = $value;
    }

    public function setUtil_tel1($value) {
        $this->util_tel1 = $value;
    }

    public function setUtil_tel2($value) {
        $this->util_tel2 = $value;
    }

    public function setUtil_password($value) {
        $this->util_password = $value;
    }

    public function setUtil_active($value) {
        $this->util_active = $value;
    }

    public function setUtil_admin($value) {
        $this->util_admin = $value;
    }

    //Les Getters


    public function util_id() {
        return $this->util_id;
    }

    public function util_login() {
        return $this->util_login;
    }

    public function util_nom() {
        return $this->util_nom;
    }

    public function util_prenom() {
        return $this->util_prenom;
    }

    public function util_mail() {
        return $this->util_mail;
    }

    public function util_adresse() {
        return $this->util_adresse;
    }

    public function util_ville() {
        return $this->util_ville;
    }

    public function util_tel1() {
        return $this->util_tel1;
    }

    public function util_tel2() {
        return $this->util_tel2;
    }

    public function util_password() {
        return $this->util_password;
    }

    public function util_active() {
        return $this->util_active;
    }

    public function util_admin() {
        return $this->util_admin;
    }

    public function canLogin($username, $password) {
        $getUser = $this->dB->query('SELECT * FROM frxb_util WHERE util_login = ' . $this->dB->quote($username) . ' AND util_password = ' . $this->dB->quote($password));
        $resultUser = $getUser->fetchAll();
        $getUser->closeCursor();

        if ($resultUser == false OR empty($resultUser)) {
            return false;
        } else {
            return $resultUser[0];
        }
    }

    function UpdateMontantPrime($numplg, $montant) {
        $query = "UPDATE frxb_prime SET prime_montant=" . $montant . " WHERE prime_id=" . $numplg;
        echo $query;
        $addQuery = $this->dB->query($query);
    }

    function UpdateBornePrime($numplg, $borneMin, $borneMax) {
        $query = "UPDATE frxb_prime SET prime_nbcontrat_min=" . $borneMin . " , prime_nbcontrat_max=" . $borneMax . "  WHERE prime_id=" . $numplg;
        echo $query;
        $addQuery = $this->dB->query($query);
        //reorganise les plage pour ne pas qu'il n'y ai pas de vide
        $this->ReorganiseBornePrime(NULL, $numplg, NULL);
    }

    /* ------------------------------------------------------------
     *  reorganise les plage pour ne pas qu'il n'y ai pas de vide    
     * $sens nous indique le sens dans lequelle élargir une plage
     * $id nous donne l'id à ne pas toucher et donc en fonction de cela 
     * modifier dans un sens ou un autre les plage
     * ------------------------------------------------------------- */

    function ReorganiseBornePrime($sens = NULL, $id = NULL, $palier = NULL) {
        
    }

    function ChangeTauxHoraire($somme, $heuremin, $heuremax) {
        $query = "UPDATE frxb_admin SET admin_nbheurechange=" . $somme . " , admin_tauxhorairemin=" . $heuremin . " , admin_tauxhorairemax=" . $heuremax;
        echo $query;
        $addQuery = $this->dB->query($query);
    }

    function majTauxEuro($taux) {
        //$login, $nom,$prenom,$mail,$adresse,$ville,$tel1,$tel2,$mdp
        $query = "UPDATE frxb_admin SET admin_tauxdevise=" . $taux;
        echo $query;
        $addQuery = $this->dB->query($query);
    }

    function recupListeUtil($mode = null) {
        $query = "SELECT * FROM frxb_util ";
        if ($mode == 'active') {
            $query = $query . "WHERE util_active<>0";
        }

        $getUser = $this->dB->query($query);
        $resultUser = $getUser->fetchAll();
        $getUser->closeCursor();

        if ($resultUser == false OR empty($resultUser)) {
            return false;
        } else {
            return $resultUser;
        }
    }

    /* -----------------------------------------------------------
      Mets à jour un utilisateur ou en crée un nouveau
      ------------------------------------------------------------------ */

    function majUtil($info, $mode = null) {
        //echo $mode." c'est  la variable mode";
        //var_dump($info);

        if (is_null($mode)) {
            $query = "INSERT INTO frxb_util (util_login, util_nom, util_prenom, util_mail, util_tel1, util_tel2, util_password, util_active,util_admin)
	  VALUES( :login, :nom,:prenom,:mail,:tel1,:tel2,:pwd,:active,:admin) ";
            $verifLogin = "SELECT 'OK' FROM frxb_util WHERE util_login='" . $info[':login'] . "'";
        } else {
            $query = "UPDATE frxb_util SET util_login=:login, util_nom=:nom, util_prenom=:prenom, util_mail=:mail, util_tel1=:tel1, util_tel2=:tel2, util_password=:pwd,util_active=:active,util_admin=:admin WHERE util_id=" . $mode;
            $verifLogin = "SELECT 1 FROM frxb_util WHERE util_id<>" . $mode . " AND util_login='" . $info[':login'] . "'";
        }



        $verifLog = $this->dB->query($verifLogin);
        $resultVerifLog = $verifLog->fetchAll();
        $verifLog->closeCursor();
        //return $resultSession;

        if ($resultVerifLog == false OR empty($resultVerifLog)) {
            
        } else {
            return false;
        }
        //echo $query;
        $addQuery = $this->dB->prepare($query);
        $addQuery->execute($info);
    }

    function create($info) {
        //$login, $nom,$prenom,$mail,$adresse,$ville,$tel1,$tel2,$mdp
        $query = "INSERT INTO frxb_util (util_login, util_nom, util_prenom, util_mail, util_adresse, util_ville, util_tel1, util_tel2, util_password, util_active)
	  VALUES( :login, :nom,:prenom,:mail,:adresse,:ville,:tel1,:tel2,:mdp,0)";
        echo $query;
        $addQuery = $this->dB->prepare($query);
        $addQuery->execute($info);
    }

    function pointer($date, $heure, $obs = null) {

        $num = $this->util_id();
        $query = "SELECT * FROM frxb_pointeuse WHERE point_util=" . $num . " AND point_date='" . $date . "'";
        //echo $query;
        $getSession = $this->dB->query($query);
        $resultSession = $getSession->fetchAll();
        $getSession->closeCursor();
        //return $resultSession;

        if ($resultSession == false OR empty($resultSession)) {
            if (isset($obs) AND ( $obs == "Y")) {
                return "CLSD";
            }
            $this->insertSession($date, $heure, 'D');
        } else {
            $b = sizeof($resultSession);
            //echo "Taille resultat ".$b;
            for ($i = 0; $i < $b; $i++) {
                $donnees = $resultSession[$i];
                if (is_null($donnees['point_hfin'])) {
                    if (isset($obs) AND ( $obs == "Y")) {
                        return "OPN";
                    }
                    $this->insertSession($date, $heure, $donnees['point_id']);
                    return;
                }
            }
            if (isset($obs) AND ( $obs == "Y")) {
                return "CLSD";
            }
            $this->insertSession($date, $heure, 'D');




            return $resultSession;
        }
    }

    function insertSession($date, $heure, $debut, $heuredebut = null) {
        $num = $this->util_id();

        if ($debut == 'D') {

            //$this->verifPointageHier();
            $query = "INSERT INTO frxb_pointeuse (point_util,point_date,point_hdebut) VALUES (" . $num . ",'" . $date . "','" . $heure . "')";
            echo $query;
            $this->dB->query($query);
        } else {
            if (isset($heuredebut)) {
                $query = "UPDATE frxb_pointeuse SET point_hfin='" . $heure . "', point_hdebut='" . $heuredebut . "' WHERE point_id=" . $debut;
            } else {
                $query = "UPDATE frxb_pointeuse SET point_hfin='" . $heure . "' WHERE point_id=" . $debut;
            }

            //echo $query;
            echo '<h4><div class="alert alert-success" >Modification effectuée.</div></h4>';
            $this->dB->query($query);
            $query = "SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( TIMEDIFF( point_hfin, point_hdebut ) ) ) ) AS nbh
					FROM frxb_pointeuse
					WHERE point_id =" . $debut;
            //echo $query;
            $getNbh = $this->dB->query($query);
            $resultNbh = $getNbh->fetchAll();
            $getNbh->closeCursor();


            $query = "UPDATE frxb_pointeuse SET point_nbh='" . $resultNbh[0]['nbh'] . "' WHERE point_id=" . $debut;
            $this->dB->query($query);
        }
    }

    function nbheure($datedebut, $datefin) {
        
    }

    function recupModifDepot($id) {

        $query = "SELECT d.*, c.* FROM frxb_depot d, frxb_client c WHERE depot_client=client_id AND depot_id=" . $id;
        echo $query;
        $getDepot = $this->dB->query($query);
        $resultDepot = $getDepot->fetchAll();
        $getDepot->closeCursor();
        return $resultDepot;
    }

    /* -----------------------------------------------------------
      Va calculer la moyenne des pourcentage percus sur les depots
      d'un client de tel sorte à que en effectuant un retrait
      on puisse déduire au TA le pourcentage moyen
      ------------------------------------------------------------------ */

    function calculMoyPourcent($clientId) {

        $num = $this->util_id();
        $query = "SELECT AVG(depot_pourcent) AS prct FROM frxb_depot WHERE depot_client=" . $clientId . " AND depot_util=" . $num . " AND depot_pourcent IS NOT NULL";
        $getPrctMoy = $this->dB->query($query);

        $resultPrctMoy = $getPrctMoy->fetchAll();
        $getPrctMoy->closeCursor();

        return $resultPrctMoy[0]['prct'];
    }

    /* -----------------------------------------------------------
      Recupère un tableau avec tous les retraits de l'utilisateur entre
      deux dates placé en parametres ou par defaut ceux du mois en cours
      ------------------------------------------------------------------ */

    function recupRetrait($datedebut = null, $datefin = null) {
        $num = $this->util_id();
        $query = "SELECT r.*, r.retrait_montant*retrait_pourcentage/100 as sommeDeductible, c.client_nom, c.client_solde FROM frxb_retrait r, frxb_client c WHERE r.retrait_client=c.client_id AND retrait_util=" . $num . " AND ";


        if (isset($datedebut) && isset($datefin)) {
            $query = $query . "(retrait_date BETWEEN" . $datedebut . " AND " . $datefin . ")";
            echo $query;
        } else {
            $query = $query . 'date_format(retrait_date, "%c-%Y") = date_format(CURDATE(), "%c-%Y")';
        }


        $getRetrait = $this->dB->query($query);
        $resultRetrait = $getRetrait->fetchAll();
        $getRetrait->closeCursor();

        if ($resultRetrait == false OR empty($resultRetrait)) {
            return false;
        } else {

            return $resultRetrait;
        }
    }

    /* -----------------------------------------------------------
      Recupère la prime sur un montant selon le nbre de depot effectué

      ------------------------------------------------------------------ */

    function calculPrime($montant, $nbrM) {
        $num = $this->util_id();
        $query = "SELECT prime_montant FROM frxb_prime, frxb_palier WHERE palier_id=prime_palier AND " . $nbrM . " BETWEEN prime_nbcontrat_min AND prime_nbcontrat_max AND " . $montant . ">= palier_borne1 AND " . $montant . "< palier_borne2";

        $getPrime = $this->dB->query($query);
        $resultPrime = $getPrime->fetchAll();
        $getPrime->closeCursor();

        return $resultPrime[0]['prime_montant'];
    }

    /* -----------------------------------------------------------
      Recupère un tableau avec tous les dépots de l'utilisateur entre
      deux dates placé en parametres ou par defaut ceux du mois en cours
      ------------------------------------------------------------------ */

    function recupDepot($datedebut = null, $datefin = null) {
        $num = $this->util_id();
        $query = "SELECT d.*, c.client_nom, c.client_solde FROM frxb_depot d, frxb_client c WHERE d.depot_client=c.client_id AND depot_util=" . $num . " AND ";


        if (isset($datedebut) && isset($datefin)) {
            $query = $query . "(depot_date BETWEEN" . $datedebut . " AND " . $datefin . ")";
            echo $query;
        } else {
            $query = $query . 'date_format(depot_date, "%c-%Y") = date_format(CURDATE(), "%c-%Y")';
        }


        $getDepot = $this->dB->query($query);
        $resultDepot = $getDepot->fetchAll();
        $getDepot->closeCursor();

        if ($resultDepot == false OR empty($resultDepot)) {
            return false;
        } else {

            return $resultDepot;
        }
    }

    /* --------------------------------------------------
      Insère un nouveau Depot
      -------------------------------------------------- */

    function insertDepot($info, $mode = null) {
        echo $mode;
        if ($info[':numcli'] == 0) {

            return false;
        }
        if ($mode == "NEW") {
            $query = "INSERT INTO frxb_depot (depot_util, depot_date ,depot_client,depot_montant, depot_firstdeposit, depot_prime, depot_num_month)
		VALUES( :util, :date,:numcli,:montant,:fd,:prime,:compteur)";
            echo $mode;
            $this->majSoldeClient($info[':numcli'], '+', $info[':montant']);
        } elseif ($mode == "SUPPR") {
            
        } else {
            $query = "UPDATE frxb_depot SET depot_date=:date, depot_client=:numcli , depot_montant=:montant, depot_firstdeposit=:fd, depot_prime=:prime, depot_num_month=:compteur,depot_util=:util WHERE depot_id=" . $mode;

            $donnees = $this->recupModifDepot($mode);

            $ancien = $donnees[0];
            //var_dump($ancien);
            //var_dump($info);
            //Met à jour le solde du client en fonction de si c'est le meme ou pas et si la somme a changé
            if (($ancien['depot_client'] - $info[':numcli']) == 0) {
                echo "c'est le meme";
                $this->majSoldeClient($info[':numcli'], '-', $ancien['depot_montant']);
                $this->majSoldeClient($info[':numcli'], '+', $info[':montant']);
            } else {
                $this->majSoldeClient($info[':numcli'], '+', $info[':montant']);
                $this->majSoldeClient($ancien['depot_client'], '-', $ancien['depot_montant']);
            }
        }
        echo $query . "<br/>";
        var_dump($info);
        $addQuery = $this->dB->prepare($query);
        $addQuery->execute($info);


        //$this->majSoldeClient($info[':numcli'],'+',$info[':montant']);
    }

    /* --------------------------------------------------
      Supprimer un  Depot
      -------------------------------------------------- */

    function supprDepot($id, $mode = null) {
        $messageRetour = "";

        //Verifie que le montant du solde ne sera pas negatif aprés la suppression du depot
        $verif = $this->recupModifDepot($id);
        $verif = $verif[0];
        var_dump($verif);
        $client = new Client($verif['depot_client']);
        $soldeClient = $client->client_solde();
        $soldeApreSup = $soldeClient - $verif['depot_montant'];
        if ($soldeApreSup < 0) {
            $messageRetour = "Suppression Impossible. Solde negatif pour client aprés suppression";
        }

        //Verifie que le depot n'a pas déja été rémunéré
        if (is_null($verif['depot_paye']) || isset($mode)) {
            
        } else {
            $messageRetour = "Ce depot est noté comme étant déjà rémunérée vous ne pouvez pas l'effacer.";
        }

        //execute la suppression de la ligne en la mettant comme désactivé
        echo $messageRetour;
        if ($messageRetour == "") {

            $query = "DELETE FROM frxb_depot WHERE depot_id=" . $id;
            $this->dB->query($query);

            //remets à jour le solde client
            $this->majSoldeClient($client->client_id(), '-', $verif['depot_montant']);
            return "SUPPOK";
        } else {
            return "SUPPNO1";
        }
    }

    /* --------------------------------------------------
      Met à jour le solde d'un client
      -------------------------------------------------- */

    function majSoldeClient($idClient, $signe, $montant) {
        $query = "UPDATE frxb_client SET client_solde=client_solde" . $signe . $montant . " WHERE client_id=" . $idClient;
        echo $query;
        $addQuery = $this->dB->query($query);
    }

    /* --------------------------------------------------
      Insère un nouveau Client
      -------------------------------------------------- */

    function insertClient($info, $id) {
        if (is_null($id)) {

            $query = "INSERT INTO frxb_client (client_num,client_nom, client_tel ,client_mail,client_adresse, client_ville, client_comment)
			VALUES(:num, :nom, :tel,:mail,:adresse,:ville,:comment)";
            //echo $query;

            $verifNum = "SELECT 1 FROM frxb_client WHERE client_num='" . $info[':num'] . "'";
            //return 
        } else {
            $query = "UPDATE frxb_client SET client_num=:num, client_nom=:nom, client_mail=:mail, client_tel=:tel, client_comment=:comment, client_adresse=:adresse,client_ville=:ville WHERE client_id=" . $id;
            $verifNum = "SELECT 1 FROM frxb_client WHERE client_id <> " . $id . " AND client_num='" . $info[':num'] . "'";
        }



        $verifCRM = $this->dB->query($verifNum);
        $resultVerifCRM = $verifCRM->fetchAll();
        $verifCRM->closeCursor();
        //return $resultSession;

        if ($resultVerifCRM == false OR empty($resultVerifCRM)) {
            
        } else {
            return false;
        }
        //echo $query;
        $addQuery = $this->dB->prepare($query);
        $addQuery->execute($info);
        $id = $this->dB->lastInsertId();
        return $id;
    }

    /* --------------------------------------------------
      Insère un nouveau Retrait
      -------------------------------------------------- */

    function insertRetrait($info) {

        $info[':pourcent'] = $this->calculMoyPourcent($info[':client']);
        echo "OKkkk";
        if (is_null($info[':pourcent'])) {
            $info[':pourcent'] = 0;
        }
        $query = "INSERT INTO frxb_retrait (retrait_client, retrait_date ,retrait_montant,retrait_pourcentage,retrait_util)
	  VALUES( :client, :date,:montant,:pourcent,:util)";
        echo $query;
        $addQuery = $this->dB->prepare($query);
        //var_dump($info);
        $addQuery->execute($info);

        //Met à jour le compte du client
        $this->majSoldeClient($info[':client'], '-', $info[':montant']);
    }

    /* --------------------------------------------------
      Calcul la rémunération pour un TA entre 2
      dates
      -------------------------------------------------- */

    function calculRemuneration($id, $date1 = null, $date2 = null, $mode) {

        $recapDepots = $this->calculRecapDepots($id, $date1, $date2, $mode);  // Contient nbrDepots, montantTotal, TotalPrime, TotalPourcentage,Total
        //var_dump ($recapDepots);
        $recapRetraits = $this->calculRecapRetraits($id, $date1, $date2, $mode);    // Contient nbrRetraits, MontantTotal, Somme
        $recapHoraire = $this->calculRecapHoraire($id, $date1, $date2, !is_null($recapDepots['montantTotal']) ? $recapDepots['montantTotal'] : 0);    // Contient nbHoraire, TauxHoraire, Montant, TauxEuro, MontantILS
        $retour = array(0 => $recapDepots, 1 => $recapRetraits, 2 => $recapHoraire);
        return $retour;
    }

    function calculRecapDepots($id, $date1 = null, $date2 = null, $mode) {
        $query = "SELECT IFNULL(COUNT(*),0) AS 'nbrDepots', IFNULL(SUM(depot_montant),0) AS 'montantTotal', IFNULL(SUM(depot_prime),0) as 'TotalPrime', IFNULL(p.pourcent_pourcent,0) as 'TotalPourcentage',IFNULL(SUM(depot_montant)*p.pourcent_pourcent/100,0) AS 'SommePourcentage', IFNULL((SUM(depot_montant)*p.pourcent_pourcent/100)+SUM(depot_prime),0) AS 'Total' FROM frxb_depot, frxb_pourcent p WHERE depot_util=" . $id . " AND depot_date BETWEEN '" . $date1 . "' AND '" . $date2 . "' AND (SELECT SUM(d.depot_montant) FROM frxb_depot d WHERE d.depot_util=" . $id . " AND depot_date BETWEEN '" . $date1 . "' AND '" . $date2 . "' )>= p.pourcent_borne1 AND (SELECT SUM(d.depot_montant) FROM frxb_depot d WHERE d.depot_util=" . $id . " AND depot_date BETWEEN '" . $date1 . "' AND '" . $date2 . "' AND '2014-02-28' )<p.pourcent_borne2";

        $getDepot = $this->dB->query($query);
        $resultDepot = $getDepot->fetchAll();
        $getDepot->closeCursor();

        if ($resultDepot == false OR empty($resultDepot)) {
            return false;
        } else {
            $resultDepot = $resultDepot[0];

            return $resultDepot;
        }
    }

    function calculRecapRetraits($id, $date1 = null, $date2 = null, $mode) {

        $query = "SELECT IFNULL(COUNT(*),0) AS 'nbrRetraits',IFNULL(SUM(retrait_montant),0) AS 'MontantTotal', IFNULL(SUM(retrait_montant*retrait_pourcentage/100),0) AS 'Somme' FROM frxb_retrait WHERE retrait_util=" . $id . " AND retrait_date BETWEEN '" . $date1 . "' AND '" . $date2 . "'";
        //echo $query;
        $getRetrait = $this->dB->query($query);
        $resultRetrait = $getRetrait->fetchAll();
        $getRetrait->closeCursor();

        if ($resultRetrait == false OR empty($resultRetrait)) {
            return false;
        } else {
            $resultRetrait = $resultRetrait[0];

            return $resultRetrait;
        }
    }

    function calculRecapHoraire($id, $date1 = null, $date2 = null, $chiffre) {
        $query = "SELECT SEC_TO_TIME( SUM(TIME_TO_SEC( point_nbh) ) ) AS 'nbHoraire', IF(" . $chiffre . ">=a.admin_nbheurechange,a.admin_tauxhorairemax,admin_tauxhorairemin) AS 'TauxHoraire' , a.admin_tauxdevise AS 'TauxEuro', (SUM( TIME_TO_SEC(point_nbh ))/3600)*(IF(" . $chiffre . ">=a.admin_nbheurechange,a.admin_tauxhorairemax,admin_tauxhorairemin)) AS 'Montant',(SUM( TIME_TO_SEC(point_nbh) )/3600)*(IF(" . $chiffre . ">=a.admin_nbheurechange,a.admin_tauxhorairemax,admin_tauxhorairemin))  AS 'MontantILS' FROM frxb_pointeuse, frxb_admin a WHERE point_util=" . $id . " AND point_date BETWEEN '" . $date1 . "' AND '" . $date2 . "'";
        //echo $query;
        $getInfoHor = $this->dB->query($query);
        $resultInfoHor = $getInfoHor->fetchAll();
        $getInfoHor->closeCursor();

        if ($resultInfoHor == false OR empty($resultInfoHor)) {
            return false;
        } else {
            $resultInfoHor = $resultInfoHor[0];


            return $resultInfoHor;
        }
    }

    /* --------------------------------------------------
      Recupère les chiffres effectués et dus aux TA
      -------------------------------------------------- */

    function chiffreAdmin($datedebut = null, $datefin = null, $mode = null) {

        $recupUser = $this->recupListeUtil('active');
        $totChiffre = 0;
        $totRetrait = 0;
        $totDu = 0;


        $b = sizeof($recupUser) - 1;
        ?><h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nom TA</th>
                            <th>Chiffre effectué</th>
                            <th>Somme Retirée</th>
                            <th>Rémunération TA</th>

                        </tr>
                    </thead>
                    <tbody>
        <?php
        for ($i = 0; $i <= $b; $i++) {



            $donnees = $recupUser[$i];
            $result = $this->calculRemuneration($donnees['util_id'], $datedebut, $datefin, 'chiffreAdmin');
            //var_dump($result);
            /* $resultTabRecap[$i] = array("nom"=>			$donnees['util_login'],
              "nbrDep"=> 		$result[0]['nbrDepots'],
              "chiffre"=>		$result[0]['montantTotal'],
              "nbrRet"=>		$result[1]['nbrRetraits'],
              "retrait"=>		$result[1]['MontantTotal'],
              "mntHoraire"=> 	$result[2]['Montant']); */

            $total = $result[0]['Total'] - $result[1]['Somme'];
            $total = ($result[2]['TauxEuro'] * $total) + $result[2]['Montant'];

            $totChiffre = $totChiffre + $result[0]['montantTotal'];
            $totRetrait = $totRetrait + $result[1]['MontantTotal'];
            $totDu = $totDu + $total;
            if (isset($result[2]['TauxEuro'])) {
                $taux = $result[2]['TauxEuro'];
            }
            ?>			
                            <tr>
                                <td><?php echo $donnees['util_login']; ?></td>
                                <td><?php echo number_format($result[0]['montantTotal'], 2); ?> €</td>
                                <td><?php echo number_format($result[1]['MontantTotal'], 2); ?> €</td>
                                <td><?php echo number_format($total, 2); ?> ₪ <small>( environ <?php if ($total == 0) {
                
            } else {
                echo number_format($total / $result[2]['TauxEuro'], 2);
            } ?> €)</small></td>

                                <td><?php ?></td>
                            </tr>

            <?php
            echo "";
        }
        ?>
                    </tbody>
                </table> </div></h4>
        <h4 class="sub-header"><strong>Chiffres</strong> </h4>
        <div class="row">
            <div class="col-md-8 ">
                <table class="table ">

                    <tr>
                        <td>
                    <center>
                        <div class="">Somme depots tous TA </div>
                    </center>
                    </td>
                    <td> <strong><?php echo number_format($totChiffre, 2); ?> € </strong>
                    </td>
                    </tr>
                    <tr>
                        <td>
                    <center>
                        <div class="">Somme retrais tous TA</div>
                    </center>
                    </td>
                    <td> <strong><?php echo number_format($totRetrait, 2); ?> € </strong> 
                    </td>
                    </tr>
                    <tr>
                        <td>
                    <center>
                        <div class="">Resultat </div>
                    </center>
                    </td>
                    <td> <strong><?php echo number_format($totChiffre - $totRetrait, 2); ?> €</strong>
                    </td>
                    </tr>

                    <tr>
                        <td>
                    <center>
                        <div class="">Total Rémuneration des TA</div>
                    </center>
                    </td>
                    <td> <strong><?php echo number_format($totDu, 2); ?>  ₪ </strong><small>( environ <?php if ($totDu == 0) {
                    
                } else {
                    echo number_format($totDu / $taux, 2);
                } ?> €)</small>
                    </td>
                    </tr>


                </table>

            </div>
        </div>
                        <?php
                        /* if($resultTabRecap == false OR empty($resultTabRecap))
                          {
                          return false;
                          } else {
                          //$resultTabRecap=$resultTabRecap[0];


                          return $resultTabRecap;

                          } */
                    }

                    /* --------------------------------------------------
                      Genere et inscrit en base
                      la rémunération pour un TA entre 2 dates
                      -------------------------------------------------- */

                    function genererRemuneration($id, $date1 = null, $date2 = null, $mode = null) {

                        /* $recapDepots=		$this->calculRecapDepots($id,$date1,$date2,$mode); 	// Contient nbrDepots, MontantTotal, TotalPrime, TotalPourcentage,Total


                          //var_dump ($recapDepots);
                          $recapRetraits=	$this->calculRecapRetraits($id,$date1,$date2,$mode);				// Contient nbrRetraits, MontantTotal, Somme
                          $recapHoraire=	$this->calculRecapHoraire($id,$date1,$date2,!is_null($recapDepots['montantTotal']) ? $recapDepots['montantTotal'] : 0);				// Contient nbHoraire, TauxHoraire, Montant, TauxEuro, MontantILS
                          $retour=array(0=>$recapDepots,1=>$recapRetraits,2=>$recapHoraire);
                          return $retour; */

                        //Verifie si sur cette periode une paye n'a pas déjà été généré pour 
                        //le TA auquel cas on demandera de la modifier plutot que d'en ajouter une nouvelle
                        $query = "SELECT * FROM frxb_paye WHERE paye_util=" . $id . " AND (('" . $date1 . "' BETWEEN paye_datedebut AND paye_datefin) OR ('" . $date2 . "' BETWEEN paye_datedebut AND paye_datefin)) ";

                        $getVerifPeriode = $this->dB->query($query);
                        $resultVerifPeriode = $getVerifPeriode->fetchAll();
                        echo 'toto';
                        $getVerifPeriode->closeCursor();

                        if ($resultVerifPeriode == false OR empty($resultVerifPeriode)) {
                            
                        } else {
                            return "Impossible de générer la paye car au moins une des dates de l'intervalle à déjà été rémunérée";
                        }





                        $donnees = $this->calculRemuneration($id, $date1, $date2, $mode);
                        //var_dump($donnees);
                        $total = $donnees[0]['Total'] - $donnees[1]['Somme'];
                        $totalILS = ($total * $donnees[2]['TauxEuro']) + $donnees[2]['Montant'];
                        $queryPaye = "INSERT INTO frxb_paye (paye_util, paye_datedebut, paye_datefin, paye_nb_depot, paye_nb_retrait, paye_montant_depot, paye_montant_retrait,paye_somme_deduite, paye_pourcentage, paye_prime, paye_nb_horaire, paye_taux_horaire, paye_taux_euro, paye_montant) VALUES (" . $id . "  ,'" . $date1 . "'  ,  '" . $date2 . "' , " . $donnees[0]['nbrDepots'] . " ," . $donnees[1]['nbrRetraits'] . "  ,  " . $donnees[0]['montantTotal'] . "," . $donnees[1]['MontantTotal'] . ", " . $donnees[1]['Somme'] . " , " . $donnees[0]['TotalPourcentage'] . ",  " . $donnees[0]['TotalPrime'] . ", '" . $donnees[2]['nbHoraire'] . "', " . $donnees[2]['TauxHoraire'] . " ," . $donnees[2]['TauxEuro'] . " ," . $totalILS . ")";   //Insere l'enregistrement dans la table frxb_paye'
                        $this->dB->query($queryPaye);
                        //echo $queryPaye;
                        $idPaye = $this->dB->lastInsertId();

                        // Maj des enregistrement de depot pour les rataché à la ligne de paye
                        $queryDepot = "UPDATE frxb_depot SET depot_paye=" . $idPaye . ", depot_pourcent=" . $donnees[0]['TotalPourcentage'] . " WHERE depot_util=" . $id . " AND depot_date BETWEEN '" . $date1 . "' AND '" . $date2 . "'";
                        //echo $queryDepot;
                        $this->dB->query($queryDepot);
                        // Maj des enregistrement de retrait pour les rataché à la ligne de paye                    
                        $queryRetrait = "UPDATE frxb_retrait SET retrait_paye=" . $idPaye . " WHERE retrait_util=" . $id . " AND retrait_date BETWEEN '" . $date1 . "' AND '" . $date2 . "'";
                        $this->dB->query($queryRetrait);
                    }

                    function recupPaye() {
                        $num = $this->util_id();
                        $query = "SELECT * FROM frxb_paye WHERE paye_util=" . $num;

                        $getPaye = $this->dB->query($query);
                        $resultPaye = $getPaye->fetchAll();
                        $getPaye->closeCursor();

                        if ($resultPaye == false OR empty($resultPaye)) {
                            return null;
                        } else {
                            //$resultPaye=$resultPaye[0];

                            return $resultPaye;
                        }
                    }

                    /* --------------------------------------------------
                      Supprimer un  Depot
                      -------------------------------------------------- */

                    function supprPaye($id, $mode = null) {
                        $messageRetour = "";


                        if ($messageRetour == "") {



                            $query = "UPDATE frxb_depot SET depot_paye=NULL WHERE depot_paye=" . $id;
                            $this->dB->query($query);
                            $query = "UPDATE frxb_retrait SET retrait_paye=NULL WHERE retrait_paye=" . $id;
                            $this->dB->query($query);
                            $query = "DELETE FROM frxb_paye WHERE paye_id=" . $id;
                            $this->dB->query($query);
                            return "SUPPOK";
                        } else {
                            return "SUPPNO1";
                        }
                    }

                    /* --------------------------------------------------
                      Affichage du tableau de recapitulation
                      -------------------------------------------------- */

                    function tableauRecap($datedebut = null, $datefin = null) {
                        $recupUser = $this->recupListeUtil('active');



                        $b = sizeof($recupUser) - 1;

                        for ($i = 0; $i <= $b; $i++) {



                            $donnees = $recupUser[$i];
                            $result = $this->calculRemuneration($donnees['util_id'], $datedebut, $datefin, 'Tableau');
                            //var_dump($result);
                            $resultTabRecap[$i] = array("nom" => $donnees['util_login'],
                                "nbrDep" => $result[0]['nbrDepots'],
                                "chiffre" => $result[0]['montantTotal'],
                                "nbrRet" => $result[1]['nbrRetraits'],
                                "retrait" => $result[1]['MontantTotal']);
                        }

                        if ($resultTabRecap == false OR empty($resultTabRecap)) {
                            return false;
                        } else {
                            //$resultTabRecap=$resultTabRecap[0];


                            return $resultTabRecap;
                        }
                    }

                    /* --------------------------------------------------
                      Recupère les clients selon une chaine
                      de caractère
                      -------------------------------------------------- */

                    function rechercheClient($chaine) {
                        $query = "SELECT * FROM frxb_client WHERE client_nom LIKE '%" . $chaine . "%' OR client_num LIKE '%" . $chaine . "%'";

                        $getClient = $this->dB->query($query);
                        $resultClient = $getClient->fetchAll();
                        $getClient->closeCursor();

                        if ($resultClient == false OR empty($resultClient)) {
                            return false;
                        } else {

                            return $resultClient;
                        }
                    }

                    /* ------------------------------------------------------------------
                      Retourne le nombre de contrat effectué le mois en cours ou
                      entre deux date si elles sont precisées.
                      ------------------------------------------------------------------ */

                    public function util_compteDepot($date = null) {

                        if (is_null($date)) {
                            $date = "CURDATE()";
                        } else {
                            $date = '"' . $date . '"';
                        }
                        $num = $this->util_id();

                        $query = 'SELECT COUNT(*)+1 AS "compteur"
		FROM frxb_depot
		WHERE depot_util=' . $num . '  
		AND depot_firstdeposit=1
		AND date_format(depot_date, "%c-%Y") = date_format(' . $date . ', "%c-%Y")';


                        $getNbDepot = $this->dB->query($query);
                        $resultNbDepot = $getNbDepot->fetch();
                        $getNbDepot->closeCursor();
                        return $resultNbDepot['compteur'];
                    }

                    /* 	Recupère la liste des horaire pour un Ta entre deux dates */

                    function recupHoraire($datedebut = null, $datefin = null) {
                        $num = $this->util_id();
                        $query = 'SELECT * FROM frxb_pointeuse WHERE point_util=' . $num;



                        if (isset($datedebut) && isset($datefin)) {
                            $query = $query . ' AND (point_date BETWEEN' . $datedebut . ' AND ' . $datefin . ') ORDER BY point_date DESC';
                        } else {
                            $query = $query . ' AND date_format(point_date, "%c-%Y") = date_format(CURDATE(), "%c-%Y") ORDER BY point_date DESC';
                        }
                        // echo $query;

                        $getHoraire = $this->dB->query($query);
                        $resultHoraire = $getHoraire->fetchAll();
                        $getHoraire->closeCursor();

                        if ($resultHoraire == false OR empty($resultHoraire)) {
                            return false;
                        } else {

                            return $resultHoraire;
                        }
                    }

                    /* 	Recupère la liste des prime de la base */

                    function recupPrime($datedebut = null, $datefin = null) {

                        //Recupère les différents paliers de montant
                        $queryPalMnt = "SELECT * FROM frxb_palier";

                        //Recupère les différents paliers de nbr contrats (A faire optimiser la base en creant une table de palier pour les nbr contrat)
                        $queryPalNbrCntr = "SELECT * FROM frxb_prime WHERE prime_palier=";
                    }

                }

///// exemple 

                /*

                  class User
                  {
                  public function __construct()
                  {
                  try
                  {
                  $this->dB = new PDO('mysql:host=localhost;dbname=frxbanque', 'root', '');
                  $this->dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $this->dB->exec('SET NAMES "utf8"');
                  }
                  catch (Exception $e)
                  {
                  exit($e->getMessage());
                  }
                  }

                  public function create ($info)
                  {
                  $addQuery = $this->dB->prepare('INSERT INTO accounts (nom, email, password) VALUES (:pseudo, :mail, :password)');
                  $addQuery->execute($info);
                  }

                  public function canLogin ($username, $password)
                  {
                  $getUser = $this->dB->query('SELECT * FROM accounts WHERE nom = ' . $this->dB->quote($username) . ' AND password = ' . $this->dB->quote($password));
                  $resultUser = $getUser->fetchAll();
                  $getUser->closeCursor();

                  if($resultUser == false OR empty($resultUser))
                  {
                  return false;
                  } else {
                  return $resultUser[0];
                  }
                  }
                  }

                  $user = new User();

                  /*
                  Création d'un utilisateur.

                  $user->create(Array(
                  ":pseudo" 	=> 	"Test",
                  ":password"	=> 	md5("123"),
                  ":mail"		=> 	"test@test.fr"
                  ));


                  /*
                  Récupération d'un utilisateur (connexion).


                  $getUser = $user->canLogin('Test', md5('123'));
                  if(!$getUser)
                  {
                  exit("Erreur lors de la connexion.");
                  } else {
                  var_dump($getUser);		// Affiche l'array des infos sur l'utilisateur.
                  exit("L'utilisateur existe !");
                  }

                 */




                class Client {

                    private $clientId;
                    private $clientLogin;
                    private $clientPwd;
                    private $dB;
                    private $client_id;
                    private $client_nom;
                    private $client_prenom;
                    private $client_mail;
                    private $client_adresse;
                    private $client_ville;
                    private $client_tel;
                    private $client_tel2;
                    private $client_num;
                    private $client_solde;
                    private $client_comment;

                    public function __construct($id) {


                        try {
                            $this->dB = new PDO('mysql:host=localhost;dbname=frxintranet', 'root', 'root');
                            $this->dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $this->dB->exec('SET NAMES "utf8"');
                        } catch (Exception $e) {
                            exit($e->getMessage());
                        }

                        //echo $id;
                        $getClient = $this->dB->query('SELECT * FROM frxb_client WHERE client_id = ' . $this->dB->quote($id));
                        $resultClient = $getClient->fetch(PDO::FETCH_ASSOC);
                        $getClient->closeCursor();

                        if ($resultClient == false OR empty($resultClient)) {
                            return false;
                        } else {
                            //print_r($resultClient);
                            $this->hydrate($resultClient);
                        }
                    }

                    public function hydrate(array $donnees) {

                        foreach ($donnees as $i => $value) {
                            $method = 'set' . ucfirst($i);
                            //echo "public function ".$method."(value){}<br/>";
                            // Si le setter correspondant existe.
                            if (method_exists($this, $method)) {
                                //echo "<br/>public function ". $i."(){return this->".$i."}";
                                // On appelle le setter.
                                $this->$method($value);
                            }
                        }
                    }

                    //Les Setters

                    public function setClient_id($value) {
                        $this->client_id = $value;
                    }

                    public function setClient_num($value) {
                        $this->client_num = $value;
                    }

                    public function setClient_nom($value) {
                        $this->client_nom = $value;
                    }

                    public function setClient_prenom($value) {
                        $this->client_prenom = $value;
                    }

                    public function setClient_mail($value) {
                        $this->client_mail = $value;
                    }

                    public function setClient_adresse($value) {
                        $this->client_adresse = $value;
                    }

                    public function setClient_ville($value) {
                        $this->client_ville = $value;
                    }

                    public function setClient_tel($value) {
                        $this->client_tel = $value;
                    }

                    public function setClient_comment($value) {
                        $this->client_comment = $value;
                    }

                    public function setClient_solde($value) {
                        $this->client_solde = $value;
                    }

                    //Les Getters


                    public function client_id() {
                        return $this->client_id;
                    }

                    public function client_num() {
                        return $this->client_num;
                    }

                    public function client_nom() {
                        return $this->client_nom;
                    }

                    public function client_prenom() {
                        return $this->client_prenom;
                    }

                    public function client_mail() {
                        return $this->client_mail;
                    }

                    public function client_adresse() {
                        return $this->client_adresse;
                    }

                    public function client_ville() {
                        return $this->client_ville;
                    }

                    public function client_tel() {
                        return $this->client_tel;
                    }

                    public function client_comment() {
                        return $this->client_comment;
                    }

                    public function client_solde() {
                        return $this->client_solde;
                    }

                    /* -----------------------------------------------------------
                      Recupère un tableau avec tous les dépots de l'utilisateur entre
                      deux dates placé en parametres ou par defaut ceux du mois en cours
                      ------------------------------------------------------------------ */

                    function recupDepot($datedebut = null, $datefin = null) {
                        $num = $this->client_id();
                        $query = "SELECT d.*, c.* FROM frxb_depot d, frxb_client c WHERE d.depot_client=c.client_id AND depot_client=" . $num;


                        if (isset($datedebut) && isset($datefin)) {
                            $query = $query . " AND (depot_date BETWEEN" . $datedebut . " AND " . $datefin . ")";
                            echo $query;
                        }


                        $getDepot = $this->dB->query($query);
                        $resultDepot = $getDepot->fetchAll();
                        $getDepot->closeCursor();

                        if ($resultDepot == false OR empty($resultDepot)) {
                            return false;
                        } else {

                            return $resultDepot;
                        }
                    }

                    /* -----------------------------------------------------------
                      Recupère un tableau avec tous les retraits de l'utilisateur entre
                      deux dates placé en parametres ou par defaut ceux du mois en cours
                      ------------------------------------------------------------------ */

                    function recupRetrait($datedebut = null, $datefin = null) {
                        $num = $this->client_id();
                        $query = "SELECT r.*, r.retrait_montant*retrait_pourcentage/100 as sommeDeductible, c.client_nom, c.client_solde FROM frxb_retrait r, frxb_client c WHERE r.retrait_client=c.client_id AND retrait_client=" . $num;


                        if (isset($datedebut) && isset($datefin)) {
                            $query = $query . " AND(retrait_date BETWEEN" . $datedebut . " AND " . $datefin . ")";
                            echo $query;
                        }


                        $getRetrait = $this->dB->query($query);
                        $resultRetrait = $getRetrait->fetchAll();
                        $getRetrait->closeCursor();

                        if ($resultRetrait == false OR empty($resultRetrait)) {
                            return false;
                        } else {

                            return $resultRetrait;
                        }
                    }

                }
                ?>




