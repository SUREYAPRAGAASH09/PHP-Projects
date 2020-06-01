<?
$retainRollNoCLG = $RollNoCLG;
$retainDepartment = $Department;
//echo  $primaryKeyValue; 
//echo $editFlag;
//echo "xml_id:::$xml_id";
//echo  $xml_id;
//echo "College Details entered";
if($input == "Submits")
{
	include("../php/functions.php");
	$a = '';
	 	
	 if (empty($RollNoCLG)) 
	{
		$RollNoCLGErrFlag = $RollNoCLGEmptyFlag = $ErrorFlag = "True";
	}
	 elseif(ValidateIsCharacter($RollNoCLG) == "False")
	 {
	 	$RollNoCLGErrFlag = $RollNoCLGCharInvalid = $ErrorFlag = "True";
	 }
	 elseif($RollNoCLG <= 0)
	 {
	 	$RollNoCLGErrFlag = $RollNoCLGCharInvalid = $ErrorFlag = "True";
	 }
	 //echo $Department;
	 if(empty($Department))
	 {
	 	$majorErrFlag = $majorEmptyFlag = $ErrorFlag = "True";
	 }
	 
	 if($ErrorFlag != "True")
	 {
	 	//echo "Pass";
	 	
	 	
		if($storeType == "xml")
		{
			 $xml=simplexml_load_file("../xml/note.xml") or die("Error: Cannot create object");
			foreach($xml->children() as $student) 
			 {
				if($student->CollegeRecords->CollegeRecords_ID == $xml_id)
				    	$recordExsist = "True";
			} 
			 
			//echo "recordExsist:::$recordExsist";
			if($recordExsist == "True")
			{	
				foreach($xml->children() as $student) 
				{	
					if($student->CollegeRecords->CollegeRecords_ID == $xml_id)
					{
						//echo "found<br>";
						$student->CollegeRecords->RollNo = $RollNoCLG;
						$student->CollegeRecords->Department = $Department;
					}
				}
				$editFlag = True;
			}
			
			else
			{
				foreach($xml->children() as $StudentDetails) 
				{
				    if($StudentDetails['id'] == $xml_id)
				    {
				    	//echo "found";
	  			    	$CollegeRecords = $StudentDetails->addChild('CollegeRecords'); 
					$CollegeRecords->addChild('CollegeRecords_ID', $xml_id);
					$CollegeRecords->addChild('RollNo',$RollNoCLG );
					$CollegeRecords->addChild('Department', $Department);
					$CollegeRecords->addChild('personalDetails_CollegeRecords_ID',$xml_id);
					$semsterMark = $CollegeRecords = $StudentDetails->addChild('semsterMarkDetails'); 
					$semsterMark->addChild('semsterMarkDetails_ID',$xml_id);		    
				    }
			 	}
			}
			 $xml->asXML("../xml/note.xml");
		}
		else
		{
			$serverName = "192.168.63.121"; 
	 		$uid = "SQLDemoLogin";   
			$pwd = "dbdemo123!@#";  
			$databaseName = "Training"; 
			
			$connectionInfo = array( "UID"=>$uid,                            
			                         "PWD"=>$pwd,                            
			                         "Database"=>$databaseName); 
			
		 
			$conn = sqlsrv_connect( $serverName, $connectionInfo);  
			if($conn)
			{
				//echo "connected";
			}
			else
			{
				//echo "failed";
			}
			//echo "primaryKey:::$primaryKeyValue";
			
			$sql = "select RollNoCLG,Department from collegeRecords";
			//$sql = "select semester,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6 from  College_Details where Student_Roll_No = '23' and Department='CSE' and semester=1";
			$stmt = sqlsrv_query( $conn, $sql );
			if( $stmt == false) {
			    die( print_r( sqlsrv_errors(), true) );
			}
			else
			{
				//echo "founded";
			}
			
			$params = array();
			$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
			$stmt = sqlsrv_query( $conn, $sql , $params, $options );
			
			 $row_count = sqlsrv_num_rows( $stmt );		
	   		// echo $row_count;
			if ($row_count === false)
			{
				//echo "<br>row exist";
			}
			else
			{
				//echo "row not exist";
				//echo $RollNoCLG;
				//echo $Department;
				//$sql = "insert into College_Details (Student_Roll_No,Department,personalDetails_College_Details_FK) values ('$RollNoCLG','$Department','$primaryKeyValue');";
				$sql = "insert into collegeRecords (RollNoCLG,Department,personalDetails_collegeRecords_FK) values ('$RollNoCLG','$Department','$primaryKeyValue');";
				$stmt = sqlsrv_query( $conn, $sql );
				if( $stmt == false) {
				    die( print_r( sqlsrv_errors(), true) );
				}
				else
				{
					//echo "inserted";
				}
			}
		}
		
	 	include("../php/semesterSummaryPage.php");
	 	$editFlag = True;
	 }
	 else
	 {
	 	include("../html/collegeDetails.html");
	 }
	
}
else
{ 
	
 	include("../html/collegeDetails.html");
}
?>