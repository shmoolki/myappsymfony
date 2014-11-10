
<?php 
//session_start();
include 'class.php'; 
if (isset($_GET['util'])){$user = new Util($_GET['util']);}else{$user = new Util('1');}
$num=$user->util_id();


if (isset($_GET['datedebut']) AND isset($_GET['datefin'])){}else{
$m=date("m");
$y=date("Y");
$datedebut=$y."-".$m."-01";
$mois = mktime( 0, 0, 0, $m, 1, $y ); 
      //setlocale('LC_ALL', 'fr_FR');
$j= date("t",$mois);
$datefin=$y."-".$m."-".$j;

//echo $datedebut." et date fin ".$datefin;
		}
		
		if(isset($_GET['utilcons'])){$utilRecap=$_GET['utilcons'];}else{$utilRecap=$num;}
		$user1= new util($utilRecap);
$donneesRemuneration=$user1->calculRemuneration($utilRecap,$datedebut,$datefin,"blbl");
$donneesRemDep=$donneesRemuneration[0];
$donneesRemRet=$donneesRemuneration[1];
$donneesRemHor=$donneesRemuneration[2];
	
	/*
		Création d'un utilisateur.
	
	$user->create(Array(
		":pseudo" 	=> 	"Test",
		":password"	=> 	md5("123"),
		":mail"		=> 	"test@test.fr"
	));
	
	*/
	/*
	
		Récupération d'un utilisateur (connexion).
	
	*/
	
	 $maPage="recap";
 include 'header.php'; 	
$user1= new util($utilRecap);
?>

  
<h2 class="sub-header">Recapitulatif des depots pour le TA <?php echo $user1->util_login(); ?></h2>
<br/>
<?php 
$listeDepot=$user1->recupDepot();
if (!$listeDepot){}else
{

?>
      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				  <th>Date</th>
                  <th>Client</th>
                  <th>Montant</th>
                  <th>FD</th>
                  <th>Compteur </th>
                  <th>Prime</th>				  
                </tr>
              </thead>
              <tbody>
<?php

$b=sizeof($listeDepot)-1;

	for ($i = 0; $i <=$b; $i++) {


		$donnees=$listeDepot[$i];

?>			
			 <tr>
                  <td><?php echo date("d/m/y", strtotime($donnees['depot_date'])); ?></td>
                  <td><?php echo $donnees['client_nom']; ?></td>
                  <td><?php echo number_format($donnees['depot_montant'],2);; ?></td>
                  <td><?php $firstdeposit = ($donnees['depot_firstdeposit'] == 1) ? "FD" : "Retention";echo $firstdeposit ; ?></td>
                  <td><?php echo $donnees['depot_num_month']; ?></td>
				  <td><?php echo $donnees['depot_prime']; ?></td>				  
                </tr>
               
<?php			
		}
		
		


?>

  
   
              </tbody>
            </table> </div>
	<?php			
		}
		
		


?>		
			
         
		
		  <div class="row">
		<div class="col-md-6 col-md-offset-5">
		  <table class="table ">
  
			<tr>
				<td>
				<center>
				<div class="">Nombre de depots: </div>
				</center>
				</td>
				<td> <strong><?php echo $donneesRemDep['nbrDepots']; ?></strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
				<div class="">Montant total: </div>
				</center>
				</td>
				<td> <strong><?php echo number_format($donneesRemDep['montantTotal'],2); ?></strong> 
				</td>
			</tr>
			<tr>
				<td>
				<center>
		  <div class="">Total Prime: </div>
		   </center>
				</td>
				<td> <strong><?php echo number_format($donneesRemDep['TotalPrime'],2); ?></strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
		  <div class="">Pourcentage: </div>
		   </center>
				</td>
				<td> <strong><?php echo $donneesRemDep['TotalPourcentage']; ?></strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
		  <div class="">Somme Pourcentage: </div>
		   </center>
				</td>
				<td> <strong><?php echo number_format($donneesRemDep['SommePourcentage'],2); ?></strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
		  <div class="">Total </div>
		   </center>
				</td>
				<td> <strong><?php echo number_format($donneesRemDep['Total'],2); ?></strong>
				</td>
			</tr>
					 
		  
			</table>
			
		</div>
		</div>
