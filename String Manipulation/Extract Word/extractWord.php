<?
include("../php/functions.php"); 
 
if($_POST["input"] == "Display word")
{
	$MasterFlag = True;
	$CON = 1;
	if($txtbx1 != "")
	{
		$string = $txtbx1;
		if($txtbx2 != "")
		{
			$number = $txtbx2;
			if(ValidateIsNumeric($txtbx2) == "true")
			{
				//echo "sf";
				$displayFlag = "1";  	
				$temp = myExplode($txtbx1);
				$wordCount = myWordCount($txtbx1);  
				if($txtbx2 <= 0)
				{
					$displayFlag = "1";  	
				}
				elseif ($wordCount >= $txtbx2)
				{
					$word  = ($temp[$txtbx2 - 1]);
					$displayFlag = "2"; 
				}
				else
				{
					$displayFlag = "1";
				} 
				$string = $txtbx1;
				$number = $txtbx2;
				$valueRetainFlag = True;
				$MasterFlag = 2;
			}
			else
			{
				//echo "sureya";
				$PositionError = True;
				$notANumberFlag = True;
			}
		}
		else
		{
			$PositionError = True;
		}
	}
	else
	{
		$sentenceError =True;
		$number = $txtbx2;
		echo $number;
		if($txtbx2 == "")
		{
			$PositionError = True;
		}
		else
		{
			 if(ValidateIsCharacter($number) != "False")
			{
				$PositionError = True;
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
 
include("../html/extractword.html");
 
?> 
