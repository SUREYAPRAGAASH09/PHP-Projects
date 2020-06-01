<?
//echo  $primaryKeyValue;
//echo "<br>semsterno"; 
//echo $xml_id;
//echo $semNum;
$retainSemesterNumber = $semNum;
$subject_1 = trim($subject_1);
$subject_2 = trim($subject_2);
$subject_3 = trim($subject_3);
$subject_4 = trim($subject_4);
$subject_5 = trim($subject_5);
$subject_6 = trim($subject_6);	  
if($input == "Back")
{
	//echo "inside";
	include("../php/semesterSummaryPage.php");
	$flag = 1;
}
//echo "semesterNumber::$semNum";
  

if($input == "Save")
{
	include("../php/functions.php"); 
	
	 //echo "inside save";
	$flag = 1;
	 	if(empty($semNum))
	 	{
	 		//echo "dfgsdgfasdf";
	 	$majorErrFlag = $majorEmptyFlag = $ErrorFlag = "True";
	 	}
	 	 
	
		//echo "entered";
		 if (empty($subject_1))  {
		 	$subject_1ErrFlag = $subject_1EmptyFlag = $ErrorFlag = "True";
		 }
		 elseif(ValidateIsCharacter($subject_1) == "False") {
		 	$subject_1ErrFlag = $subject_1CharInvalid = $ErrorFlag = "True";
		 }
		 elseif($subject_1 < 0) {
		 	$subject_1ErrFlag = $subject_1LessThanZeroError = $ErrorFlag = "True";
		 }
		 elseif($subject_1 > 100) {
		 	$subject_1ErrFlag = $subject_1GreaterThanZeroError = $ErrorFlag = "True";
		 }
		 
		  if (empty($subject_2))  {
		 	$subject_2ErrFlag = $subject_2EmptyFlag = $ErrorFlag = "True";
		 }
		 elseif(ValidateIsCharacter($subject_2) == "False") {
		 	$subject_2ErrFlag = $subject_2CharInvalid = $ErrorFlag = "True";
		 }
		 elseif($subject_2 < 0) {
		 	$subject_2ErrFlag = $subject_2LessThanZeroError = $ErrorFlag = "True";
		 }
		 elseif($subject_2 > 100) {
		 	$subject_2ErrFlag = $subject_2GreaterThanZeroError = $ErrorFlag = "True";
		 }
		 
		  if (empty($subject_3))  {
		 	$subject_3ErrFlag = $subject_3EmptyFlag = $ErrorFlag = "True";
		 }
		 elseif(ValidateIsCharacter($subject_3) == "False") {
		 	$subject_3ErrFlag = $subject_3CharInvalid = $ErrorFlag = "True";
		 }
		 elseif($subject_3 < 0) {
		 	$subject_3ErrFlag = $subject_3LessThanZeroError = $ErrorFlag = "True";
		 }
		 elseif($subject_3 > 100) {
		 	$subject_3ErrFlag = $subject_3GreaterThanZeroError = $ErrorFlag = "True";
		 }
		 
		  if (empty($subject_4))  {
		 	$subject_4ErrFlag = $subject_4EmptyFlag = $ErrorFlag = "True";
		 }
		 elseif(ValidateIsCharacter($subject_4) == "False") {
		 	$subject_4ErrFlag = $subject_4CharInvalid = $ErrorFlag = "True";
		 }
		 elseif($subject_4 < 0) {
		 	$subject_4ErrFlag = $subject_4LessThanZeroError = $ErrorFlag = "True";
		 }
		 elseif($subject_4 > 100) {
		 	$subject_4ErrFlag = $subject_4GreaterThanZeroError = $ErrorFlag = "True";
		 }
		 
		  if (empty($subject_5))  {
		 	$subject_5ErrFlag = $subject_5EmptyFlag = $ErrorFlag = "True";
		 }
		 elseif(ValidateIsCharacter($subject_5) == "False") {
		 	$subject_5ErrFlag = $subject_5CharInvalid = $ErrorFlag = "True";
		 }
		 elseif($subject_5 < 0) {
		 	$subject_5ErrFlag = $subject_5LessThanZeroError = $ErrorFlag = "True";
		 }
		 elseif($subject_5 > 100) {
		 	$subject_5ErrFlag = $subject_5GreaterThanZeroError = $ErrorFlag = "True";
		 }
		 
		  if (empty($subject_6))  {
		 	$subject_6ErrFlag = $subject_6EmptyFlag = $ErrorFlag = "True";
		 }
		 elseif(ValidateIsCharacter($subject_6) == "False") {
		 	$subject_6ErrFlag = $subject_6CharInvalid = $ErrorFlag = "True";
		 }
		 elseif($subject_6 < 0) {
		 	$subject_6ErrFlag = $subject_6LessThanZeroError = $ErrorFlag = "True";
		 }
		 elseif($subject_6 > 100) {
		 	$subject_6ErrFlag = $subject_6GreaterThanZeroError = $ErrorFlag = "True";
		 }
	
	//echo "after validation";
	 
	//echo "<br>rollno:::$RollNoCLG";
//	echo $Department;
	//echo $ErrorFlag;
	 if($ErrorFlag != "True")
	 {
	 	//echo "Pass fdg";
	 	
		if($storeType == "xml")
		{
			 $xml=simplexml_load_file("../xml/note.xml") or die("Error: Cannot create object");
			foreach($xml->children() as $student)  //studentDetails
			{ 
				foreach($student->children() as $sem) // per,sch,coll,sems
				 { 
				 	if($sem->semsterMarkDetails_ID == $xml_id)
				 	{
				 		foreach($sem->children() as $sub) 
				 		{
				 			if($sub['number'] == $semNum)
				 			{
				 				echo "asdf";
				 				echo $recordExsist = "True";
				 			}
						}
					}
				}
			}
			//echo $recordExsist ;
			//echo "<br>";
			if($recordExsist == "True")
			{	
				//echo "inside true part";
				foreach($xml->children() as $student)  //studentDetails
				{ 
					foreach($student->children() as $sem) // per,sch,coll,sems
					 { 
					 	if($sem->semsterMarkDetails_ID == $xml_id)
					 	{
					 		foreach($sem->children() as $sub) 
					 		{
					 			
					 			
					 			if($sub['number'] == $semNum)
					 			{
					 				//echo "updating";
									$sub->Subject_1 = $subject_1;
					 				$sub->Subject_2 = $subject_2;
					 				$sub->Subject_3 = $subject_3;
					 				$sub->Subject_4 = $subject_4;
					 				$sub->Subject_5 = $subject_5;
					 				$sub->Subject_6 = $subject_6;
					 			}
							}
						}
					}
				}
			}
			else
			{
				//echo "inside False part";
				foreach($xml->children() as $StudentDetails) 
				{
				    if($StudentDetails['id'] == $xml_id)
				    {
					//echo "found";
				    	
					$semster = $StudentDetails->semsterMarkDetails->addChild('semesterNumber');
					$semster->addAttribute('number',$semNum);
					$semster->addChild('Subject_1', $subject_1);
					$semster->addChild('Subject_2', $subject_2);
					$semster->addChild('Subject_3', $subject_3);
					$semster->addChild('Subject_4', $subject_4);
					$semster->addChild('Subject_5', $subject_5);
					$semster->addChild('Subject_6', $subject_6);
					$semster->addChild('personalDetails_semsterMarkDetails_ID', $xml_id);
				    }
			 	}
			}
			 $xml->asXML("../xml/note.xml");
		}
		else
		{
			$flag = True;
		 	include("../php/sqlConnectionFile.php");
			 
			echo "<br>";
			echo "semster:::$semNum";
			echo "<br>";
			$sql = "select Student_Roll_No,Department,semester,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6 from  College_Details where Student_Roll_No = '$RollNoCLG' and Department='$Department' and semester='$semNum' ;";
			$params = array();
			$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
			$stmt = sqlsrv_query( $conn, $sql , $params, $options );
			
			 $row_count = sqlsrv_num_rows( $stmt );		
	   		 
			if ($row_count == 0)
			{
				    echo "<br>";		
				   echo "Error in retrieveing row count.";
				    
				    $sql = "insert into College_Details (Student_Roll_No,personalDetails_College_Details_FK) values ('$RollNoCLG','$primaryKeyValue'); ";
				    $stmt = sqlsrv_query($conn, $sql);
				    if($stmt)
				    {
				    	//echo "<br>";
				   	echo "inserted Roll No";
				    }
				    else
				    {
				    	echo "Roll no is not inserted";
				    }
				    $sql = "SELECT MAX(College_Details_ID)  FROM College_Details";
				    $stmt = sqlsrv_query($conn, $sql);
				    if($stmt)
				    {
				    	//echo "<br>";
					echo "selected Max id";
				    }
				    else
				    {
				    	echo "<br>";
				    	echo "Max id fails";
				    }
				    $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ;
				    $max_id =  $row[0];
				   echo "<br>";
				    echo "max_ID:::$max_id";
				    $sql = "UPDATE College_Details SET Department='$Department',semester='$semNum',subject_1='$subject_1',subject_2='$subject_2',subject_3='$subject_3',subject_4='$subject_4',subject_5='$subject_5',subject_6='$subject_6' WHERE College_Details_ID = '$max_id';";
				     $stmt = sqlsrv_query($conn, $sql);
				    if($stmt)
				    {
				    	echo "<br>";
				    	echo "row updated";
				    }
				    else
				    {
				    	echo "<br>";
				    	echo "update failed";
				    }
				    
				
			}
			else
			{
			 	$sql = "UPDATE College_Details SET subject_1='$subject_1',subject_2='$subject_2',subject_3='$subject_3',subject_4='$subject_4',subject_5='$subject_5',subject_6='$subject_6' WHERE Student_Roll_No = '$RollNoCLG' and Department = '$Department' and semester = '$semNum';" ;
			 	 $stmt = sqlsrv_query($conn, $sql);
				    if($stmt)
				    {
				    	echo "<br>";
				    	echo "values updated";
				    }
				    else
				    {
				    	echo "<br>";
				    	echo "update failed";
				    }	
				
			    
			   	   
			}
		}
		include("../php/semesterSummaryPage.php");
	 
	}
	
}
 

if($flag == 0)
{  
	
	$RollNo = $RollNoCLG;
	 $Depar = $Department;   
	
include("../html/semesterMarkDetails.html");
 //echo "entered into else";
}
?>