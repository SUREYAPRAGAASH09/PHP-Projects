<? 
 
if($input == "Submit")
{
	
	$xml=simplexml_load_file("../php/sample.xml") or die("Error: Cannot create object");
	foreach($xml->children() as $books) 
	 {
		    if($books->rollNo == $RollNo)
		    	$recordExsist = "True";
	} 
	if($recordExsist == "True")
	{
		 foreach($xml->children() as $books) 
		 {
			    if($books->rollNo == $RollNo)
			    {
			    	$recordExsist = "True";
			    	echo "enter into 56"; 
			    	$books->mark1 = "$mark1";
			    	$books->mark2 = "$mark2";
			    	if(isset($languageEnglish))
				{
					$studentDetails->addChild('languageChoosed','English');
				}
				if(isset($languageGerman))
				{
					$studentDetails->addChild('languageChoosed','German');
				}
				if(isset($languageFrench))
				{
					$studentDetails->addChild('languageChoosed','French');
				}
			    	echo $xml->asXML('../php/sample.xml');
			    }
		} 
	}
	else
	{
		// $xml=simplexml_load_file("../php/sample.xml") or die("Error: Cannot create object");
		$studentDetails = $xml->addChild('studentDetails');
		$studentDetails->addChild('rollNo',$RollNo);
		$studentDetails->addChild('mark1',$mark1);
		$studentDetails->addChild('mark2',$mark2);
		if(isset($languageEnglish))
		{
			$studentDetails->addChild('languageChoosed','English');
		}
		if(isset($languageGerman))
		{
			$studentDetails->addChild('languageChoosed','German');
		}
		if(isset($languageFrench))
		{
			$studentDetails->addChild('languageChoosed','French');
		}
		echo $xml->asXML("../php/sample.xml"); 
	 }
}
include("../php/sql.html");
?>