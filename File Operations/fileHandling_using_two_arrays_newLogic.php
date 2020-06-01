<?
$myfile = fopen("../php/file.txt", "r") or die("Unable to open the file");
 $iterator_element = -1;
 $iterator_value = -1;
 $tempString;
 $element = array();
 $value = array(); 
 $flag = 1;
 while(!feof($myfile)) 
 {
 	 $character = fgetc($myfile); 
 	 if($character == "[" or $character == "]" or $character == "#")
 	 {
 	 	if($flag ==1 and $character == "[" )
 	 	{
 	 		 $tempString = "";
 	 	}
 	 	else
 	 	{ 
 	 		$flag = 0;
	 	 	if($character == "]")
	 	 	{
	 	 		$iterator_element+=1;
	 	 		$element[$iterator_element] = $tempString;
	 	 	}
	 	 	else
	 	 	{
	 	 		$iterator_value+=1;
	 	 		$value[$iterator_value] = $tempString;
	 	 	}
	 	 	$tempString = "";
	 	 }
	 	 if($character == "#")
	 	 {
	 	 	 $flag = 1;
	 	  }
	  }
 	 else
 	 {
 	 	$tempString = $tempString . $character;
 	 }
 }
 
 
 fclose($myfile);
// print_r($element);
// print_r($value);
 
 $lenght = count($value);
for($iterator=0;$iterator<$lenght;$iterator++)
{
	 
	 echo "  element : " . $element[$iterator] ;
	 echo "\t value : " .$value[$iterator]."<br>";
	  
 } 

?>
