
    <?php
	
$maPage="CA";

include 'class.php';
if (isset($_GET['util'])){$user= new Util($_GET['util']); }else{$user=new Util(0); }
include 'header.php';
if (isset($_GET['datedebut']) AND isset($_GET['datefin'])){
$datedebut=$_GET['datedebut'];
$datefin=$_GET['datefin'];
}else{
$m=date("m");
$y=date("Y");
$datedebut=$y."-".$m."-01";
$mois = mktime( 0, 0, 0, $m, 1, $y ); 
      //setlocale('LC_ALL', 'fr_FR');
$j= date("t",$mois);
$datefin=$y."-".$m."-".$j;
//$tableau=$user->tableauRecap($datedebut,$datefin);

}
?>
	
<div class="row">

  <div class="col-md-4"><h1>Resultat</h1></div>
 
</div>

	 
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Intervalle d'affichage</h3>
  </div>
  <div class="panel-body">
    <form class="form-inline" id="frmDate" method="GET" action="chiffreadmin.php">


<!-- Form Name -->
	  <div class="form-group">
  <label class="col-md-4 control-label" for="date">Entre le</label>  
  <div class="col-md-6" data-date-format="dd-mm-yyyy">
  <input id="date" name="datedebut" type="text" placeholder="" class="form-control input-md datepicker" required="" 
  <?php echo "value=".$datedebut; ?> 
  >
    <span class="add-on"><i class="icon-th"></i></span>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="date">et le</label>  
  <div class="col-md-6" data-date-format="dd-mm-yyyy">
  <input id="date" name="datefin" type="text" placeholder="" class="form-control input-md datepicker" required="" 
  <?php echo "value=".$datefin; ?> 
  >
    <span class="add-on"><i class="icon-th"></i></span>
  </div>
</div>
	   

          <input id="util" name="util" type="hidden" placeholder="" value="<?php $num=$user->util_id();echo $num; ?>"  >
	  

        <button type="submit" class="btn btn-primary">Afficher</button>
</form>
  </div>
</div>

 


<?php 
$user->chiffreAdmin($datedebut,$datefin);
include 'footer.php';
?>
   
	   