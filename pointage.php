<?php 


include 'class.php';
$user = new Util('0');
	
	
	/*
	
		Récupération d'un utilisateur (connexion).
	
	*/
	
	if (isset($_POST['login']) AND isset($_POST['password']))
	{
	$getUser = $user->canLogin($_POST['login'], $_POST['password']);
	if(!$getUser)
	{
	?>
	<script>
	var retUrl = 'index.php?message= Les informations transmises ne sont pas valides.';
	//alert(retUrl);
	document.location.href=retUrl;
	</script>
	
	<?php
	 //header('Location:index.php?message= Les informations transmises ne sont pas valides.');
		exit("Erreur lors de la connexion.");
	} else {
	$user = new Util($getUser['util_id']);
	echo "OKKKKKKKKKKKKKKKK";
	//$_SESSION['util'] = $getUser['util_id'];
		//var_dump($getUser);		// Affiche l'array des infos sur l'utilisateur.
		//exit("L'utilisateur existe !");
	}
	}else{	}
	
	//if (isset($_SESSION['util'])){$user=new Util($_SESSION['util']);}
	if (isset($_GET['util'])){$user=new Util($_GET['util']);}
	
	
	
 $maPage="pointage";
 
include 'header.php'; 
	
	if (isset($_GET['date']) AND isset($_GET['heure']) AND !isset($_GET['mode']))
	{
	
	$user->pointer($_GET['date'],$_GET['heure']);
	//header('location:traitement.php?page=pointage.php');
	?>
	<script>
	
	var retUrl = 'pointage.php?util=<?php echo $user->util_id(); ?>';
	//alert(retUrl);
	document.location.href=retUrl;
	</script>
	
	<?php
	
	}
	

?>
	<Script>
	function pointage(mode) 
	{
		var rightNow = new Date();
		
		
		
		var yyyy = rightNow.getFullYear().toString();                                    
        var mm = (rightNow.getMonth()+1).toString(); // getMonth() is zero-based         
        var dd  = rightNow.getDate().toString();             
                            
        var resultat= yyyy + '-' + (mm[1]?mm:"0"+mm[0]) + '-' + (dd[1]?dd:"0"+dd[0]);
		//alert(resultat);
		
		
		var hh = rightNow.getHours().toString();                                    
        var mn = rightNow.getMinutes().toString();         
        var ss  = rightNow.getSeconds().toString();  
		var heure= (hh[1]?hh:"0"+hh[0]) + ':' + (mn[1]?mn:"0"+mn[0]) + ':' + (ss[1]?ss:"0"+ss[0]);
	//	alert(heure);
		if (mode==1){
		
		pointUrl="pointage.php?util=<?php echo $user->util_id(); ?>&date="+resultat+"&heure="+heure;
		document.location.href=pointUrl;
		}
		else
		{
		<?php if (isset($_GET['date']) AND isset($_GET['heure'])){}else{ ?>
		pointUrl="pointage.php?util=<?php echo $user->util_id(); ?>&mode=visu&date="+resultat+"&heure="+heure;
		document.location.href=pointUrl;
		<?php }?>
		}
	
	}
	
	</script>
        <a href="v2/web/app_dev.php/comptabilite/frais" class="btn-lg btn-primary">Redirection vers le Menu Symfony</a>
      <div class="jumbotron">
        <h1>Bienvenue <?php echo $user->util_login(); ?></h1>
		<p class="alert alert-warning"><script language="javascript">pointage(0); </script>
		<?php
		$situation = $user->pointer($_GET['date'],$_GET['heure'],'Y');
		if ($situation=="CLSD")
		{
		echo "Vous n'avez aucune session en cours";
		}elseif ($situation=="OPN"){
		echo "Votre session est ouverte. Veuillez pointez pour la fermer.";
		}
		?>
		
		</p>
		 <p class="lead">Veuillez cliquer sur ce bouton pour enregistrer votre pointage.</p>
        
        <p><a class="btn btn-lg btn-<?php
		
		if ($situation=="CLSD")
		{
		echo "success";
		}elseif ($situation=="OPN"){
		echo "danger";
		}
		?>" href="javascript:pointage(1)" role="button"><?php
		
		if ($situation=="CLSD")
		{
		echo "Ouvrir une session";
		}elseif ($situation=="OPN"){
		echo "Fermer une session";
		}
		?></a></p>
      </div>
	
	
	
	
	<SCRIPT>
	
	
	
		
		
		
	</SCRIPT>
	<?php
	$listeHoraire=$user->recupHoraire();
                                    
	if (!$listeHoraire){}else
	{	
?>




<h2 class="sub-header">Recapitulatif pointage pour le TA <?php echo $user->util_login(); ?></h2>
<br/>
<?php 




?>
      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				  <th>Date</th>
                  <th>Debut Session</th>                 
				  <th>Fin de Session</th>
                  <th>Heures efféctuées</th>
                </tr>
              </thead>
              <tbody>
<?php

$c=sizeof($listeHoraire)-1;
//var_dump($listeHoraire);

	for ($j = 0; $j <=$c; $j++) {


		$donnees=$listeHoraire[$j];

?>			
			 <tr>
                  <td><?php echo date("d/m/y", strtotime($donnees['point_date'])); ?></td>
                  <td><?php echo $donnees['point_hdebut']; ?></td>                  
                  <td><?php $pointageFin = (is_null($donnees['point_hfin'])) ? "Pointage Manquant" : $donnees['point_hfin'];echo $pointageFin ; ?></td>
                  <td><?php $nbh = (is_null($donnees['point_nbh'])) ? "Non Calculé" : $donnees['point_nbh'];echo $nbh ; ?></td>
				   
				  
                </tr>
               
<?php			
		}
		
		


?>

  
   
              </tbody>
            </table>
			
			
		
			
			
			
			
			
          </div>



	
	  
	  
	  
	 
<?php 
	}
include 'footer.php'; ?>