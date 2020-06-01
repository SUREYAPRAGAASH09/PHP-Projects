<?
include("../php/functions.php"); 
if($_POST["input"] == "Find & Replace")
{
	$MasterFlag = True;
	$CON = 1;
	if($sentence != "")
	{
		$retainSentence =  $sentence;
		if($search_word != "")
		{
			$retainSearchWord = $search_word;
			if($replace_word != "")
			{
				$retainReplaceWord = $replace_word;
				if($replace_count != "")
				{
					if(ValidateIsCharacter($replace_count) == "true")
					{
						$retainReplaceCount = $replace_count;  
						global $replaceCounter; 
						$strings = $sentence;
						$searchString = $search_word;
						$replaceString = $replace_word;	
						$replaceCount = $replace_count; 
					   	
					   	$replacedWord = myFindandReplace($strings, $searchString, $replaceString, $replaceCount); 
						$i = 0;
						$resultString = "";
						 
						while($i !=  myWordCount($strings))
						{
							$temp = $replacedWord[$i];
							$resultString = $resultString ." " . $temp;
							$i++;
						}
						
						$displayFlag = 1; 
						if($searchString  == $replaceString)
						{
							$displayFlag = 2;
						}
						  
						$finalResult = $resultString;
						$retainSentence =  $sentence;
						$retainSearchWord = $search_word;
						$retainReplaceWord = $replace_word;
						$retainReplaceCount = $replace_count;  
						$valueRetainFlag = True;
						$MasterFlag = 2;
					}
					else
					{
						$replaceCountError = True;
						$notANumberFlag = True;
					}
					
				}
				else
				{
					$replaceCountError = True;
				}
			}
			else
			{
				$replaceWordError = True;
				$retainReplaceCount = $replace_count; 
				if($replace_count == "")
				{
					$replaceCountError = True;
				}
			}
		}
		else
		{
			$SearchWordError = True;
			$retainReplaceWord = $replace_word;
			$retainReplaceCount = $replace_count; 
			if($replace_word == "")
			{
				$replaceWordError = True;
			}
			if($replace_count == "")
			{
				$replaceCountError = True;
			}
		}
	}
	else
	{
		$sentenceError = True;
		$retainSearchWord = $search_word;
		$retainReplaceWord = $replace_word;
		$retainReplaceCount = $replace_count;  
		if($search_word == "")
		{
			$SearchWordError = True;
		}
		if($replace_word == "")
		{
			$replaceWordError = True;
		}
		if($replace_count == "")
		{
			$replaceCountError = True;
		}
		
	 }
}
 if($_POST["input"] == "CLEAR")
 {
 	$CON = 1;
  	$sentence = reset($sentence);
 	$search_word = reset($search_word);
 	$replaceString = reset($replace_word);	
	$replaceCount = reset($replace_count); 
	$MasterFlag = True;
 }
include("../html/findandreplace.html");
?>
