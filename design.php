<!DOCTYPE html>
<html>
	<head>
	 
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<style>
			body {
			  font-family: Arial;
			  color: white;
			  background-color:  ;
			}
			
			.split {
			  height: 95%;
			  width: 32%;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  overflow-x: hidden;
			  padding-top: 20px;
			}
			
			.left {
			  left: 0;
			  background-color:  ;
			}
			
			.right {
			  right: 0;
			  background-color: ;
			}
			
			.centered {
			  position: absolute;
			 
			  transform: translate(-50%, -50%);
			  
			}
			
			.centered img {
			  width: 50px;
			  border-radius: 50%;
			  height:50px;
			  
			}
			img
			{
				width: 50px;
				  height:50px;
				   border-radius: 50%;
			}
			button {
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: auto;
			  border: none;
			  cursor: pointer;
			  width: 50%;
			}
			 .popover {
			    width:150px;
			}
		</style>
	</head>
	<body class="w3-pale-green">
	<form action="../php/AcademicDetails.php" method="POST">
	<div class="split left w3-indigo">
		  <div class="centered ">
			    <img src="../php/SSLC.png" alt="SSLC" style="margin-top:500px;margin-left:454px;">
			   
			    <div class="container" style="margin-left:360px;width:320px;margin-top:10px;">
				 
				    	<label class=""><center>Enter Roll Number : </center></label> 
				    	<? if($RollNo10ErrFlag == "True") { ?>
				    	<a href="#" data-toggle="popover" title="Warning" data-content="<? if($RollNo10EmptyFlag == "True"){ echo "Enter Roll No"; }elseif($RollNo10CharInvalid == "True"){ echo "Enter Roll No as Numeric values only"; }elseif($RollNo10LessThanZeroError == "True"){ echo "Enter Roll No Number from 1 to 100"; } ?>" style="color:red;"><img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
				    	<div class="row">
				    		<div class="col">
				    			<input type="text" class="form-control" placeholder="Roll Number" name="RollNo10" value="<?php  echo $retainRollNo; ?>" style="border: <? if($RollNo10ErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
				    	</div>
				    
				    	<label class="mt-4" style="margin-left:90px;font-weight:bold;">Mark Scored  </label> 
				    	<div class="mt-0 row" >
					    	<div class="col-sm-6 col-md-6">
					    		<label>Maths : </label>
					    		<? if($maths10ErrFlag == "True") { ?>
					    		<a href="#" data-toggle="popover" title="Warning" data-content="<? if($mathsEmptyFlag == "True"){ echo ""; }elseif($mathsCharInvalid == "True"){ echo "sd"; echo "Enter Maths Marks as Numeric values only"; }elseif($mathsLessThanZeroError == "True") { echo " ";}elseif($mathsGreaterThanZeroError == "True"){ echo " "; } ?>" style="color:red;">
					    		<img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
					    		<input type="text" class="form-control" placeholder="Maths" name="maths10" value="<?php echo $retainMaths10;?>"  style="border: <? if($maths10ErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
					    	<div class="col-sm-6 col-md-6">
					    		<label>Science : </label>
					    		<? if($scienceErrFlag == "True") { ?>
					    		<a href="#" data-toggle="popover" title="Warning" data-content="<? if($scienceEmptyFlag == "True"){ echo "Enter Science Mark"; }elseif($scienceCharInvalid == "True"){ echo "Enter Science Mark from 1 to 100"; }elseif($scienceLessThanZeroError == "True") { echo "Enter Science Mark  from 1 to 100";}elseif($scienceGreaterThanZeroError == "True"){ echo "Enter Science Mark  from 1 to 100"; } ?>" style="color:red;">
					    		<img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
					    		<input type="text" class="form-control" placeholder="Science" name="science" value="<?php echo $retainScience;?>"  style="border: <? if($scienceErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
					    	<div class="col-sm-6 col-md-6">
					    		<label>English : </label>
					    		<a href="#" data-toggle="popover" title="Warning" data-content="<? echo $englishErr; ?>" style="color:red;"><? if($englishErrFlag == "True") { ?><img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
					    		<input type="text" class="form-control" placeholder="English" name="english" value="<?php echo $retainEnglish;?>" style="border: <? if($englishErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
					    	<div class=" col-sm-6 col-md-6" >
					    		<label>Tamil : </label>
					    		<a href="#" data-toggle="popover" title="Warning" data-content="<? echo $tamilErr; ?>" style="color:red;"><? if($tamilErrFlag == "True") { ?><img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
					    		<input type="text" class="form-control" placeholder="Tamil" name="tamil" value="<?php echo $retainTamil;?>" style="border: <? if($tamilErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
					    	<div class="col-sm-6 col-md-6">
					    		<label>Social : </label>
					    		<a href="#" data-toggle="popover" title="Warning" data-content="<? echo $socialErr; ?>" style="color:red;"><? if($socialErrFlag == "True") { ?><img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
					    		<input type="text" class="form-control" placeholder="Social" name="social" value="<?php echo $retainSocial;?>" style="border: <? if($socialErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
					    	<div class="col-sm-6 col-md-6">
					    		<label>Computer: </label>
					    		<a href="#" data-toggle="popover" title="Warning" data-content="<? echo $computerErr; ?>" style="color:red;"><? if($computerErrFlag == "True") { ?><img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
					    		<input type="text" class="form-control" placeholder="Computer" name="computer" value="<?php echo $retainComputer;?>" style="border: <? if($computerErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
					    </div>
					     
					
					<label class="mt-4">Total Marks: </label> 
					<a href="#" data-toggle="popover" title="Warning" data-content="<? echo $totalMarksErr10; ?>" style="color:red;"><? if($totalMarks10ErrFlag == "True") { ?><img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
					<div class="mt-0 row" >
						<div class="col">
					    		<input type="text" class="form-control" placeholder="Total Mark" name="totalMarks10"  value="<?php echo $retainTotalMarks10;?>"  style="border: <? if($totalMarks10ErrFlag == "True") { echo "solid 3px red"; } ?> ">
					    	</div>
					</div>
			    </div>
		  </div>
	</div>
	<script>
	$(document).ready(function(){
	    $('[data-toggle="popover"]').popover();   
	});
	</script>
	 
		<div class="container" style="margin-left:380px;width:400px;color:black " >
		    	<img src="../php/collegeIcon.png" alt="college" style="margin-top:20px;margin-left:134px;">
		    	<div class="container" >
		    		  <label class="mt-4">College Details : </label> 
				    <label class="mt-4">choose Department : </label> 
				     <select name="major" class="form-control" placeholder="Enter Semester 8 Mark Scored.." id="major" style="width:100%;">
					         <option value="" disabled selected>Select your option</option>
					         <option value="CSE" id="0" >CSE</option>
					         <option value="ECE" id="1" >ECE</option>
					         <option value="MECH" id="2" >MECH</option>
					         <option value="EEE" id="2" >EEE</option>
			   	   </select>
			   	   <label class="mt-4">Mark scored in : </label> 
			    	    <div class="mt-0 row" >
				    	<div class="col-sm-6 col-md-6">
				    		<label>Physics : </label>
				    		<a href="#" data-toggle="popover" title="Warning" data-content="<? echo $totalMarksErr10; ?>" style="color:red;"><? if($totalMarks10ErrFlag == "True") { ?><img src="../php/help.jpg" alt="help" style="height:13px;width:13px;"><? } ?></a>
						<input type="text" class="form-control" placeholder="Physics" name="semester1"  value="<?php echo $retainSemester1;?>">
				    	</div>
				    	<div class="col-sm-6 col-md-6">
				    		<label>Maths : </label>
				    		<input type="text" class="form-control" placeholder="Maths" name="semester1"  value="<?php echo $retainSemester1;?>">
				    	</div>
				    	<div class="col-sm-6 col-md-6">
				    		<label>Physics : </label>
				    		<input type="text" class="form-control" placeholder="Physics" name="semester1"  value="<?php echo $retainSemester1;?>" >
				    	</div>
				    	<div class="col-sm-6 col-md-6">
				    		<label>Maths : </label>
				    		<input type="text" class="form-control" placeholder="Maths" name="semester1"  value="<?php echo $retainSemester1;?>">
				    	</div>
				    	<div class="col-sm-6 col-md-6">
				    		<label>Physics : </label>
				    		<input type="text" class="form-control" placeholder="Physics" name="semester1"  value="<?php echo $retainSemester1;?>">
				    	</div>
				    	<div class="col-sm-6 col-md-6">
				    		<label>Maths : </label>
				    		<input type="text" class="form-control" placeholder="Maths" name="semester1"  value="<?php echo $retainSemester1;?>">
				    	</div>
				    	<div class="col-sm-6 col-md-6">
				    		<label>Physics : </label>
				    		<input type="text" class="form-control" placeholder="Physics" name="semester1"  value="<?php echo $retainSemester1;?>">
				    	</div>
				    	<div class="col-sm-6 col-md-6">
				    		<label>Maths : </label>
				    		<input type="text" class="form-control" placeholder="Maths" name="semester1"  value="<?php echo $retainSemester1;?>">
				    	</div>
				    	 
				    </div>
			</div>
		 </div>
	  
	  
	<div class="split right w3-deep-orange">
		  <div class="centered">
			    <img src="../php/HSC.jpg" alt="college" style="margin-top:430px;margin-left:500px;">
			 
				       <div class="container " style="margin-left: 370px;width:320px;margin-top:10px;">
				          
					    <label class="mt-3">Enter Roll Number : </label> 
					    	<div class="row" >
					    		<div class="col">
						    		<input type="text" class="form-control" placeholder="Roll Number"   name="semester1"  value="<?php echo $retainSemester1;?>">
						    	</div>
					    	</div>
				    	
				    	<label class="">Chose Major : </label>
					    	 <div class="container" style="margin-left:50px;font-size:18px;">
							  <div class="radio">
							      	<label><input type="radio" name="group" value="Biology"   <?php if (isset($group) && $group=="Biology") echo "checked";?>>Biology</label>
							    </div>
							    <div class="radio">
							      	<label><input type="radio" name="group" value="Computer_Science" <?php if (isset($group) && $group=="Computer_Science") echo "checked";?>>Computer_Science</label>
							    </div>
							    <div class="radio  ">
							      	<label><input type="radio" name="group" value="Commerce" <?php if (isset($group) && $group=="Commerce") echo "checked";?>>Commerce</label>
							    </div>
						    </div>
					    
					    <label class="">Mark scored in : </label> 
					    	    <div class="mt-0 row" >
						    	<div class="col-sm-6 col-md-6">
					    		<label>Maths : </label>
					    		<input type="text" class="form-control" placeholder="Maths" name="semester1"  value="<?php echo $retainSemester1;?>">
					    	</div>
					    	<div class="col-sm-6 col-md-6">
					    		<label>Science : </label>
					    		<input type="text" class="form-control" placeholder="Science" name="semester1"  value="<?php echo $retainSemester1;?>">
					    	</div>
					    	   
						   
					    	 
						    </div>
					    <label class="mb-0">Total Mark obtained : </label> 
						    <div class="mt-0 row" >
							<div class="col">
						    		<input type="text" class="form-control" placeholder="Total Mark" name="semester1"  value="<?php echo $retainSemester1;?>">
						    	</div>
						    </div>
				 
			    </div>
		  </div>
	</div>
	     <button type="submit" name="input" style="margin-Left:420px;width:300px;margin-top:12px;border-radius:20px;font-size:18px;" value="Submit">Submit</button>
	     </form>
	</body>
</html> 
