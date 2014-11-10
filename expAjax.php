<?php


//$xajax->register(XAJAX_FUNCTION, 'MaFonctionPHP');

function MaFonctionPHP()
{
        // Code à exécuter.
		echo "test";
}
require_once('./xajax_core/xajax.inc.php');
$xajax = new xajax(); // On initialise l'objet xajax.
$xajax->register(XAJAX_FUNCTION, 'MaFonctionPHP'); // Déclaration de la fonction MaFonctionPHP.
$xajax->processRequest(); // Fonction qui va se charger de générer le Javascript à partir des données que l'on a fournies à xAjax.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
        <head>
                <title>Page xajax</title>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <?php $xajax->printJavascript(); /* Fonction qui va afficher le Javascript de la page */ ?>
        </head>
        <body>
                <div id="block"></div>
        </body>
</html>





