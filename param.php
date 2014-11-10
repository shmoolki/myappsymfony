<?php


include 'class.php';
$maPage="parametrage";

if (isset($_GET['util'])){$user= new Util($_GET['util']); }
include 'header.php';

if (isset($_GET['mode'])){
switch ($_GET['mode']){
    case "TXCHG":
        $user->MajTauxEuro($_GET['taux']);
        
        break;
    case "CHGTH":
        $user->ChangeTauxHoraire($_GET['sommechange'],$_GET['heuremin'],$_GET['heuremax']);
        break;
    
    
    case "UPMTPLGPRM":                // UPdater le MonTant pour une certaine PLaGe pour PRiMe
        $user->UpdateMontantPrime($_GET['numplg'],$_GET['montant']);
        break;
    
    case "UPPLGPRM":                 //UPdater les bornes d'une PLaGes pour PRiMes
        $user->UpdateBornePrime($_GET['numplg'],$_GET['borne1'],$_GET['borne2']);
        break;
    
    case "UPPRCTPLGPRCT":           //UPdater le PouRCenT d'une plage
        $user->UpdatePourcent($_GET['numplg'],$_GET['prct']);
        break;
    
    case "UPPLGPRCT":               //UPdater la PLaGe d'un PouRCenT
        $user->UpdateBornePourcent($_GET['numplg'],$_GET['borne1'],$_GET['borne2']);
        break;
    
    
    
    
    default :
        break;
}
}
?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Taux de conversion</h3>
  </div>
  <div class="panel-body">
    <form class="form-inline" id="frmTauxChange" method="GET" action="param.php">


<!-- Form Name -->
	  <div class="form-group">
		<label class="col-md-4 control-label" for="taux">Taux de conversion</label>  
		<div class="col-md-4" >
		<input id="tauxconversion" name="taux" type="text" placeholder="" class="form-control input-md " required="" >
               
               
		</div>
	  </div>
	   
	  <input id="mode" name="mode" type="hidden" placeholder="" value="TXCHG"  >
          <input id="util" name="util" type="hidden" placeholder="" value="<?php $num=$user->util_id();echo $num; ?>"  >
	  

        <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</div>



<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Gestion des Primes</h3>
  </div>
  <div class="panel-body">
   <form class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Taux de conversion</label>
    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="">
  </div>
 
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>
</div>



<?php
include 'footer.php';
?>