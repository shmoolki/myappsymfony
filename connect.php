	
<?php
	
	
$dB;	
	
function connection(){
	
	
 global  $dB;
	try
		{
			$dB = new PDO('mysql:host=localhost;dbname=frxbanque', 'root', '');
			$dB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$dB->exec('SET NAMES "utf8"');
		}
		catch (Exception $e)
		{
			exit($e->getMessage());
		}
		 return($dB);
		
		}
		
	
	
?>