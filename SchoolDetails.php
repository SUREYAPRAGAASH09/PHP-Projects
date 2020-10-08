<?
$retainRollNo = trim($RollNo10); 
$retainMaths10 = trim($maths10);
$retainScience = trim($science);
$retainEnglish =  trim($english);
$retainTamil = trim($tamil);
$retainSocial = trim($social);
$retainComputer = trim($computer);
$retainTotalMarks10 = trim($totalMarks10);
$retainRollNo12 = trim($RollNo12);
$retainMaths = trim($maths);
$retainChemistry=trim($chemistry);
$retainTotalMarks12 = trim($totalMarks12);
$retainRollNoCLG = trim($RollNoCLG);
$retainMajor = trim($major); 

if($input == "Submitss")
{
	 include("../php/functions.php"); 
	if (empty($RollNo10)) {
		$RollNo10ErrFlag = $RollNo10EmptyFlag = $ErrorFlag = "True";
	}
	 elseif(ValidateIsCharacter($RollNo10) == "False") {
	 	$RollNo10ErrFlag = $RollNo10CharInvalid = $ErrorFlag = "True";
	 }
	 elseif($RollNo10 <= 0) {
	 	$RollNo10ErrFlag = $RollNo10LessThanZeroError = $ErrorFlag = "True";
	 }
	 
	  if (empty($maths10))  {
	 	$maths10ErrFlag = $mathsEmptyFlag = $ErrorFlag = "True";
	  }
	 elseif(ValidateIsCharacter($maths10) == "False") {
	 	$maths10ErrFlag = $mathsCharInvalid = $ErrorFlag = "True";
	  }
	 elseif($maths10 < 0) {
	 	 
	 	$maths10ErrFlag = $mathsLessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($maths10 > 100) {
	 	 
	 	$maths10ErrFlag = $mathsGreaterThanZeroError  = $ErrorFlag = "True";
	 }
	 
	  if (empty($science))  {
	 	$scienceErrFlag = $scienceEmptyFlag = $ErrorFlag = "True";
	 }
	 elseif(ValidateIsCharacter($science) == "False") {
	 	$scienceErrFlag = $scienceCharInvalid = $ErrorFlag = "True";
	 }
	 elseif($science < 0) {
	 	$scienceErrFlag = $scienceLessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($science > 100) {
	 	$scienceErrFlag = $scienceGreaterThanZeroError = $ErrorFlag = "True";
	 }
	 
	  if (empty($english))   {
	  	$englishErrFlag = $englishEmptyFlag = $ErrorFlag = "True";
	 }
	 elseif(ValidateIsCharacter($english) == "False") {
	 	$englishErrFlag = $englishCharInvalid = $ErrorFlag = "True";
	 }
	 elseif($english < 0) {
	 	$englishErrFlag = $englishLessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($english > 100) {
	 	$englishErrFlag = $englishGreaterThanZeroError = $ErrorFlag = "True";
	 }
	  if (empty($tamil)) {
	  	$tamilErrFlag = $tamilEmptyFlag = $ErrorFlag = "True";
	  }
	  elseif(ValidateIsCharacter($tamil) == "False") {
	 	$tamilErrFlag = $tamilCharInvalid = $ErrorFlag = "True";
	 }
	 elseif($tamil < 0){
	 	$tamilErrFlag = $tamilLessThanZeroError = $ErrorFlag = "True";
	 } elseif($tamil > 100){
	 	$tamilErrFlag = $tamilGreaterThanZeroError = $ErrorFlag = "True";
	 }
	 
	 
	  if (empty($social)) {
	  	$socialErrFlag = $socialEmptyFlag = $ErrorFlag = "True";
	 }
	 elseif(ValidateIsCharacter($social) == "False")
	 {
	 	$socialErrFlag = $socialCharInvalid = $ErrorFlag = "True";
	 }
	 elseif($social < 0)
	 {
	 	$socialErrFlag = $socialLessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($social > 100)
	 {
	 	$socialErrFlag = $socialGreaterThanZeroError = $ErrorFlag = "True";
	 }
	 
	   if (empty($computer)) 
	  {
	  	$computerErrFlag = $computerEmptyFlag = $ErrorFlag = "True";
	  }
	 elseif(ValidateIsCharacter($computer) == "False")
	 {
	 	$computerErrFlag = $computerCharInvalid = $ErrorFlag = "True";
	 }
	 elseif($computer < 0)
	 {
	 	$computerErrFlag = $computerLessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($computer > 100)
	 {
	 	$computerErrFlag = $computerGreaterThanZeroError = $ErrorFlag = "True";
	 }
	 
	  if (empty($RollNo12)) 
	{
		$RollNo12ErrFlag = $RollNo12EmptyFlag = $ErrorFlag = "True";
	}
	 elseif(ValidateIsCharacter($RollNo12) == "False")
	 {
	 	$RollNo12ErrFlag = $RollNo12CharInvalid = $ErrorFlag = "True";
	 }
	 elseif($RollNo12 <= 0)
	 {
	 	$RollNo12ErrFlag = $RollNo12LessThanZeroError = $ErrorFlag = "True";
	 }
	
	  if (empty($group)) 
	{
		$groupErrFlag = $groupEmptyFlag = $ErrorFlag = "True";
		 
	}
	
	if (empty($maths)) 
	  {
	  	$mathsErrFlag = $mathsEmptyFlag = $ErrorFlag = "True";
	  }
	  if(ValidateIsCharacter($maths) == "False")
	   {
	   	$mathsErrFlag = $mathsCharInvalid = $ErrorFlag = "True";
	   }
	 elseif($maths < 0)
	 {
	 	$mathsErrFlag = $mathsLessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($maths > 200)
	 {
	 	$mathsErrFlag = $mathsGreaterThanZeroError = $ErrorFlag = "True";
	 }
	 if (empty($chemistry)) 
	  {
	  	$chemistryErrFlag = $chemistryEmptyFlag = $ErrorFlag = "True";
	  }
	 elseif(ValidateIsCharacter($chemistry) == "False")
	 {
	 	$chemistryErrFlag = $chemistryCharInvalid = $ErrorFlag = "True";
	 }
	 elseif($chemistry < 0)
	 {
	 	$chemistryErrFlag = $chemistryLessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($chemistry > 200)
	 {
	 	$chemistryErrFlag = $chemistryGreaterThanZeroError = $ErrorFlag = "True";
	 }
	 
	if($ErrorFlag != "True")
	{
 
	
		if($storeType == "xml")
		{
			$xml=simplexml_load_file("../xml/note.xml") or die("Error: Cannot create object");
			foreach($xml->children() as $studentDetails) {
				
				  
				    if($studentDetails->SchoolDetails->SchoolDetails_ID == $xml_id)
				    {
				    	//echo "inside if";
				    	$recordExsist = "True";
				    }
				    
				  } 
			
			if($recordExsist == "True")
			{
				//echo "inside true part";	
				foreach($xml->children() as $student) 
				{	
					if($student->SchoolDetails->SchoolDetails_ID == $xml_id)
					{
						//echo "found<br>";
						$student->SchoolDetails->maths_10th_std = $maths10;
						$student->SchoolDetails->Science_10std = $science;
						$student->SchoolDetails->English_10std = $english;
						$student->SchoolDetails->Tamil_10std = $tamil;
						$student->SchoolDetails->Social_10std = $social;
						$student->SchoolDetails->Computer_10std = $computer;
						$student->SchoolDetails->RollNo_12th_std = $RollNo12;
						$student->SchoolDetails->Major = $group;
						$student->SchoolDetails->Chemistry_12std = $chemistry;
						$student->SchoolDetails->maths_10std = $maths;
						$student->SchoolDetails->personalDetails_SchoolDetails_ID = 1;
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
				    	$SchoolDetails = $StudentDetails->addChild('SchoolDetails'); 
					$SchoolDetails->addChild('SchoolDetails_ID', $xml_id);
					$SchoolDetails->addChild('RollNo_10th_std',$RollNo10 );
					$SchoolDetails->addChild('maths_10th_std', $maths10);
					$SchoolDetails->addChild('Science_10std', $science);
					$SchoolDetails->addChild('English_10std', $english);
					$SchoolDetails->addChild('Tamil_10std', $tamil);
					$SchoolDetails->addChild('Social_10std', $social);
					$SchoolDetails->addChild('Computer_10std', $computer);
					$SchoolDetails->addChild('RollNo_12th_std', $RollNo12);
					$SchoolDetails->addChild('Major', $group);
					$SchoolDetails->addChild('Chemistry_12std', $maths);
					$SchoolDetails->addChild('maths_10std',$chemistry);
					$SchoolDetails->addChild('personalDetails_SchoolDetails_ID', $xml_id);
				    }
			 	}
			}
			 $xml->asXML("../xml/note.xml");
		}
		else
		{
			include("../php/sqlConnectionFile.php");
			$sql = "select personalDetails_SchoolDetails_FK from SchoolDetails; ";
			$stmt = sqlsrv_query( $conn, $sql );
			if( $stmt === false) {
			    die( print_r( sqlsrv_errors(), true) );
			}
			else
			{
				//echo "selected first value";
			}
			
			while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
			     
			      if($row['personalDetails_SchoolDetails_FK'] == $primaryKeyValue)
			      {
			      	$updateFlag = "True";
			      }
			}
		  
 			//echo $updateFlag;
 		 
			if($updateFlag == "True")
			{
				//echo "inside update";
				//echo "update";
				$sql = "update SchoolDetails set RollNo_10th_std='$RollNo10',Maths_10std='$maths10',Science_10std='$science',English_10std='$english',Tamil_10std='$tamil',Social_10std='$social',Computer_10std='$computer',Totalmark_10std='$totalMarks10',RollNo_12std='$RollNo12',Major='$group',maths_12std='$maths',chemistry_12std='$chemistry',TotalMark_12std='$totalMarks12' where personalDetails_SchoolDetails_FK = '$primaryKeyValue';";
				$stmt = sqlsrv_query( $conn, $sql);
				if( $stmt === false) {
				die( print_r( sqlsrv_errors(), true) );
				}
				else
				{
				//	echo "record updated";
				}
				//echo "found";
				//echo "<br>";
				$editFlag = True;
			}
			else
			{
				//echo "<br>insert<br>";
			
				$sql = "insert into SchoolDetails (RollNo_10th_std,Maths_10std,Science_10std,English_10std,Tamil_10std,Social_10std,Computer_10std,RollNo_12std,Major,maths_12std,chemistry_12std) values
				 ('$RollNo10','$maths10','$science','$english','$tamil','$social','$computer','$RollNo12','$group','$maths','$chemistry');";
				$stmt = sqlsrv_query( $conn, $sql);  
				if($stmt)
				{
					//echo "<br>row inserted";
				}
				else
				{
					die( print_r( sqlsrv_errors(), true) );
				}
				 $sql = "SELECT MAX(SchoolDetails_ID)  FROM SchoolDetails";
				    $stmt = sqlsrv_query($conn, $sql);
				    if($stmt)
				    {
				    	//echo "<br>";
				    	//echo "selected Max id";
				    }
				    else
				    {
				    	echo "<br>";
				    	echo "Max id fails";
				    	die( print_r( sqlsrv_errors(), true) );
				    }
				    
				    $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ;
				    $max_id =  $row[0];
				//  echo "<br>";
				 //  echo "max_ID:::$max_id";
				    $sql = "UPDATE SchoolDetails SET personalDetails_SchoolDetails_FK='$primaryKeyValue' WHERE SchoolDetails_ID = '$max_id';";
				     $stmt = sqlsrv_query($conn, $sql);
				    if($stmt)
				    {
				    	//echo "<br>";
				    	//echo "row updated";
				    }
				    else
				    {
				    //	echo "<br>";
				    //	echo "update failed";
				    	die( print_r( sqlsrv_errors(), true) );
				    }
			}
		       
		 
		sqlsrv_free_stmt( $stmt); 
		sqlsrv_close( $conn);  
		//echo  $primaryKeyValue; */
		}
		 include("../php/collegeDetails.php"); 	 
		
	}
	else
	{
	   include("../html/SchoolDetails.html");
	}
}
else
{ 
    include("../html/SchoolDetails.html");
}
?>
