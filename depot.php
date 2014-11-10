<?php 
include 'class.php';
if (isset($_GET['util'])){$user = new Util($_GET['util']);}else{$user = new Util('1');}

 $maPage="depot";
include 'header.php';
if (isset($_GET['depot'])){ $depot=$user->recupModifDepot($_GET['depot']);$depot=$depot[0];}

//Si on se trouve en mode suppression
if (isset($_GET['mode']) && ($_GET['mode']=='SUPPR'))
{
$renvoi=$user->supprDepot($_GET['depot']);

$renvoi="depot.php?message=".$renvoi."&util=".$user->util_id();
?>
<SCRIPT language="javascript">
   
		document.location.href="<?php echo $renvoi;?>"; 
	
  </SCRIPT>


<?php

}




if(isset($_GET['mode'])){
if ($_POST['selectfd']==0){
$prime=0;
}else{
$myCompteur=$user->util_compteDepot($_POST['date']);
$prime=$user->calculPrime($_POST['montant'],$myCompteur);
}






$user->insertDepot(array(	":util" => 	$_POST['util'] ,
							":date"=>$_POST['date'],
							":numcli"=>$_POST['client'],
							":montant"=>$_POST['montant'],
							":fd"=>$_POST['selectfd'],
							":prime"=>$prime,
							":compteur"=>$myCompteur),$_GET['mode']);
							

 ?>
<script language="javascript">
var retUrl = 'depot.php?util=<?php $num=$user->util_id();echo $num; ?>';
	//alert(retUrl);
	document.location.href=retUrl;

</script>
<?php }

