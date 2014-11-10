<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="refresh" content="30">
    <link rel="shortcut icon" href="images/favicon.ico">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	

    <title>FRXIntranet</title>

    <!-- Bootstrap core CSS -->
	<link href="style/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link href="style/style.css" rel="stylesheet">
	    <link href="style/datepicker.css" rel="stylesheet">
  </head>

  <body>


	<img src="images/logo.png" alt="FRXbanque" class="img-rounded">
      <div class="header">
	
	
 
    <?php
	


include 'class.php';
if (isset($_GET['util'])){$user= new Util($_GET['util']); }else{$user=new Util(0); }


?>
	
<div class="row">
  <div class="col-md-4"> <h3 class="text-muted">INTRANET</h3></div>
  <div class="col-md-4"><h1>Chiffres de l'equipe</h1></div>
  <div class="col-md-4"><a href="util.php?util=<?php $num=$user->util_id();echo $num; ?>" class="btn btn-default btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Retour au menu principal</a></div>
</div>
<div class="row">     
<div class ="row col-md-offset-1">
</div>
<div class ="row col-md-offset-1">
	 
		<center></Center>
			
      </div>
	  
	  </div>
	 
</div>

 


<?php 
if (isset($_GET['datedebut']) AND isset($_GET['datefin'])){}else{
$m=date("m");
$y=date("Y");
$datedebut=$y."-".$m."-01";
$mois = mktime( 0, 0, 0, $m, 1, $y ); 
      //setlocale('LC_ALL', 'fr_FR');
$j= date("t",$mois);
$datefin=$y."-".$m."-".$j;
$tableau=$user->tableauRecap($datedebut,$datefin);
}

if (!$tableau){}else
{

?><h4>
      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				  <th>Nom TA</th>
                  <th>Chiffre effectué</th>
                  <th>Somme Retirée</th>
                  <th>Nombre de depots</th>
                  <th>Nombre de retrait</th>  		  
                </tr>
              </thead>
              <tbody>
<?php

$b=sizeof($tableau)-1;


	for ($i = 0; $i <=$b; $i++) {


		$donnees=$tableau[$i];

?>			
			 <tr>
                  <td><?php echo $donnees['nom']; ?></td>
                  <td><?php echo number_format($donnees['chiffre'],2); ?> </td>
                  <td><?php echo number_format($donnees['retrait'],2); ?></td>
                  <td><?php $nbrDep = ($donnees['nbrDep'] == 0) ? "0" :$donnees['nbrDep'];echo $nbrDep ; ?></td>
                  <td><?php $nbrRet = ($donnees['nbrRet'] == 0) ? "0" :$donnees['nbrRet'];echo $nbrRet ;  ?></td>
			</tr>
               
<?php			
		}

?>

  
   
              </tbody>
            </table> </div></h4>
	<?php			
	}
		
?>		

   
	   </body>
	   </html>