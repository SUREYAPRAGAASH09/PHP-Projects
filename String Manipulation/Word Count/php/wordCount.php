<?
include ("../php/functions.php"); 
if($_POST["input"] == "Count Word")
{ 
	$MasterFlag = True;
	$CON = 1;
		if($sentence != "")
		{
			$string = $sentence;
			if($search_word != "" )
			 {
			 	 
			 	$replacedWord = myExplode($sentence);
				$wordCount = 0; 
				$Lenght = myWordCount($sentence);   
				$i = 0;
				while($i != $Lenght)
				{
					$temp = $replacedWord[$i];  
					if($temp == $search_word)
					{
						$wordCount += 1; 
					} 
					$i++;
				} 
				
				$Resultword =  $wordCount; 
				$displayFlag = 2;
				if($wordCount == 0)
				{
					$displayFlag = 1;
				}
				
				$string = $sentence;
				$string2 = $search_word;  
			}
			else 
			{
				$wordError = True;   
			}
		 }
		else
		{
			$string2 = $search_word; 
			$sentenceError = True;
			if($search_word == "")
			{
				$wordError = True;
			}   
		}
	 	
	 
 }
 if($_POST["input"] == "CLEAR")
 {
 	$MasterFlag = True;
 	 
	$CON = 1;
 	$sentence = reset($sentence);
 	$search_word = reset($search_word);
 	$string = reset($string);
 	$string2 = reset($string2);
 	 
 }
include("../html/wordCount.html");
?>

