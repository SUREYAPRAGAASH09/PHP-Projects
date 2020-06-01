<?
function myWordCount($string)
{
	$string = $string . " ";
 	$iterator=0;
  	$wordCount = 0;

	 while ($string[$iterator] != "")
	 {
		   if($string[$iterator] == " ")
		   {
		     $wordCount += 1;
		   }
	$iterator++;
 	}

 	return $wordCount;
} 

function myLenght($string)
{
 	$iterator = 0;

 	while ($string[$iterator] != "")
 	{
 		$iterator++;
 	}

 	return $iterator;
}
 
function myExplode($string)
{	 
 	$string = $string . " ";
	$iterator=0;
	$temporaryString;
  	$resultArray = array();
 	$lenght = strlen($string);
  	$arrayIndex = -1;

  	while($iterator != $lenght)
  	{
   		 if($string[$iterator] == " ")
   		 {
			      $arrayIndex += 1;
			      $resultArray[$arrayIndex] = $temporaryString; 
			      $temporaryString = "";
		 }
   		 else
		 {
		      	     $temporaryString = $temporaryString . $string[$iterator]; 
		 }
	$iterator += 1;  
	}

	return $resultArray;
}
//$string = "the fish is fishing in the seashore";
//print_r(myExplode($string));
function findWord($string, $searchWord)
{
	$WordArray = myExplode($string);
	$lenght = myLenght($WordArray);
	$iterator = 0;
	$flag = "Not Found";
	 
	while($iterator != $lenght)
	{
		if($WordArray[$iterator] == $searchWord)
		{
			$flag = "Found";
		}
		 $iterator += 1;
	}
	 
	return $flag;
}

//$string = "Simple Text Editor";
//$searchWord = "Text";
//print_r(findWord($string,$searchWord));
function myFindandReplace($strings, $searchString, $replaceString )
{
	global $replaceCounter;
	if($searchString == $replaceString)
	{
		$words = "your search string and replace string are seems to be same";
	}
	else
	{
		$words = myExplode($strings); 
	 	$iterator = 0;
	  	$wordCount = myWordCount($strings);
	  	$replaceCounter = 0;
	  	
	  	while($iterator != $wordCount)
	  	{
		  	  if($words[$iterator] == $searchString)
		  	  {
		  		$words[$iterator] = $replaceString;
		  		$replaceCounter += 1;
		  	  }
		  	$iterator++;
	  	}
	}
	
  	return $words;
}
/*Validatiom*/
function ValidateIsCharacter($string)
{
    $string = trim($string);
	$lenght = strlen($string); 
	$i = 0;
	 
	while($i<$lenght)
	{
	  if(ord($string[$i])>=48 and ord($string[$i])<=57  ) 
	  {
	        if(ord($string[$i]) == 32)
	        {
	          $flag = "False";
	          break;
	        }
	      $flag = "true"; 
	  }
	   else
	      {
	        $flag = "False";
	        break;
	      }
      	 $i+=1;  
	} 
	return $flag;
}
//$string = "qwe qwre";
//echo  ValidateIsCharacter($string);

 function ValidateSingleCharacter($string)
{
    $string = trim($string);
	$lenght = strlen($string); 
	 
    if($lenght == 1 and ValidateIsCharacter($string) == "False")
    {
      $flag = "False";
    }
   else
   {
     $flag = "True";
    }
	return $flag;
}
// $string = "esdf";
//  echo ValidateSingleCharacter($string);

function ValidateIsNumeric($string)
{
   	 $string = trim($string);
	$lenght = strlen($string); 
	$i = 0;
	 
	while($i<$lenght)
	{
	  if(ord($string[$i])>=48 and ord($string[$i])<=57  ) 
	  {
	       
	      $flag = "true"; 
	  }
	   else
	      {
	        $flag = "False";
	        break;
	      }
      	 $i+=1;  
	} 
	return $flag;
}
?>