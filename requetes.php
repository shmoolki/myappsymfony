 
 Différentes requetes de l'appli
 
 
 
 <!-- Nouveau User -->
 
INSERT INTO frxb_util (util_nom, util_prenom, util_mail, util_adresse, util_ville, util_tel1, util_tel2, util_password, util_active) VALUES
( 'Bitane', 'Daniel', 'frxbanque@gmail.com', '', 1, '0543030129', NULL, 'TA01', 1);
 
 
 
 <!-- Modification User --> 
 UPDATE  frxb_util SET  util_active =  '?' WHERE  frxb_util.util_id =?;
 
 
 
<!-- Pointeuse Heure de depart -->
Insert into frxb_pointeuse (point_util,point_date,point_hdebut) VALUES ($,CURDATE(),CURTIME()) 

<!-- Pointeuse Heure d'arrivée -->
Update frxb_pointeuse SET  point_hfin =  CURTIME() WHERE  frxb_point.point_id =?;

<!-- Calcul dun nombre d'heures travaillés par tranche -->
SELECT TIMEDIFF( point_hfin, point_hdebut ) 
FROM frxb_pointeuse
WHERE  point_id =1

<!-- Calcul dun nombre d'heures travaillés entre 2 dates pour une personne -->
SELECT SEC_TO_TIME( SUM( TIME_TO_SEC( TIMEDIFF( point_hfin, point_hdebut ) ) ) ) 
FROM frxb_pointeuse
WHERE point_util = $util_id
AND  (point_date BETWEEN $date1 AND $date2)


<!-- Insertion d'un nouveau dépot -->

INSERT INTO frxb_depot (depot_date,depot_num_month, depot_montant, depot_firstdeposit, depot_pourcent, depot_prime, depot_util) 
VALUES ( CURDATE(), SELECT COUNT(*)+1 FROM frxb_depot WHERE depot_util=$util_id AND date_format(depot_date, "%c-%Y") = date_format(CURDATE(), "%c-%Y")
, $depot_montant, $depot_fd, $depot_pourcent, $depot_prime, $util_id);



<!-- Calcul de la prime pour un nouveau depot -->
SELECT prime_montant FROM frxb_prime WHERE 
	( 	SELECT COUNT(*)+1 
		FROM frxb_depot
		WHERE depot_util=$util_id 
		AND depot_firstdeposit=1
		AND date_format(depot_date, "%c-%Y") = date_format(CURDATE(), "%c-%Y")
	) BETWEEN prime_nbcontrat_min AND prime_nbcontrat_max
	AND prime_palier = (SELECT palier_id FROM frxb_palier WHERE $montant BETWEEN palier_borne1 AND palier_borne2)

<!-- Calcul du pourcentage -->

SELECT pourcent_id 
FROM frxb_pourcent 
WHERE (
SELECT SUM(depot_montant) FROM frxb_depot WHERE 
)

<!-- Recupération des depots -->


SELECT * FROM frxb_depot WHERE depot_util=$util_id AND (depot_date BETWEEN $date1 AND $date2) 


<!-- Retrait sur un depot -->
IN $depot_id
INSERT INTO frxb_retrait (retrait_montant)


<!-- Calcul du taux horaire pour une personne -->

<!-- Calcul du salaire d'une personne -->


<!-- Modification depot -->


<!-- Modification retrait -->

<!-- Simulation -->

 
 