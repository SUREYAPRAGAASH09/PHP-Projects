<?
//echo $RollNoCLG;
//echo $Department;
//echo $xml_id;
if($input == "Yes")
{
	$editFlag = True;
	 $RollNo = $RollNoCLG;
	 $Depar = $Department;  
	$semNum = $semNum;
	include("../php/semesterMarkDetails.php");
}
elseif($input == "No")
{
	
	include("../php/summaryPage.php");
}
elseif($input == "updates")
{
	//echo $semNum;
	
	$primaryKeyValue;
	$editFlag = True;
	 $RollNo = $RollNoCLG;
	 $Depar = $Department;  
	include("../php/semesterMarkDetails.php");
}
elseif($input == "Delete")
{
//	echo $Department;
//	echo $RollNoCLG;
//	echo $semNum;
	//echo $Depart = $Department;
	//echo $RollNo = $RollNoCLG;
	//echo $semesterNo = $semNum;
	
	
	$modelOpenFlag  = True;
	//echo $storeType;
	if($displayFlag == "True") 
	{
		//echo "inside display Flag";
		$xml=simplexml_load_file("../xml/note.xml") or die("Error: Cannot create object");
		if($storeType == "xml")
		{
			//echo "inside xml";
			 foreach($xml->children() as $student)  //studentDetails
			{ 
				foreach($student->children() as $sem) // per,sch,coll,sems
				 { 
				 	//echo $sem->semsterMarkDetails_ID;
				 	if($sem->semsterMarkDetails_ID == $xml_id)
				 	{
				 		//echo "found";
				 		foreach($sem->children() as $sub) 
			 			{
			 				if($sub['number'] == $semesterNo)
				 			{  	
				 				 unset($sub['number'][0]);
				 				 unset($sub->Subject_1[0]);
				 				 unset($sub->Subject_2[0]);
				 				 unset($sub->Subject_3[0]);
				 				 unset($sub->Subject_4[0]);
				 				 unset($sub->Subject_5[0]);
				 				 unset($sub->Subject_6[0]);
				 				 unset($sub->personalDetails_semsterMarkDetails_ID[0]);
				 			}
			   			}
				 	}
				 }
			}
		}
		
		else
		{
			//echo "inside display flag";
			include("../php/sqlConnectionFile.php");
			//echo "rollNo:::$RollNoCLG";
			//echo "Department:::$Department";
			//echo "semNum:::$semNum";
			 	
			$sql="delete from College_Details where Department = '$Department' and student_Roll_No = '$RollNoCLG' and semester = '$semNum' ";
			 
			$stmt = sqlsrv_query( $conn, $sql );
			if( $stmt == false) 
			{
			   die( print_r( sqlsrv_errors(), true) );
			//   echo "asdfasdf";
			}
			else
			{
				//echo "<br>Value deleted";
			}
		}
		 $modelOpenFlag  = True;
		$modelDataDeleteedFlag = "True";
		$xml->asXML("../xml/note.xml");	
	}
	
	include("../html/semesterSummaryPage.html");
}
else
{
	include("../html/semesterSummaryPage.html");
}
?>