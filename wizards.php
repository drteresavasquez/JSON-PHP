<?php

$url = 'wizards.json'; 
$data = file_get_contents($url); 
$wizards = json_decode($data, true);

foreach ($wizards as $wizard) {
	echo $wizard['name'] . '\'s wand is ' . 
			 $wizard['wand'][0]['wood'] . ', ' . 
		   $wizard['wand'][0]['length'] . ', with a ' . 
		   $wizard['wand'][0]['core'] . ' core. <br>' ;
}

?>