

<?php
include 'class.php';
if (isset($_GET['util'])){$user = new Util($_GET['util']);}else{$user = new Util('1');}
$maPage="client";
include 'header.php';
?>

<SCRIPT language="javascript">
	
	function terminer(valeur,numcli,id) {
	/*window.opener.document.getElementById("client").value = valeur; 
	window.opener.document.getElementById("numcli").value = numcli; 
	alert(<?php if (isset($_POST['mode']) && ($_POST['mode']=="INS")){echo "1";}else{echo "0";}?>);*/
	//window.opener.document.getElementById("selectfd").options[<?php if (isset($_POST['mode']) && ($_POST['mode']=="INS")){echo 0;}else{echo 1;}?>].selected="selected";
	retourUrl="depot.php?util=<?php $num=$user->util_id();echo $num; ?>&numclient="+numcli+"<?php if (isset($_GET['depot'])){echo "&depot=".$_GET['depot'];}?>&nomclient='"+valeur+"'&id="+id;
	document.location.href=retourUrl; 
    //window.close();
	}
  </SCRIPT>


<?php

if (isset($_GET['mode']) &&($_GET['mode']=="SUPPR"))
{
	$user->supprDepot($_GET['depot']);
}

if (isset($_POST['mode']) && ($_POST['mode']=="INS"))
{
if (isset($_POST['id'])){$id=$_POST['id'];}else { $id=null; }

$idClient=$user->insertClient(array(	":nom" => $_POST['nom'] ,
							":tel"=>$_POST['tel'],
							":mail"=>$_POST['mail'],
							":adresse"=>$_POST['adresse'],
							":ville"=>$_POST['ville'],
							":num" => $_POST['num'] ,
							":comment"=> "blbl"					),$id);
var_dump($idClient);
var_dump(intval($idClient));

?>
	<SCRIPT language="javascript">
	terminer('<?php echo $_POST['nom']."','".$_POST['num']."',".$idClient;?>);
	
  </SCRIPT>

	<?php							
}

if (isset($_GET['client']))
{
$chaineRecherche=$_GET['client'];
}else{$chaineRecherche="";}

if (isset($_GET['mode']))
{
$mode=$_GET['mode'];
}else{$mode="normal";}


$recherche=$user->rechercheclient($chaineRecherche);
if($recherche == false OR empty($recherche) OR $mode=="NEW" ){
echo "<h4><strong>Aucun resultat pour votre recherche.</h4></strong>";
$chaineRecherche="";
$recherche=$user->rechercheclient($chaineRecherche);
//$mode="NEW";
	
}else
{
	if ($chaineRecherche!=""){echo '<h4><strong>Resultat de la recherche pour:&nbsp&nbsp; "'.$chaineRecherche.'"</h4></strong>';}
	
}

if (isset($_GET['clientcons'])){ $mode="NEW"; $client = new Client($_GET['clientcons']);}

if (isset($mode) AND $mode=="NEW"){
?>


<form class="form-horizontal" Method="post" action="client.php?util=<?php $num=$user->util_id();echo $num;if (isset($_GET['depot'])){echo "&depot=".$_GET['depot'];} ?>">
<fieldset>

<!-- Form Name -->
<legend><?php if (isset($_GET['clientcons'])){ echo "Informations sur le Client ".$client->client_num()." ".$client->client_nom();}else{echo "Nouveau Client";}?></legend>

<?php if (isset($_GET['clientcons'])){ echo '<input type="hidden" name="id" value='.$_GET['clientcons'].">";} ?>
<input type="hidden" name="mode" value="INS">
<?php if (isset($_GET['depot'])){?>
<input type="hidden" name="depot" value=<?php echo $_GET['depot']; ?>>
<?php } ?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom & Prénom</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="" class="form-control input-md" required="" value="<?php if (isset($_GET['clientcons'])){ echo $client->client_nom();}?>">
     
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel">Identifiant</label>  
  <div class="col-md-4">
  <input id="num" name="num" type="text" placeholder="Numéro CRM" class="form-control input-md" value="<?php if (isset($_GET['clientcons'])){ echo $client->client_num();}?>">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel">Tel</label>  
  <div class="col-md-4">
  <input id="tel" name="tel" type="text" placeholder="Telephone" class="form-control input-md" value="<?php if (isset($_GET['clientcons'])){ echo $client->client_tel();}?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">Mail</label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="text" placeholder="Mail" class="form-control input-md" value="<?php if (isset($_GET['clientcons'])){ echo $client->client_mail();}?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="adresse">Adresse</label>  
  <div class="col-md-4">
  <input id="adresse" name="adresse" type="text" placeholder="Adresse" class="form-control input-md" value="<?php if (isset($_GET['clientcons'])){ echo $client->client_adresse();}?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ville">Ville</label>  
  <div class="col-md-4">
  <input id="ville" name="ville" type="text" placeholder="Ville" class="form-control input-md" value="<?php if (isset($_GET['clientcons'])){ echo $client->client_ville();}?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Commentaire</label>  
  <div class="col-md-4">
<textarea class="form-control" rows="5"><?php if (isset($_GET['clientcons'])){ echo $client->client_comment();}else{echo "Your message here";} ?></textarea>
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Modifier"></label>
  <div class="col-md-4">
    <button id="Modifier" name="Modifier" class="btn btn-primary">Enregistrer</button>
  </div>
</div>

</fieldset>
</form>
<?php
}else{
?>
<!-- resultat de la recherche -->


	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<div class="footer">
       
      </div>
<center>
<h3 class="sub-header">Liste des clients déjà inscrits</h3>
</center>
<br/>

<div class="row">
        <div class="col-lg-12 ">
            <input type="search" id="search" value="" class="form-control" placeholder="Zone de recherche">
        </div>
    </div>
      <div class="table-responsive">
            <table class="table table-striped" id="table">
              <thead>
                <tr>
				  <th>Ident CRM</th>	
				  <th>Nom</th>
                  <th>Telephone</th>
                  
                  <th>Ville</th>
                  <th>Mail</th>
				  <th></th>
                  
                </tr>
              </thead>
              <tbody>
<?php

$b=sizeof($recherche)-1;

	for ($i = 0; $i <=$b; $i++) {


		$donnees=$recherche[$i];

?>			
			 <tr> 
				  <td><a href="javascript:terminer('<?php echo $donnees['client_nom']."','".$donnees['client_num']."',".$donnees['client_id']; ?>);"> <STRONG><?php echo $donnees['client_num']; ?></a></STRONG></td>
                  <td><STRONG><?php echo $donnees['client_nom'];  ?></STRONG></td>
				  <td><?php echo $donnees['client_tel']; ?></td>
          
				  <td><?php echo substr($donnees['client_ville'],0,10); if (strlen($donnees['client_ville']) > 10) {echo "...";} ?></td>
				  <td><?php echo substr($donnees['client_mail'],0,10); if (strlen($donnees['client_mail']) > 10) {echo "...";} ?></td>
				    <td><a<?php echo " href=client.php?util=".$num."&clientcons=".$donnees['client_id']; ?>><span class="glyphicon glyphicon-search"></span> Consulter</a></td>
				  </tr>
               
<?php			
		}


?>

  
   
              </tbody>
            </table>
			
			
			
			
			
			
          </div>



<?php
}


if (isset($_GET['clientcons'])){
?>


<h2 class="sub-header">Depots du client: <?php echo $client->client_num(); ?></h2>
<br/>
<?php 
$listeDepot=$client->recupDepot();
if (!$listeDepot){}else
{

?>
      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				  <th>Date</th>
                  <th>Montant</th>
                  <th>FD</th>
                  <th>Prime Perçue</th>
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
                  <td><?php echo $donnees['depot_montant']; ?></td>
                  <td><?php $firstdeposit = ($donnees['depot_firstdeposit'] == 1) ? "FD" : "Retention";echo $firstdeposit ; ?></td>
                  
				  <td><?php echo $donnees['depot_prime']; ?></td>
				  <td>
				  <a href="depot.php?util=<?php echo $num; ?>&depot=<?php echo $donnees['depot_id']; ?>" class="btn btn-success btn-sm" role="button">Modif</a><a href="client.php?util=<?php echo $num; ?>&depot=<?php echo $donnees['depot_id']; ?>&mode=SUPPR" class="btn btn-danger btn-sm" role="button">Suppr</a>
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

$listeRetrait=$client->recupRetrait();
if (!$listeRetrait){}else
{

?>
			
		<h2 class="sub-header">Recapitulatif des retraits pour le TA <?php echo $user->util_login(); ?></h2>
          <div class="table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Client</th>
                  <th>Montant</th>
                 
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
                  
				  
                </tr>
               
<?php			
		}
		
		?>
		 </tbody>
            </table>
							
          </div>
		  
		  <?php
}
}	  






include 'footer.php';
?>