if (isset($_GET['message']))
{
	switch ($_GET['message']) {
    case "SUPPOK":
        echo '<div class="alert alert-danger">SUPPRESSION EFFECTUÉE</div>';
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
<form class="form-horizontal" method="post" action="depot.php?mode=<?php if (isset($_GET['depot'])){echo $_GET['depot'];}else{echo "NEW";} ?>&util=<?php $num=$user->util_id();echo $num; ?>">
<fieldset>

<!-- Form Name -->
<legend>Depots-Retraits  <?php echo " pour le TA ".$user->util_login(); ?></legend>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adress">Nom du Client</label>  
 <div class="col-lg-8">
    <div class="input-group">
	<input type="hidden" name="util" value=<?php if(isset($_GET['depot'])){echo $depot['depot_util'];}else{ echo $num;}   ?> >
	<input type="hidden"  name="client" id="numcli" <?php if (isset($_GET['id'])){ echo "value=".$_GET['id'];}elseif(isset($_GET['depot'])){echo "value=".$depot['depot_client'];} ?>>	
      <input type="text" id="client" class="form-control "  required="" 
	  <?php 
	  // Verifie Si on est en mode modification ou recupération client pour remplir la zone
	  $affich="";
	  if (isset($_GET['depot']))
	  {
	  $nom=str_replace("'", " ",$depot['client_nom']);
	  $nom=stripslashes($nom); 
	  $affich= "value='".$depot['depot_client'].' - '.$nom."' disabled";
	  
	  } 
	  if (isset($_GET['nomclient'])){
	  $nom=str_replace("'", "",$_GET['nomclient']);
	  $nom=stripslashes($nom); 
	  $affich="value='".$_GET['numclient'].' - '.$nom."' disabled";
	 
	  }
	  echo $affich;
	  ?>
	  >
	  
      <span class="input-group-btn">
        <button id="rechercheclient" class="btn btn-default" type="button" onclick="popup('client.php?<?php if (isset($_GET['depot'])){echo "depot=".$depot['depot_id']."&";}?>util=<?php $num=$user->util_id();echo $num; ?>');">Selectionnez</button>
		<button id="rechercheclient" class="btn btn-default" type="button" onclick="popup('client.php?<?php if (isset($_GET['depot'])){echo "depot=".$depot['depot_id']."&";}?>util=<?php $num=$user->util_id();echo $num; ?>&mode=NEW&');">Nouveau</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

</div>



<!-- Text input-->





<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date du depot</label>  
  <div class="col-md-4" data-date-format="dd-mm-yyyy">
  <input id="date" name="date" type="text" placeholder="" class="form-control input-md datepicker" required="" 
  <?php if (isset($_GET['depot'])){echo "value=".$depot['depot_date'];} ?> 
  >
    <span class="add-on"><i class="icon-th"></i></span>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for=""> Numéro de dépot ce mois-ci:</label>  
  <div class="col-md-4">
  <label class="col-md-4 control-label" for=""><?php if (isset($_GET['depot'])){echo $depot['depot_num_month'];} else{ echo $user->util_compteDepot(); }?></label>  
  <input type=hidden name="compteur" value="<?php if (isset($_GET['depot'])){echo $depot['depot_num_month'];} else{ echo $user->util_compteDepot(); } ?>">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adress">Montant</label>  
  <div class="col-md-4">
  <input id="montant" name="montant" type="text" placeholder="" class="form-control input-md" required="" <?php if (isset($_GET['depot'])){echo "value=".$depot['depot_montant'];}?>>
    
  </div>
</div>

<SCRIPT language="javascript">
    function popup(page) {
		var hu = document.getElementById("client").value; 
		//hu="";
		page=page+'&client='+hu;
		document.location.href=page; 
		//window.open(page,'nom_de_ma_popup','menubar=yes, scrollbars=yes, top=10, left=150, width=500, height=400');
    }
  </SCRIPT>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectfd">Type de dépôt</label>
  <div class="col-md-4">
    <select id="selectfd" name="selectfd" class="form-control">
      <option value="1" <?php if (isset($_GET['depot']) AND $depot['depot_firstdeposit']==1){echo "selected";}?>>First deposit</option>
      <option value="0" <?php if (isset($_GET['depot']) AND $depot['depot_firstdeposit']==0){echo "selected";}?>>Rétention</option>
    </select>
  </div>
</div>


<!-- Button -->
<center>
<div class="form-group">
  <label class="col-md-4 control-label" for="Enregistrer"></label>
  <div class="col-md-4">
    <button id="Enregistrer" name="Enregistrer" class="btn btn-primary x-large"><?php if (isset($_GET['depot'])){echo "Mettre à jour les modifications";}else{echo "Enregistrer";}?></button>
  </div>
</div>
</center>
</fieldset>
</form>
<div class="footer">
       
      </div>

<h2 class="sub-header">Recapitulatif pour le TA <?php echo $user->util_login(); ?></h2>
<br/>
<?php 
$listeDepot=$user->recupDepot();
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
				  <th>Modifier/Supprimer</th>
				  <th>Retrait</th>
                </tr>
              </thead>
              <tbody>
<?php

$b=sizeof($listeDepot)-1;
//var_dump($listeDepot);

	for ($i = 0; $i <=$b; $i++) {


		$donnees=$listeDepot[$i];

?>			
			 <tr>
                  <td><?php echo date("d/m/y", strtotime($donnees['depot_date'])); ?></td>
                  <td><?php echo $donnees['client_nom']; ?></td>
                  <td><?php echo $donnees['depot_montant']; ?></td>
                  <td><?php $firstdeposit = ($donnees['depot_firstdeposit'] == 1) ? "FD" : "Retention";echo $firstdeposit ; ?></td>
                  <td><?php echo $donnees['depot_num_month']; ?></td>
				  <td><?php echo $donnees['depot_prime']; ?></td>
				  <td>
				  <a href="depot.php?util=<?php echo $num; ?>&depot=<?php echo $donnees['depot_id']; ?>" class="btn btn-success btn-sm" role="button">Modif</a><a href="depot.php?util=<?php echo $num; ?>&depot=<?php echo $donnees['depot_id']; ?>&mode=SUPPR" class="btn btn-danger btn-sm" role="button">Suppr</a>
				  </td>
				  <td>
				  <?php if($donnees['client_solde']!=0){ ?>
				  <a href="<?php echo "retrait.php?util=".$num."&client=".$donnees['depot_client']."&solde=".$donnees['client_solde']; ?>" class="btn btn-primary btn-sm" role="button">Retrait</a><?php }else{ echo "Solde Nul";} ?>
				  </td>
                </tr>
               
<?php			
		}
		
		


?>

  
   
              </tbody>
            </table>
			
			
		
			
			
			
			
			
          </div>
		   
		  	<br/>
<?php		
		
		
}

$listeRetrait=$user->recupRetrait();
if (!$listeRetrait){}else
{

?>
			
		<h2 class="sub-header">Recapitulatif des retraits pour le TA <?php echo $user->util_login(); ?></h2>
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
                  <td><?php echo $donnees['retrait_montant']; ?></td>
                  <td><?php echo $donnees['retrait_pourcentage']; ?></td>
				  <td><?php echo $donnees['sommeDeductible']; ?></td>
				  
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
		  
		  


<?php include 'footer.php'; ?>