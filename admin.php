
<?php
$maPage="admin";

include 'class.php';

if (isset($_GET['util'])){$user= new Util($_GET['util']); }


include 'header.php';
?>
<h4>
<ul>
<li>
<a href="chiffreadmin.php?util=<?php echo $_GET['util'];?>">Resultat des equipes Administration</a>
</li>
<li>
<a href="tableau.php?util=<?php echo $_GET['util']; ?>"> Consulter le tableau des équipes</a>
</li>
</ul>
<h4>
<?php




include 'footer.php';


?>