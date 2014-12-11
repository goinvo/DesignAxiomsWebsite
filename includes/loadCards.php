<?php
$filename = './includes/designaxioms.xml';
if (!file_exists($filename)){
	echo "File: $filename not found";
	exit(0);
}
$doc = new DomDocument();
$doc->load($filename);
$allCards = $doc->getElementsByTagName('card');
?>