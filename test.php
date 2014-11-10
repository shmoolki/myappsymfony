
<?php
include 'header.php';
include 'class.php';
$user= new Util(1);

//echo phpinfo();
echo $user->genererRemuneration(2,'2014-02-01','2014-02-28','fddf');


?>

<!DOCTYPE HTML>
<html>
  <head>
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	 
	 <style>
	 
#overlay3{
    display: none;
    position: fixed;
    top:0; right:0; bottom:0; left:0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}
#overlay3:target{
    display: block;
}
.popup_block{
    background: #fff;
    padding: 20px;
    border: 20px solid #ddd;
    position: relative;
    margin: 10% auto;
    width: 40%;
    box-shadow: 0px 0px 20px #000;
    border-radius: 10px;
}
img.btn_close {
    float: right;
    margin: -55px -55px 0 0;
}
	 
	 
	 </style>
  </head>
  <body>
    <div id="datetimepicker" class="input-append date">
      <input type="text"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
    </div>
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',pickDate: false,
        language: 'pt-BR'
      });
    </script>
	
	
	
<div id="overlay3">
    <div class="popup_block">
        <a class="close" href="#noWhere"><img alt="Fermer" title="Fermer la fenêtre" class="btn_close" src="./images/close_pop.png"></a>
        <img style="float: right; margin: 0 0 0 20px;" alt="Lil bomb dude" src="./images/bomber.gif">
        <h2>Popup</h2>

        <p>Aliquip transverbero loquor esse ille vulputate exerci veniam fatua eros similis illum valde. Praesent, venio conventio rusticus antehabeo lenis. Melior pertineo feugait, praesent hos rusticus et haero facilisis abluo. </p>
        <p>Veniam tincidunt augue abluo vero, augue nisl melior quidem secundum nobis singularis eum eum.</p>
        
    </div>
</div>
<p><a href="#overlay3">Afficher le masque</a></p>
	
  </body>
 
<html>






<p></p>

<div class="row">
<h1 class="text-center">Formulaire de contact</h1>
<div class="col-sm-8">
<form>
<div class="row form-group">
<div class="col-xs-3">
<input id="firstName" class="form-control" type="text" name="firstName"></div>
<div class="col-xs-3">
<input id="middleName" class="form-control" type="text" name="firstName"></div>
<div class="col-xs-4">
<input id="lastName" class="form-control" type="text" name="lastName"></div>
</div>
<div class="row form-group">
<div class="col-xs-5">
<input class="form-control" type="email" name="email"></div>
<div class="col-xs-5">
<input class="form-control" type="email" name="phone"></div>
</div>
<div class="row form-group">
<div class="col-xs-10">
<input class="form-control" type="homepage"></div>
</div>
<div class="row form-group">
<div class="col-xs-10"><textarea class="form-control" rows="5">Your message here</textarea></div>
</div>
<div class="row form-group">
<div class="col-xs-10"><button class="btn btn-default pull-right">Envoyer</button></div>
</div>
</form>
</div>
</div>

<p>
</p>
<?php
		$m=date("m");
		$y=date("Y");
      $mois = mktime( 0, 0, 0, $m, 1, $y ); 
      //setlocale('LC_ALL', 'fr_FR');
      echo date("t",$mois);
?>



<script>
date=new Date();
alert(date.getDate());
var=date.lastDayOfTheMonth();

alert(var);
</script>
<?php
include 'footer.php';
?>