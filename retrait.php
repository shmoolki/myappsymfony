

<?php


?>



<?php


include 'class.php';
if (isset($_GET['util'])){$user = new Util($_GET['util']);}else{$user = new Util('1');}
include 'header.php';
?>
<SCRIPT language="javascript">
	
	function terminer() {
	var rUrl= "depot.php?util=<?php echo $user->util_id(); ?>";
	alert(rUrl)
	document.location.href=rUrl; 
	
	}
	
	
	
	
	function verifMontant() {
	//alert("entr�e");
	var solde = document.getElementById("solde").value;
	var montant = document.getElementById("montant").value;
	//alert(solde);
	//alert(montant);
	var resteSolde=solde-montant;
	//alert(resteSolde);
	if(resteSolde<0 || resteSolde==solde ){
	alert("Il est impossible de saisir un montant null ou sup�rieur au solde!");
	
	
	}else{	
	var retClient = document.getElementById("client").value;
	alert(retClient);
	
	var retDate = document.getElementById("date").value;
	var retMontant = document.getElementById("montant").value;
	
	var retUrl = 'retrait.php?mode=INS&client='+retClient+'&date='+retDate+'&reste='+resteSolde+'&montant='+retMontant+'&solde='+solde+'&util=<?php echo $user->util_id(); ?>';
	//alert(retUrl);
	document.location.href=retUrl;
	
	//alert("ok");
	}
	}
	
	
  </SCRIPT>
  <?php

if (isset($_GET['mode']) && ($_GET['mode']=="INS"))
{
    
$num=$user->util_id();
$idClient=$user->insertRetrait(array(	":client" => $_GET['client'] ,
							":montant"=>$_GET['montant'],
							":date"=>$_GET['date'],
							":util"=>$num,
							":pourcent"=>""));

?>
	<SCRIPT  type="text/javascript">
	terminer();
	
  </SCRIPT>

	<?php							
}

?>


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Retrait <br/> Le solde de ce client est de : <?php echo $_GET['solde'];?></legend>
<input type="hidden" name="mode" value=INS>
<input type="hidden" id="solde" name="solde" value="<?php echo $_GET['solde'];?>">
<input type="hidden" id="client" name="client" value="<?php echo $_GET['client'];?>">

<!-- Text input-->
<div class="form-group">
 
  <div class="col-md-4">
  <input id="date" name="date" type="text" placeholder="Date" class="form-control input-md datepicker" required="">
     
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  
  <div class="col-md-4">
  <input id="montant" name="montant" type="text" placeholder="Montant" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Valider"></label>
  <div class="col-md-4">
	 <a href="javascript:verifMontant();" class="btn btn-primary btn-md" role="button">Retrait</a>
	 
    
  </div>
</div>

</fieldset>
</form>
<?php


		
			
			
			
   





include 'footer.php';
?>