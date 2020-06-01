<?php
//	$fil 
	$xml=simplexml_load_file("../php/note.xml");
	$studentDetails = $xml->addChild('studentDetails','asdf');
//	print_r($xml);
//	$xml->asXML();

	Header('Content-type: text/xml');
	echo $xml->asXML();
?>