<?php		
		
		


$listeRetrait=$user1->recupRetrait();
if (!$listeRetrait){}else
{

?>
			
		<h2 class="sub-header">Recapitulatif des retraits pour le TA <?php echo $user1->util_login(); ?></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Client</th>
                  <th>Montant</th>
                  <th>% déduit</th>
				  <th>Somme déduite</th>
                </tr>
              </thead>
              <tbody>
                
                
   
             
		  
	<?php
	


$b=sizeof($listeRetrait)-1;

	for ($i = 0; $i <=$b; $i++) {


		$donnees=$listeRetrait[$i];

?>			
			 <tr>
                  <td><?php echo date("d/m/y", strtotime($donnees['retrait_date'])); ?></td>
                  <td><?php echo $donnees['client_nom']; ?></td>
                  <td><?php echo number_format($donnees['retrait_montant'],2); ?></td>
                  <td><?php echo $donnees['retrait_pourcentage']; ?></td>
				  <td><?php echo number_format($donnees['sommeDeductible'],2); ?></td>
				  
                </tr>
               
<?php			
		}
		
		?>
		 </tbody>
            </table>
							
          </div>
		  		  <?php
}
?>	

	 <div class="row">
		<div class="col-md-6 col-md-offset-5">
		  <table class="table ">
  
			<tr>
				<td>
				<center>
				<div class="">Nombre de retraits: </div>
				</center>
				</td>
				<td> <strong><?php echo $donneesRemRet['nbrRetraits']; ?></strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
				<div class="">Montant total retirés: </div>
				</center>
				</td>
				<td> <strong><?php echo number_format($donneesRemRet['MontantTotal'],2); ?></strong> 
				</td>
			</tr>
			<tr>
				<td>
				<center>
				<div class="">Somme retiré selon pourcentage: </div>
				</center>
				</td>
				<td> <strong><?php echo number_format($donneesRemRet['Somme'],2); ?></strong>
				</td>
			</tr>
			
			</table>
			
		</div>
		</div>
		
		<h4 class="sub-header">Recapitulatif Rémunération pour le TA <?php echo $user1->util_login(); ?></h4>
		 <div class="row">
		<div class="col-md-6 ">
		  <table class="table ">
  
			<tr>
				<td>
				<center>
				<div class="">Nombre d'heures travaillées </div>
				</center>
				</td>
				<td> <strong><?php echo $donneesRemHor['nbHoraire']; ?></strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
				<div class="">Salaire Horaire  ₪ </div>
				</center>
				</td>
				<td> <strong><?php echo $donneesRemHor['TauxHoraire']; ?></strong> 
				</td>
			</tr>
			<tr>
				<td>
				<center>
				<div class="">Salaire Fixe  ₪ </div>
				</center>
				</td>
				<td> <strong><?php $nbr =number_format($donneesRemHor['Montant'],2);  
				echo $nbr; ?> ₪ </strong>
				</td>
			</tr>
			
			<tr>
				<td>
				<center>
				<div class="">Total Euros (Primes et %)</div>
				</center>
				</td>
				<td> <strong>
				<?php
				$total =$donneesRemDep['Total']-$donneesRemRet['Somme'];  
				echo number_format($total,2); ?> &euro; </strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
				<div class="">Taux de change </div>
				</center>
				</td>
				<td> <strong><?php echo $donneesRemHor['TauxEuro']; ?></strong>
				</td>
			</tr>
			<tr>
				<td>
				<center>
				<div class="">Total ILS ₪ </div>
				</center>
				</td>
				<td> <strong><?php echo number_format(($donneesRemHor['TauxEuro']*$total)+$donneesRemHor['Montant'],2) ?> ₪ </strong>
				</td>
			</tr>
			
			</table>
			
		</div>
		</div>
		
		
			
  
		   
		  
		  
		  
		  
<?php include 'footer.php'; ?>
