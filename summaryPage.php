<?
//echo $storageType; 
if($operation == "update")
{
	if($storageType == "XML")
	{
		$xml_id = $xml_id;
		$storeType;
	}
	else
	{
		$primaryKey = $_GET['Primary_Key_id']; 
	}
	//echo $primaryKey;
	 
	//echo "inside edit button";
	$editFlag = True;
	//include("../html/summaryPage.html"); 
	include("../php/personalDetails.php"); 
}

elseif($operation == "delete")
{
	
	 $primaryKey = $_GET['Primary_Key_id']; 
	 $pk = $_GET['Primary_Key_id']; 
	 $modelOpenFlag = "True";
	// echo "inside delete";
	if($Flag == "True")
	{
		//echo "inside display Flag";
		$xml=simplexml_load_file("../xml/note.xml") or die("Error: Cannot create object");
		if($storeType == "xml")
		{
			//echo "inside xml";
			 foreach($xml->children() as $student)  //studentDetails
			{ 
				
				if($student['id'] == $xml_id)
				{
					unset($student[0]);
					 
				}
			}
		}
		else
		{
			include("../php/sqlConnectionFile.php");
			$sql = "delete from collegeRecords where personalDetails_collegeRecords_FK = '$primaryKey';";
			$stmt = sqlsrv_query( $conn, $sql );
			if( $stmt == false) {
			   die( print_r( sqlsrv_errors(), true) );
			}
			else
			{
				//echo "<br>college details details";
			}
			
			$sql = "delete from SchoolDetails where personalDetails_SchoolDetails_FK = '$primaryKey';";
			$stmt = sqlsrv_query( $conn, $sql );
			if( $stmt == false) {
			   die( print_r( sqlsrv_errors(), true) );
			}
			else
			{
				//echo "<br>School details details";
			}
			
			$sql = "delete from personalDetails where personalDetails_ID = '$primaryKey';";
			$stmt = sqlsrv_query( $conn, $sql );
			if( $stmt == false) {
			   die( print_r( sqlsrv_errors(), true) );
			}
			else
			{
				//echo "<br>personal details details";
			}
			
		}
		$modelDataDeleteedFlag = "True";
		$modelOpenFlag  = "True";
		$xml->asXML("../xml/note.xml");
	}
	
	
	include("../html/summaryPage.html"); 
}
 
elseif($input == "add_new")
{
	 
	include("../php/personalDetails.php"); 	
}
else
{
	include("../html/summaryPage.html"); 
}
?>