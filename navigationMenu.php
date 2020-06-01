<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<style>
		body {margin:0;font-family:Arial}
		.dropbtnhhh, .topnav {
		  background-color: #4CAF50;
		  color: white;
		  padding: 10px;
		  font-size: 20px;
		  border: none;
		}
		
		.dropdown {
		  position: relative;
		  display: inline-block;
		}
		
		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f1f1f1;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}
		
		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  font-size:18px;
		 
		}
		
		.dropdown-content a:hover {background-color: #ddd;}
		
		.dropdown:hover .dropdown-content {display: block;}
		
		.dropdown:hover .dropbtn  {background-color: #3e8e41;text-decoration: none;}
		a:link {
		  text-decoration: none;
		}
		a:hover {background-color: #3e8e41; text-decoration: none;}
	</style>
	</head>
	<body>

 
	<div class="topnav">
		 <a href="../php/navigationMenu.php" style="color:white;font-size:24px;padding:10px;" >Home</a>
		 <a href="../php/navigationMenu.php?Tag=calc" style="color:white;padding:10px;" >Calculator</a>
			<div class="dropdown">
			  	<button class="dropbtnhhh">String Manipulation</button>
				  <div class="dropdown-content">
					   <a href="../php/navigationMenu.php?Tag=wordcount">Word Count</a>
					    <a href="../php/navigationMenu.php?Tag=find">find and replace</a>
					    <a href="../php/navigationMenu.php?Tag=word">extract word</a>
					    <a href="../php/navigationMenu.php?Tag=position">extract posistion</a>
					     
				  </div>
			</div>
		<a href="../php/navigationMenu.php?Tag=notepad" style="color:white;padding:10px;" >Notepad</a>
		<a href="../php/navigationMenu.php?Tag=login" style="color:white;padding:10px;">College Details</a>
	</div>
	 <?
		 $logged = 0;
		 switch($Tag)
		 {
		 	
		 	case "calc":
		 	{
		 			 include("../php/calc1.php");  
		 			 $CON = 1;
				  	break;
		 	}
		 	
		 	case "wordcount":
		 	{
		 			 include("../php/wordCount.php"); 
		 			$CON = 1;	
					 break;
		 	}
		 	case "find":
		 	{
		 			 include ("../php/findAndReplace.php");  
		 			$CON = 1;	
				    	break;
		 	}
		 	case "word":
		 	{
		 			include("../php/extractWord.php");  
		 			$CON = 1;	
				    	break;
		 	}
		 	case "position":
		 	{
		 			include("../php/extractNumber.php");   
		 			$CON = 1;	
					break;
		 	}
		 	case "notepad":
		 	{
		 		echo $logged;
		 		if($logged == 0)
		 		{
		 			//include("../php/masterHomePage.php");
		 		}
		 		if($logged == 0)
		 		{
		 			include("../php/notepad.php");
		 			$CON = 1;	
		 			break;
		 		}
		 	}
		 	case "login":
		 	{
		 			include("../php/login.php");
		 			$CON = 1;	
		 			$logged = 1;
		 			break;
		 			
		 	}
		 	
		  }
		  if($Flag == False and $CON == 0)
		  {
		 	 include("../php/masterHomePage.php");
		  }
		 ?>
</body>
</html>
