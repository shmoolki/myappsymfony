<?php 
include 'class.php'; 
if (isset($_GET['util'])){$user = new Util($_GET['util']);}else{$user = new Util('1');}
$num=$user->util_id();

 $maPage="user";
include 'header.php';
if (isset($_GET['mode'])){ 
	if (isset($_GET['utilcons'])){$user1=new util($_GET['utilcons']);}
	
	
	
if (isset($_POST['login'])){

if (isset($_POST['action1'])){$action1=$_POST['action1'];}else{$action1=null;}


$user->majUtil(array(		":login" => $_POST['login'] ,
							":nom" => 	$_POST['nom'] ,
							":prenom"=>$_POST['prenom'],
							":tel1"=>$_POST['tel1'],
							":tel2"=>$_POST['tel2'],
							":mail"=>$_POST['mail'],
							":pwd"=>$_POST['pwd'],
							":active"=>$_POST['active'],
							":admin"=>$_POST['admin']),$action1);
							?>
							<script language="javascript">
							var retUrl = 'util.php?util=<?php echo $num; ?>';
								//alert(retUrl);
								document.location.href=retUrl;
							
							</script>
							
							<?php

}else{
	
	 
?>


<form class="form-horizontal" method="post" action="util.php?mode=maj&util=<?php echo $num;?>">
<fieldset>

<!-- Form Name -->
<legend><?php if (isset($_GET['utilcons'])){ echo "Informations pour Utilisateur ".$user1->util_login();}else{echo "Nouvelle Utilisateur";}?></legend>

<!-- Text input-->
<?php if (isset($_GET['utilcons'])){ echo '<input type="hidden" name="action1" value='.$_GET['utilcons'].'>';}?>
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="" class="form-control input-md" required="" value="<?php if (isset($_GET['utilcons'])){ echo $user1->util_login();}?>" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="" class="form-control input-md" required="" value="<?php if (isset($_GET['utilcons'])){ echo $user1->util_nom();}?>" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prenom</label>  
  <div class="col-md-4">
  <input id="prenom" name="prenom" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($_GET['utilcons'])){ echo $user1->util_prenom();}?>" >
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Tel1">Telephone 1</label>  
  <div class="col-md-4">
  <input id="Tel1" name="tel1" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($_GET['utilcons'])){ echo $user1->util_tel1();}?>" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel2">Telephone 2</label>  
  <div class="col-md-4">
  <input id="tel2" name="tel2" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($_GET['utilcons'])){ echo $user1->util_tel2();}?>" >
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">Adresse de messagerie</label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="text" placeholder="" class="form-control input-md" value="<?php if (isset($_GET['utilcons'])){ echo $user1->util_mail();}?>" >
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Saisissez votre mot de passe</label>
  <div class="col-md-4">
    <input id="password" name="pwd" type="password" placeholder="" required="" class="form-control input-md" value="<?php if (isset($_GET['utilcons'])){ $active=$user1->util_active();$admin=$user1->util_admin();echo $user1->util_password();}?>" >
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="admin">Administrateur</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="admin-0">
      <input type="radio" name="admin" id="admin-0" value="1" checked="checked">
      Oui
    </label> 
    <label class="radio-inline" for="admin-1">
      <input type="radio" name="admin" id="admin-1" value="0" <?php if (isset($_GET['utilcons']) AND $admin==0){ echo "checked";}?>>
      Non
    </label>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="active">Activé</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="active-0">
      <input type="radio" name="active" id="active-0" value="1" checked="<?php if (!isset($_GET['utilcons']) OR $active==1){ echo "checked";}?>">
      Oui
    </label> 
    <label class="radio-inline" for="active-1">
      <input type="radio" name="active" id="active-1" value="0" <?php if (isset($_GET['utilcons']) AND $active==0){ echo "checked";}?>>
      Non
    </label>
  </div>
</div>

 

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Modif"></label>
  <div class="col-md-8">
    <button id="Modif" name="Modif" class="btn btn-success">Enregistrer</button>
  
  </div>
</div>


</fieldset>
</form>

<?php 
}
}
else			//SI on est pas en mode 'New' 
{
?>
<a href="tableau.php?util=<?php echo $num; ?>"> Consulter le tableau des équipes</a>
<center>
<h3 class="sub-header">Liste des Utilisateurs déjà inscrits</h3>
</center>
<br/>


      <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
				  <th>Login</th>
                  <th>Nom</th>
                  <th>Telephone</th>
                  <th>Mail</th>
                  <th></th>
				  <th><a href="util.php?util=<?php echo $num; ?>&mode=new" class="btn btn-warning btn-sm" role="button">Nouveau TA</a></th>
                </tr>
              </thead>
              <tbody>
<?php


$recherche=$user->recupListeUtil();
$b=sizeof($recherche)-1;
//echo $b;
//var_dump($recherche);

	for ($i = 0; $i <=$b; $i++) {


		$donnees=$recherche[$i];

?>			
			 <tr>
                  <td><strong><?php echo $donnees['util_login']; ?></strong></td>
				  <td><?php echo $donnees['util_nom']."  ".$donnees['util_prenom']; ?></td>
                  <td><?php echo $donnees['util_tel1']; ?></td>
                  <td><?php echo $donnees['util_mail']; ?></td>
				  <td>
				  <a href="util.php?util=<?php echo $num; ?>&utilcons=<?php echo $donnees['util_id']; ?>&mode=const" class="btn btn-primary btn-sm" role="button">Modifier Info</a>
				  </td>
				  <td>
				  <a href="recap.php?util=<?php echo $num; ?>&utilcons=<?php echo $donnees['util_id']; ?>" class="btn btn-success btn-sm" role="button">Recap</a>
				  </td>
                                  
                                  <td>
				  <a href="paye.php?util=<?php echo $num; ?>&utilcons=<?php echo $donnees['util_id']; ?>" class="btn btn-success btn-sm" role="button">Paye</a>
				  </td>
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
