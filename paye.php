<?php


include 'class.php';
$maPage="paye";
if (isset($_GET['util'])){$user= new Util($_GET['util']); }
include 'header.php';



if (isset($_POST['id']) && isset ($_POST['datedebut']) && isset($_POST['datefin']))
{
	
	$a=$user->genererRemuneration($_POST['id'],$_POST['datedebut'],$_POST['datefin'],"eee");
	 if($a==""){}else{echo '<div class="alert alert-danger"><strong>'.$a.'</strong></div>';}

}

if (isset($_GET['mode']) && isset($_GET['paye']) && $_GET['mode']=="SUPPR")
{
	
	$a=$user->supprPaye($_GET['paye']);
	switch ($a) {
    case "SUPPOK":
        echo '<div class="alert alert-danger"><strong>SUPPRESSION EFFECTUÉE</strong></div>';
        break;
    case "SUPPNO1":
        echo '<div class="alert alert-danger">SUPPRESSION IMPOSSIBLE</div>';
        break;
    case 2:
        echo "i égal 2";
        break;
	}

}




?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Generer une paye</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" id="frmTauxChange" method="POST" action="paye.php?util=<?php echo $_GET['util'];?>&utilcons=<?php echo $_GET['utilcons'];?>">




<!-- Form Name -->

		<div class="form-group">
		<label class="col-md-4 control-label" for="date">Date de debut de période</label>  
		<div class="col-md-4" data-date-format="dd-mm-yyyy">
                    <input id="date" name="datedebut" type="text" placeholder="" class="form-control input-md datepicker" required="" >
		<span class="add-on"><i class="icon-th"></i></span>
		</div>
	  </div>
	 <div class="form-group">
		<label class="col-md-4 control-label" for="date">Date fin de période</label>  
		<div class="col-md-4" data-date-format="dd-mm-yyyy">
                    <input id="date" name="datefin" type="text" placeholder="" class="form-control input-md datepicker" required="" >
		<span class="add-on"><i class="icon-th"></i></span>
		</div>
	  </div>
           <div class="form-inline">
                <button type="submit" class="btn btn-success col-md-offset-3">Visualiser les données</button>
                <button  onclick="#" type="submit" class="btn btn-primary">Enregistrer Paye</button>
	  </div>
	  <input id="id" name="id" type="hidden" placeholder="" value="<?php echo $_GET['utilcons']; ?>" >
	  
          <input id="util" name="util" type="hidden" placeholder="" value="<?php $num=$user->util_id();echo $num; ?>"  >
	  

       
</form>
  </div>
</div>

<?php




//echo "ok";
$recupUser= $user->recupListeUtil('active');
	//echo "lalalala";
	
	//var_dump($recupUser);
	$b=sizeof($recupUser)-1;
	//echo $b;

	for ($i = 0; $i <=$b; $i++) {
	  // echo $i;
		$donneesUser=$recupUser[$i];
		if (isset($_GET['utilcons']) && $donneesUser['util_id']==$_GET['utilcons']  ){
		
		$userBoucle = new Util($donneesUser['util_id']);
		$listePaye=$userBoucle->recupPaye();
		}
		elseif (!isset($_GET['utilcons']))
		{
		$userBoucle = new Util($donneesUser['util_id']);
		$listePaye=$userBoucle->recupPaye();
		}else{$listePaye="";}
		
		
        
		
		//var_dump($donneesUser);
		
                                    
	if (!$listePaye){}else
	{	
?>




<h2 class="sub-header">Recapitulatif paye pour le TA <?php echo $userBoucle->util_login(); ?></h2>
<br/>
<br/>
<?php 

$c=sizeof($listePaye)-1;
//var_dump($listePaye);

	

		for ($j = 0; $j <=$c; $j++) {
		$donnees=$listePaye[$j];
		//var_dump($donnees);

?>			
			  
			<div class="row">
			<div class="col-md-6 col-md-offset-2">
			 <strong><center><div class="alert alert-info">Periode entre <?php echo $donnees['paye_datedebut']; ?> et <?php echo $donnees['paye_datefin']; ?></div></center></strong>
			<div class="table-responsive">
            <table class="table ">

			   <tr >
                  <td>Nombre de depots</td>
                  <td><?php echo $donnees['paye_nb_depot']; ?></td>
                </tr>
				<tr >
                  <td>Nombre de retraits</td>
                  <td><?php echo $donnees['paye_nb_retrait']; ?></td>
                </tr>
				<tr >
                  <td>Montant des depots</td>
                  <td><?php echo  number_format($donnees['paye_montant_depot'],2); ?> €</td>
                </tr>
				<tr >
                  <td>Montant des retraits</td>
                  <td><?php echo number_format($donnees['paye_montant_retrait'],2); ?> €</td>
                </tr><tr >
                  <td>Somme déduite</td>
                  <td><?php echo number_format($donnees['paye_somme_deduite'],2); ?> €</td>
                </tr>
				<tr >
                  <td>Pourcentage</td>
                  <td><?php echo $donnees['paye_pourcentage']; ?></td>
                </tr>
				<tr >
                  <td>Prime</td>
                  <td><?php echo $donnees['paye_prime']; ?> €</td>
                </tr>
				<tr >
                  <td>Nombre d'heures travaillées</td>
                  <td><?php echo $donnees['paye_nb_horaire']; ?></td>
                </tr>
				<tr >
                  <td>Taux horaire</td>
                  <td><?php echo $donnees['paye_taux_horaire']; ?> ₪</td>
                </tr>
				<tr >
                  <td>Taux Euro</td>
                  <td><?php echo $donnees['paye_taux_euro']; ?></td>
                </tr>
				<tr class="success">
                  <td>Montant de la paye</td>
                  <td><?php echo number_format($donnees['paye_montant'],2); ?> ₪ </td>
                </tr>
				<tr class="warning">
                  <td colspan=2><center><a href="paye.php?util=<?php echo $num; ?>&utilcons=<?php echo $userBoucle->util_id(); ?>&paye=<?php echo $donnees['paye_id']; ?>&mode=SUPPR" class="btn btn-danger btn-sm" role="button">Suppression</a><center> </td>
                </tr>
               </table>
			   </div>
			   </div>
			   </div>
			   <br/>
			   
<?php			
		
		}}}

include 'footer.php';
?>

