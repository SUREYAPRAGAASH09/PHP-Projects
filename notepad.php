<?
include("../php/functions.php"); 

if($input == "bold" or $input == "italics" or $input == "normal" or $input == "increaseFontSize" or $input == "decreaseFontSize")
{
	$MasterFlag = True;
	$CON = 1;
	if($FileOpend == True) {
	 	$OperationEncountered = True;
	}
	 if($fontSizeChanged == True) {
		$defaultFontSize = 2;
	}
	else {
		$defaultFontSize = 16;
	}
	
	switch($input) 	{
		case "bold" : {
			$styleFlag = "bold";
			break;
			}
		case "italics" : {
			$styleFlag = "italic";
			break;
			}
		case "normal" : {
			$styleFlag = "normal";
			break;
			}
		case "increaseFontSize" : {
			$styleFlag = "increaseFontSize";
			$fontSize = $defaultFontSize + $fontSize;
			$fontSizeChanged = True;
			break;
			}
		case "decreaseFontSize" : {
			$styleFlag = "decreaseFontSize";
			$fontSize =  abs($defaultFontSize - $fontSize);
			$fontSizeChanged = True;
			break;
			}
	 }
	 $temp = $Content;
} 
 
if($input == "save") {
	$CON = 1;
	$MasterFlag = True;
	$myfile = fopen("../php/" . strval($FileNameS) . ".txt", "w") or die("Unable to open the file");
	fwrite($myfile, $Content);
	fclose($myfile);
	$messageFlag = "True";
 }

if($input == "open") {
	$CON = 1;
	$MasterFlag = True;
	$FileOpend = True;
	$tempFileOpenedName = $FileNameO;
	$myfile = fopen("../php/" . strval($FileNameO) . ".txt", "r") or die("Unable to open the file");
	$temp;
	while(!feof($myfile))
	{
		$temp = $temp . fgetc($myfile);
	}
	 $textBoxContent = $temp;
}

if($input  == "findTerm") {
 	$CON = 1;
 	$MasterFlag = True;
  	//echo  findWord($Content, $searchWord);
 	if(findWord($Content, $searchWord) == "Found")
 	{
 		$Flag =  "True";
 	}
 	else
 	{
 		$Flag =  "False";
 	}
 	
  	$textBoxContent = $Content; 
 }

if($input == "replaceTerm") {
	$CON = 1;
	$MasterFlag = True;
	$replacedWord = myFindandReplace($Content, $searchWordR, $replaceWord, $replaceCount);
	$iterator = 0;
	$resultString = "";
	while($iterator !=  myWordCount($Content)) {
		$temp = $replacedWord[$iterator];
		$resultString = $resultString ." " . $temp;
		$iterator++;
	}
	$textBoxContent = $resultString;
	$messageFlag = "ReplacedOperation";
}
include("../html/notepad.html");
?>