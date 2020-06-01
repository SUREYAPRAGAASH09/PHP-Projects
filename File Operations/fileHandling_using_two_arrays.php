<?

 $myfile = fopen("../php/file.txt", "r") or die("Unable to open the file");
 $iterator_array_1 = -1;
 $iterator_array_2 = -1;
 $tempString;
 $array_1 = array();
 $array_2 = array();
 $numeric = 1;
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
	 	 	if($numeric%2 == 1)
	 	 	{
	 	 		$iterator+=1;
	 	 		$iterator_array_1+=1;
	 	 		$array_1[$iterator_array_1] = $tempString;
	 	 	}
	 	 	else
	 	 	{
	 	 		$iterator_array_2+=1;
	 	 		$array_2[$iterator_array_2] = $tempString;
	 	 	}
	 	 	 
	 	 	$tempString = "";
	 	 }
	 	 if($character == "#")
	 	 {
	 	 	 $flag = 1;
	 	  }
	 	  else
	 	  {
	 		$numeric+=1;
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
 
 
for($iterator=1;$iterator<count($array_2);$iterator++)
{
	 echo " Element : " .$array_2[$iterator] ;
	 echo " \t value : " . $array_1[$iterator+1] . "<br>" ;
	  
 } 

?>
