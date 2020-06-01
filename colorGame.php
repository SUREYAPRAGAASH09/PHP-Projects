<?
$instructionColors = array("red", "blue", "Green","Orange","purple","pink","MistyRose","black","brown","violet","yellow","SlateBlue");
$optionColors = array("red#blue#Green","Green#red#blue",
		"Orange#Green#purple",
		"MistyRose#Orange#violet",
		"Orange#Green#purple",
		"pink#violet#purple",
		"SlateBlue#brown#MistyRose",
		"Yellow#black#brown",
		"red#Green#brown",
		"blue#violet#SlateBlue",
		"Orange#Yellow#purple",
		"SlateBlue#Green#MistyRose");

if(($input != "") OR ($intialColorFlag == 0)) 
{
	if($input != "")
	{
		if(ltrim($input) == $currentColorName)
		{
			$score = $score + 1;	
			$win = "+1";
		}
		else
		{
			$score = $score - 1;	
			$win = "-1";
		}
	}
	
	if($intialColorFlag == 0)
	{
		$count = 0;
		$score = 0;
		$intialColorFlag = 1;
	}
	if($count < 10)
	{
		$currentColorName = $instructionColors[$count];
		$Colors = explode("#",$optionColors[$count]);
		//print_r($Colors);
		$count = $count + 1;
	}
}		

include("colorGame.html");

?>