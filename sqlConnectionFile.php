<? $serverName = "192.168.63.121"; 
$uid = "SQLDemoLogin";   
$pwd = "dbdemo123!@#";  
$databaseName = "Training"; 

$connectionInfo = array( "UID"=>$uid,                            
                         "PWD"=>$pwd,                            
                         "Database"=>$databaseName); 


$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if($conn)
{
	//echo "html sql connected";
}
else
{
	//echo "html sql failed";
}?>