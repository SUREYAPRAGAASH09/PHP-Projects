<?
$saveButtonDisableFlag = True;
$deleteButtonDisableFlag = True;
if($input == "Create")
{
	$loadButtonDisableFlag = True;
	$saveButtonDisableFlag = False;
	$deleteButtonDisableFlag = False;
	if($filePath == "")
	{
		echo "that";
		$myfile = fopen("../php/" . strval($File_Name) . ".txt", "w") or die("Unable to open the file");
	}
	else
	{
		echo "this";
		$myfile = fopen(strval($filePath) . strval($File_Name) . ".txt", "w") or $fileOpeningError = True;
	}
	fwrite($myfile, $Content);
	fclose($myfile);
	$messageFlag = 2;
}
if($input == "Save")
{
	$myfile = fopen("../php/" . strval($File_Name) . ".txt", "a+") or die("Unable to open the file");
	fwrite($myfile, $Content);
	fclose($myfile);
	$messageFlag = 1;
}
if($input == "Load")
{
	$saveButtonDisableFlag = False;
	$deleteButtonDisableFlag = False;
	$createButtonDisableFlag = True;
	
	$FN = $File_Name;
	$myfile = fopen("../php/" . strval($File_Name) . ".txt", "r") or die("Unable to open the file");
	$TB = "";
	while(!feof($myfile))
	{
		$TB = $TB . fgetc($myfile);
	}
	
}
if($input == "Delete")
{
	unlink("../php/" . strval($File_Name) . ".txt");
	$messageFlag = "DEL";
}

include("../html/fileOperation.html");
?>
