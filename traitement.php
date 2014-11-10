<?php


if (isset($_GET['page'])){
$page ='location:'.$_GET['page'];
header($page);
}


?>