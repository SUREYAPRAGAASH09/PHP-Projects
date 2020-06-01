<?
include("../php/functions.php");
if($_POST["input"] == "Get Position" or $_POST["input"] == "FIND NEXT" )
{ 
	$MasterFlag = True;
	$CON = 1;
	if($txtbx1 != "")
	{
		$string = $txtbx1;
		if($txtbx2 != "")
		{
			if(ValidateIsCharacter($txtbx2) == "False")
			{
				 $iterator = 0;
				if($input == "FIND NEXT")
				{
					$iterator = $word;
				}
				 
				$inputString = myExplode($txtbx1);
				 $lenght = myWordCount($txtbx1);
				 $Result = 0;
				while($lenght >= $iterator)
				{
					if($inputString[$iterator] == $txtbx2)
					{  
						$Result = $iterator+1;
						break;
					}
				$iterator++;	
				} 
			 	$string = $txtbx1;
				$number = $txtbx2;
				$valueRetainFlag = True;
				if($Result > 0)
				{
					$word = $Result;	
					$displayFlag = 2;
				}
				else 
				{
					$displayFlag = 1;
				} 
				$MasterFlag = 2;
			}
			else
			{
				$wordError = True;
				$notANumberFlag = True;
			}
		}
		else
		{
			$wordError = True;
		}
	}
	else
	{
		$number = $txtbx2;
		$sentenceError = True;
		if($txtbx2 == "")
		{
			$wordError = True;
		}
		else
		{
			 if(ValidateIsCharacter($number) != "True")
			{
				$wordError = True;
				$notANumberFlag = True;
			}
		}
	}
}

if($_POST["input"] == "CLEAR")
{
	$CON = 1;
	$MasterFlag = True;
	$txtbx1 = reset($txtbx1);
	$txtbx2 = reset($txtbx2); 
} 
include("../html/en.html");
?> 
