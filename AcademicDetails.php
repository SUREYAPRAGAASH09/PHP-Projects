<?
 
  echo  $primaryKeyValue; 
session_start();

		
 include("../php/functions.php"); 
if($input == "Submit")
{
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
	 
	  if (empty($totalMarks10)) 
	  {
	  	$totalMarks10ErrFlag = $totalMarks10EmptyFlag = $ErrorFlag = "True";
	   }
	 elseif(ValidateIsCharacter($totalMarks10) == "False")
	 {
	 	$totalMarks10ErrFlag = $totalMarks10CharInvalid = $ErrorFlag = "True";
	 }
	 elseif($totalMarks10 < 0)
	 {
	 	$totalMarks10ErrFlag = $totalMarks10LessThanZeroError = $ErrorFlag = "True";
	 }
	 elseif($totalMarks10 > 500)
	 {
	 	$totalMarks10ErrFlag = $totalMarks10GreaterThanZeroError = $ErrorFlag = "True";
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
	// echo $group;
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
	 
	 if (empty($totalMarks12)) 
	  {
	  	$totalMarks12ErrFlag = $totalMarks12EmptyFlag = $ErrorFlag = "True";
	  }
	 elseif(ValidateIsCharacter($totalMarks12) == "False")
	 {
	 	$totalMarks12ErrFlag = $totalMarks12CharInvalid = $ErrorFlag = "True";
	 }
 	elseif($totalMarks12 < 0)
 	{
 		$totalMarks12ErrFlag = $totalMarks12LessThanZeroError = $ErrorFlag = "True";
 	}
	 elseif($totalMarks12 > 1200)
	 {
	 	$totalMarks12ErrFlag = $totalMarks12GreaterThanZeroError = $ErrorFlag = "True";
	 }
	 	
	
	 
	if($ErrorFlag != "True")
	{
 
		$serverName = "192.168.63.121"; 
		$uid = "SQLDemoLogin";   
		$pwd = "dbdemo123!@#";  
		$databaseName = "Training"; 
		
		$connectionInfo = array( "UID"=>$uid,                            
		                         "PWD"=>$pwd,                            
		                         "Database"=>$databaseName); 
		 
		$conn = sqlsrv_connect( $serverName, $connectionInfo);  
		if( $conn === false ) {
		    die( print_r( sqlsrv_errors(), true));
		}
		$sql = "select RollNo_10th_std from SchoolDetails;";
		$stmt = sqlsrv_query( $conn, $sql );
		if( $stmt === false) {
		    die( print_r( sqlsrv_errors(), true) );
		}
		else
		{
			echo "selected first value";
		}
		
		while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
		      echo "$row[0]<br />";
		      if($row[0] == $RollNo10)
		      {
		      	$updateFlag = True;
		      }
		}
		  
 			 
 		 
			if($updateFlag == True)
			{
				echo "inside update";
				echo "update";
				$sql = "update SchoolDetails set RollNo_10th_std='$RollNo10',Maths_10std='$maths10',Science_10std='$science',English_10std='$english',Tamil_10std='$tamil',Social_10std='$social',Computer_10std='$computer',Totalmark_10std='$totalMarks10',RollNo_12std='$RollNo12',Major='$group',maths_12std='$maths',chemistry_12std='$chemistry',TotalMark_12std='$totalMarks12',personalDetails_ID=44 where RollNo_10th_std = '$RollNo10';";
				$stmt = sqlsrv_query( $conn, $sql);
				if( $stmt === false) {
				   echo "update query failed";
				}
				else
				{
					echo "record updated";
				}
				echo "found";
				echo "<br>";
			}
			else
			{
				echo "<br>insert";
				$row = 12;
				$sql = "insert into SchoolDetails (RollNo_10th_std,Maths_10std,Science_10std,English_10std,Tamil_10std,Social_10std,Computer_10std,Totalmark_10std,RollNo_12std,Major,maths_12std,chemistry_12std,TotalMark_12std) values
				 ('$RollNo10','$maths10','$science','$english','$tamil','$social','$computer','$totalMarks10','$RollNo12','$group','$maths','$chemistry','$totalMarks12');";
				$stmt = sqlsrv_query( $conn, $sql);  
				if($stmt)
				{
					echo "<br>row inserted";
				}
				else
				{
					die( print_r( sqlsrv_errors(), true) );
				}
				 $sql = "SELECT MAX(SchoolDetails_ID)  FROM SchoolDetails";
				    $stmt = sqlsrv_query($conn, $sql);
				    if($stmt)
				    {
				    	echo "<br>";
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
				    $sql = "UPDATE SchoolDetails SET personalDetails_ID=44";
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
				    	die( print_r( sqlsrv_errors(), true) );
				    }
			}
		       
		 
		sqlsrv_free_stmt( $stmt); 
		sqlsrv_close( $conn);  
		echo  $primaryKeyValue; 
		
		  	 
		//header("Location: http://localhost/SureyaPragaash/php/Result.html");
	}
	
		$retainRollNo = $RollNo10; 
		$retainMaths10 = $maths10;
		$retainScience = $science;
		$retainEnglish =  $english;
		$retainTamil = $tamil;
		$retainSocial = $social;
		$retainComputer = $computer;
		$retainTotalMarks10 = $totalMarks10;
		$retainRollNo12 = $RollNo12;
		$retainMaths = $maths;
		$retainChemistry=$chemistry;
		$retainTotalMarks12 = $totalMarks12;
		$retainRollNoCLG = $RollNoCLG;
		$retainMajor = $major;
		
		 
}
include("../html/AcademicDetails.html");
?>