<?php
//	$xml = new SimpleXMLElement('<xml/>');
	$xml=simplexml_load_file("../php/note.xml");
//	$studentDetails = $xml->addChild('studentDetails');
//	$personalDetails = $studentDetails->addChild('personalDetails');
//	$personalDetails->addChild('personalDetails_ID', "1");
//	$personalDetails->addChild('FirstName', "sureya");
//	$personalDetails->addChild('MiddleName', "G");
//	$personalDetails->addChild('LastName', "Pragaash");
//	$DateOfBirth = $personalDetails->addChild('DateOfBirth');
//	$DateOfBirth->addChild('Date','09');
//	$DateOfBirth->addChild('Month','11');
//	$DateOfBirth->addChild('Year','1997');
//	$personalDetails->addChild('Gender', "Male");
//	
//	$SchoolDetails = $studentDetails->addChild('SchoolDetails');
//	$SchoolDetails->addChild('SchoolDetails_ID', "1");
//	$SchoolDetails->addChild('RollNo_10th_std', "132");
//	$SchoolDetails->addChild('maths_10th_std', "99");
//	$SchoolDetails->addChild('Science_10std', "79");
//	$SchoolDetails->addChild('English_10std', "79");
//	$SchoolDetails->addChild('Tamil_10std', "79");
//	$SchoolDetails->addChild('Social_10std', "79");
//	$SchoolDetails->addChild('Computer_10std', "79");
//	$SchoolDetails->addChild('Computer_10std', "79");
//	$SchoolDetails->addChild('RollNo_12th_std', "172");
//	$SchoolDetails->addChild('Major', "Biology");
//	$SchoolDetails->addChild('Chemistry_12std', "179");
//	$SchoolDetails->addChild('maths_10std', "149");
//	$SchoolDetails->addChild('personalDetails_SchoolDetails_ID', "1");
//	
//	$CollegeRecords = $studentDetails->addChild('CollegeRecords');
//	$CollegeRecords->addChild('CollegeRecords_ID', "1");
//	$CollegeRecords->addChild('RollNo', "132");
//	$CollegeRecords->addChild('Department', "CSE");
//	$CollegeRecords->addChild('personalDetails_CollegeRecords_ID', "1");
//	
//	$semsterMarkDetails = $studentDetails->addChild('semsterMarkDetails');
//	$semsterMarkDetails->addChild('semsterMarkDetails_ID', "1");
//	$semsterMarkDetails->addChild('Subject_1', "87");
//	$semsterMarkDetails->addChild('Subject_2', "87");
//	$semsterMarkDetails->addChild('Subject_3', "87");
//	$semsterMarkDetails->addChild('Subject_4', "87");
//	$semsterMarkDetails->addChild('Subject_5', "87");
//	$semsterMarkDetails->addChild('Subject_6', "87");
//	
	
	//Header('Content-type: text/xml');
//	echo $xml->asXML();
	echo $xml->asXML();
	
//	<?php
//$newsXML = new SimpleXMLElement("<news></news>");
//$newsXML->addAttribute('newsPagePrefix', 'value goes here');
//$newsIntro = $newsXML->addChild('content');
//$newsIntro->addAttribute('type', 'latest');
//Header('Content-type: text/xml');
//echo $newsXML->asXML();
//?>
?>	
 