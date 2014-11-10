<?php

include 'class.php';
$maPage="horaire";
if (isset($_GET['util'])){$user= new Util($_GET['util']); }
include 'header.php';



if (isset($_POST['id']) && isset ($_POST['heurefin']) && isset($_POST['heuredebut']))
{
	
	$user->insertSession('eeee',$_POST['heurefin'],$_POST['id'],$_POST['heuredebut']);
	

}





$recupUser= $user->recupListeUtil('active');
	
	
	//var_dump($recupUser);
	$b=sizeof($recupUser)-1;
	//echo $b;

	for ($i = 0; $i <=$b; $i++) {
	  // echo $i;

        
		$donneesUser=$recupUser[$i];
		//var_dump($donneesUser);
		$userBoucle = new Util($donneesUser['util_id']);
		$listeHoraire=$userBoucle->recupHoraire();
                                    
	if (!$listeHoraire){}else
	{	
?>




<h2 class="sub-header">Recapitulatif pointage pour le TA <?php echo $userBoucle->util_login(); ?></h2>
<br/>
<?php 




?>
      <div class="table-responsive">
            <table class="table ">
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
			 <tr <?php  $couleur=(is_null($donnees['point_nbh'])) ? 'class="danger"' : ""; echo $couleur; ?>>
                  <td><?php echo date("d/m/y", strtotime($donnees['point_date'])); ?></td>
                  <td><?php echo $donnees['point_hdebut']; ?></td>                  
                  <td><?php $pointageFin = (is_null($donnees['point_hfin'])) ? "Pointage Manquant" : $donnees['point_hfin'];echo $pointageFin ; ?></td>
                  <td><?php $nbh = (is_null($donnees['point_nbh'])) ? "Non Calculé" : $donnees['point_nbh'];echo $nbh ; ?></td>
				   
				  <td>
				   <a href="javascript:popup(<?php echo $donnees['point_id'].",'".date("d/m/y", strtotime($donnees['point_date']))."','".$donnees['point_hdebut']."','".$donnees['point_hfin']; ?>')" class="btn btn-primary btn-sm" role="button">Modifier</a>
				  </td>
                </tr>
               
<?php			
		}
		
		


?>

  
   
              </tbody>
            </table>
			
			
		
			
			
			
			
			
          </div>








<?php
}}
?>

<script>

function popup(id,date,heuredebut,heure)
{

if(heure=="")
{
document.getElementById("heurefin").value=heuredebut.substr(0,5);
}
else
{
document.getElementById("heurefin").value=heure;
}

document.getElementById("date").value= date;
document.getElementById("heuredebut").value=heuredebut;

document.getElementById("id").value=id;

document.location.href="#overlay3";

}


 function pointage() {
		//var b= prompt("veuillez saisirune horaire au format hh:mm");
		//alert(b);
		//alert("ok");
		heuredebut=document.getElementById("heuredebut").value;
		if(heuredebut.length!=8) heuredebut=heuredebut+":00";
		heurefin=document.getElementById("heurefin").value;
		if(heurefin.length!=8) heurefin=heurefin+":00";
		//alert(heurefin);
			
			//alert(b);
			if(isHeure(heuredebut) && isHeure(heurefin))
			{
			//alert("ok");
			document.getElementById("frmHoraire").submit();
			}
			else
			{
			//alert("no");
			alert("Vous devez obligatoirement saisir un horaire au format hh:mm");
			return false;
			
			}
    }
	
	
	
function isHeure(data){

if(data.length!=8) return false;

if(data.substr(2,1)!=":" || data.substr(5,1)!=":"){
return false;
}

heure = data.substr(0,2);
minute = data.substr(3,2);
seconde = data.substr(6,2);

if(isNaN(heure) || isNaN(minute) || isNaN(seconde)) return false;

if(heure<0 || heure>23) return false;
if(minute<0 || minute>59) return false;
if(seconde<0 || seconde>59) return false;

return true;
}

</script>

	 <style>
	 
#overlay3{
    display: none;
    position: fixed;
    top:0; right:0; bottom:0; left:0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}
#overlay34{
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



<div  id="overlay3" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
		
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><a class="close" href="#noWhere">&times;</a></button>
        <h4 class="modal-title" id="myModalLabel">Modification de pointage</h4>
      </div>
      <div class="modal-body">
      
	  
	  <form class="form-horizontal" id="frmHoraire" method="post" action="horaire.php?&util=<?php $num=$user->util_id();echo $num; ?>">
<fieldset>

<!-- Form Name -->
<legend>Modif</legend>
Attention! Veuillez saisir les horaires au format hh:mm Ex:	09:00
		<div class="form-group">
		<label class="col-md-4 control-label" for="date">Date</label>  
		<div class="col-md-4" data-date-format="dd-mm-yyyy">
		<input id="date" name="date" type="text" placeholder="" class="form-control input-md datepicker" disabled >
		<span class="add-on"><i class="icon-th"></i></span>
		</div>
	  </div>
	  <div class="form-group">
		<label class="col-md-4 control-label" for="date">Heure de debut</label>  
		<div class="col-md-4" >
		<input id="heuredebut" name="heuredebut" type="text" placeholder="" class="form-control input-md " required="" >
		</div>
	  </div>
	   <div class="form-group">
		<label class="col-md-4 control-label" for="date">Heure de fin</label>  
		<div class="col-md-4" >
		<input id="heurefin" name="heurefin" type="text" placeholder="" class="form-control input-md " required="" >
		</div>
	  </div>
	  <input id="id" name="id" type="hidden" placeholder=""  >
	  
</fieldset>
</form>
      
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><a class="close" href="#noWhere">Close</a></button>
        <button type="button" class="btn btn-primary" onclick="javascript:pointage();" >Enregistrer les changements</button>
      </div>
    </div>
  </div>
</div>



<?php
include 'footer.php';

?>