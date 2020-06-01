<?

 $myfile = fopen("../php/file.txt", "r") or die("Unable to open the file");
 $iterator = -1;
 $tempString;
 $array = array();
  
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
	 	 	$iterator+=1;
	 	 	$array[$iterator] = $tempString;
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
 $iterator+=1;
 $array[$iterator] = $tempString;
 fclose($myfile);
 
 
for($iterator=1;$iterator<=count($array);$iterator++)
{
	if($iterator%2 == 1)
	{
		echo "Element : ";
		echo  $array[$iterator];
	}
	else
	{
		echo " value :"; 
		echo "\t  $array[$iterator]";
		echo "<br>";
	}
} 

?>
