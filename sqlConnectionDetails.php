
<?php 
	$xml=simplexml_load_file("../php/sample.xml") or die("Error: Cannot create object");

//	$studentDetails = $xml->addChild('studentDetails');
//	$studentDetails->addChild('rollNo','12');
//	$studentDetails->addChild('mark1','32');
//	$studentDetails->addChild('mark2','62');
//	
//	
//	  	
//	//echo $xml->asXML("../php/sample.xml"); 
//	$dom = dom_import_simplexml($xml)->ownerDocument;
//	$dom->formatOutput = TRUE;
//	$formatted = $dom->save("../php/sample.xml"); 
	foreach($xml->children() as $books) {
	    echo $books->rollNo . "<br> ";
	} 
	//echo $formatted->save("../php/sample.xml"); 
//	$xml=simplexml_load_file("../php/note.xml") or die("Error: Cannot create object");
//	echo  $xml->studentDetails[0]->personalDetails[0]->FirstName;
?>