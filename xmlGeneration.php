<?php
	$xml = new SimpleXMLElement('<xml></xml>');
	 
	$studentDetails = $xml->addChild('studentDetails');
	

	$studentDetails->addChild('RollNo_10th_std', "132");
	$studentDetails->addChild('maths_10th_std', "99");
	$studentDetails->addChild('Science_10std', "79");

	
	
	Header('Content-type: text/xml');
	echo $xml->asXML('../php/sample.xml');
	 
?>