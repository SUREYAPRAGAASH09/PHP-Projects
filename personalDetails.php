<?
$retainFirstName = trim($FirstName);
$retainSecondName = trim($SecondName);
$retainLastName = trim($LastName);
 $retainDate = trim($Date);
 $retainMonth = trim($Month);
 $retainYear = trim($Year);
include("../php/functions.php");
if($input == "Submit"  )
{
	
		if (empty($FirstName)) 
		{
			$FirstNameErrFlag = $FirstNameEmptyFlag = $ErrorFlag = "True";
		} 
		
		elseif (ValidateIsCharacter($FirstName) == "true") 
		{
			$FirstNameErrFlag = $FirstNameCharInvalid = $ErrorFlag = "True";
		}
		else
		{
			$FirstNameFormatCorrect= True;
		}
		
		if (empty($SecondName)) 
		{
			$SecondNameErrFlag = $SecondNameEmptyFlag = $ErrorFlag = "True";
		} 
		elseif(ValidateSingleCharacter($SecondName) == "True") 
		{
			$SecondNameErrFlag = $SecondNameCharInvalid = $ErrorFlag = "True";
		}
		
		if (empty($LastName)) 
		{
			$LastNameErrFlag = $LastNameEmptyFlag = $ErrorFlag = "True";
		} 
		elseif(ValidateIsCharacter($LastName) == "true") 
		{
			$LastNameErrFlag = $LastNameCharInvalid = $ErrorFlag = "True";
		}
		
		 if(empty($Date))
		 {
		 	$dateErrFlag = $dateEmptyFlag = $ErrorFlag = "True";
		 }
		 
		  if(empty($Month))
		 {
		 	$monthErrFlag = $monthEmptyFlag = $ErrorFlag = "True";
		 }
		 
		  if(empty($Year))
		 {
		 	$yearErrFlag = $yearEmptyFlag = $ErrorFlag = "True";
		 }
		  if($Month == 3 or $Month == 5 or $Month == 8 or $Month == 10)
		 {
		 	if($Date > 30)
		 	{
		 		$dateErrFlag = $dateInvalid = $ErrorFlag = "True";
		 	}
		 	
		 }
		 elseif($Year % 4 == 0)
		 {
		 	if($Month == 2)
		 	{
		 		if($Date > 29)
		 		{
		 			
		 			$dateErrFlag = $dateInvalid = $ErrorFlag = "True";
		 		}
		 	}
		 }
		if(empty($gender))
		{
			$genderErrFlag = $genderEmptyFlag = $ErrorFlag = "True";
		}
		if(isset($languageEnglish))
		{
			$languageChoosed = $languageEnglish;
		}
		if(isset($languageGerman))
		{
			if(!empty($languageChoosed))
			{
				$languageChoosed = $languageChoosed ."," .$languageGerman;
			}
			else
			{
				$languageChoosed = $languageGerman;
			}
		}
		if(isset($languageFrench))
		{
			if(!empty($languageChoosed))
			{
				$languageChoosed = $languageChoosed . "," .$languageFrench;
			}
			else
			{
				$languageChoosed = $languageFrench;
			}
			 
		}
	 
		if ( empty($languageEnglish) and empty($languageGerman) and empty($languageFrench))  
		{
			$languageErrFlag = $languageEmptyFlag = $ErrorFlag = "True";
		} 
		if($ErrorFlag != "True")
		{
			if($storeType == "xml")
			{
			 $xml=simplexml_load_file("../xml/note.xml") or die("Error: Cannot create object");
			foreach($xml->children() as $student)
			 {
			    	if($student->personalDetails->personalDetails_ID == $xml_id)
				    	$recordExsist = "True";
			   
		 	}

			if($recordExsist == "True")
			{	
				foreach($xml->children() as $student) 
				{
					if($student['id'] == $xml_id)
					{
					
						$student->personalDetails->FirstName = $FirstName;
						$student->personalDetails->MiddleName = $SecondName;
						$student->personalDetails->LastName = $LastName;
						$student->personalDetails->DateOfBirth->Date = $Date;
						$student->personalDetails->DateOfBirth->Year = $Year;
						$student->personalDetails->DateOfBirth->Month = $Month;
						$student->personalDetails->Gender = $gender;
//						unset($student->personalDetails->languageKnown[0]);
						$languageChoosed = "";
						 
					    	if(isset($languageEnglish))
						{
							$languageChoosed = $languageEnglish;
						}
						if(isset($languageGerman))
						{
							if(!empty($languageChoosed))
							{
								$languageChoosed = $languageChoosed ."," .$languageGerman;
							}
							else
							{
								$languageChoosed = $languageGerman;
							}
						}
						if(isset($languageFrench))
						{
							if(!empty($languageChoosed))
							{
								$languageChoosed = $languageChoosed . "," .$languageFrench;
							}
							else
							{
								$languageChoosed = $languageFrench;
							}
							 
						}
						$student->personalDetails->languageKnown = "$languageChoosed";
					}
				}
				$editFlag = True;
			}
			else
			{
				foreach($xml->children() as $books)
				 {
				    $id = $books['id'];
				   
			 	}
			 	$xml_id = $id + 1;
			 	$studentDetails = $xml->addChild('studentDetails');
				$studentDetails->addAttribute('id', $xml_id);
				$personalDetails = $studentDetails->addChild('personalDetails');
				$personalDetails->addChild('personalDetails_ID', $xml_id);
				$personalDetails->addChild('FirstName', $FirstName);
				$personalDetails->addChild('MiddleName', $SecondName);
				$personalDetails->addChild('LastName', $LastName);
				$DateOfBirth = $personalDetails->addChild('DateOfBirth');
				$DateOfBirth->addChild('Date',$Date);
				$DateOfBirth->addChild('Month',$Month);
				$DateOfBirth->addChild('Year',$Year);
				$personalDetails->addChild('Gender', $gender);
				$languageChoosed = "";
				if(isset($languageEnglish))
				{
					$languageChoosed = $languageEnglish;
				}
				if(isset($languageGerman))
				{
					echo "inside german";
					if(!empty($languageChoosed))
					{
						echo "inside lang";
						$languageChoosed = $languageChoosed ."," .$languageGerman;
					}
					else
					{
						echo "german alone";
						$languageChoosed = $languageGerman;
					}
				}
				if(isset($languageFrench))
				{
					if(!empty($languageChoosed))
					{
						$languageChoosed = $languageChoosed . "," .$languageFrench;
					}
					else
					{
						$languageChoosed = $languageFrench;
					}
					 
				}
				$personalDetails->addChild('languageKnown',$languageChoosed);
			}
				 $xml->asXML("../xml/note.xml");
		}
		else
		{
			echo "inside sql";
			$serverName = "192.168.63.121"; 
			$uid = "SQLDemoLogin";   
			$pwd = "dbdemo123!@#";  
			$databaseName = "Training"; 
			
			$connectionInfo = array( "UID"=>$uid,                            
			                         "PWD"=>$pwd,                            
			                         "Database"=>$databaseName); 
			
		 
			$conn = sqlsrv_connect( $serverName, $connectionInfo);  
			
			$sql = "select personalDetails_ID from personalDetails;";
			$stmt = sqlsrv_query( $conn, $sql );
			if( $stmt === false) {
			    die( print_r( sqlsrv_errors(), true) );
			}
			
			while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
			{
				if($row['personalDetails_ID'] == $primaryKeyValue)
				{
					$insertRecordFlag = "True";
					break;
				}
				else
				{
					$insertRecordFlag = "False";
				}
			}
	 			if($insertRecordFlag == "True")
				{
					$sql = "update personalDetails set FirstName = '$FirstName', MiddleName = '$SecondName', lastName = '$LastName',DOB='$date', Gender = '$gender',language_known='$languageChoosed' where  personalDetails_ID = '$primaryKeyValue';";  
					$stmt = sqlsrv_query( $conn, $sql);
					if($stmt)
					{
					}
					else
					{
						echo "update failed";
					}
					$editFlag = True;
				}
				elseif($insertRecordFlag == "False")
				{
					$sql = "insert into personalDetails (FirstName,MiddleName,lastName,DOB,Gender,language_known) values ('$FirstName','$SecondName','$LastName','$date','$gender','$languageChoosed');";  
					$stmt = sqlsrv_query( $conn, $sql);  
					$sql = "SELECT SCOPE_IDENTITY();";
					$stmt = sqlsrv_query($conn, $sql);
					$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC);
	 
					$_SESSION['row'] = $row[0];
					$primaryKeyValue = $row[0];
				}
			sqlsrv_free_stmt( $stmt); 
			sqlsrv_close( $conn);  
			}
			include("../php/SchoolDetails.php");
		}
		else
		{
			include("../html/personalDetails.html");
		}
}
else
{ 
	include("../html/personalDetails.html");
}
?>