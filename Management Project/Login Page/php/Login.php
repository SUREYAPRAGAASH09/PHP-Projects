<?
include("../php/functions.php"); 
if($input == "Submit")
{
	 $CON = 1; 
	if (empty($userID)) 
	{
		$userIDErrFlag = $userIDEmptyFlag = $ErrorFlag = "True";
	} 
	elseif (ValidateIsCharacter($userID) == "True") 
	{
		$userIDErrFlag = $userIDCharInvalid = $ErrorFlag = "True";
	}
	else
	{
		$flag = True;
	}
	
	if(empty($password))
	{
		
		$passwordErrFlag = $passwordEmptyFlag = $ErrorFlag = "True";
	}
	elseif(ValidateIsCharacter($password) == "True")
	{
		 
		$passwordErrFlag = $passwordCharInvalid = $ErrorFlag = "True";
	}
	if(empty($storeType))
	{
		$genderErrFlag = $genderEmptyFlag = $ErrorFlag = "True";
	}
	 	
	 if($ErrorFlag != True)
	 {
	 	 
	 	if($userID == "1234" and $password == "1234")
	 	{
	 		$storeType;
	 		 include("../php/summaryPage.php");
	 		 $logged = 1;
	 	}
	 	else
	 	{
	 		$loginFailsFlag = True;
	 	} 
 	}
 	else
 	{
 		include("../html/Login.html"); 
 	}
	$retainUserID = $userID;
	$retainPassword = $password;
	$retainStoreType = $storeType;
	 	 
}
else
{
include("../html/Login.html"); 
$CON = 1;
}
?>
