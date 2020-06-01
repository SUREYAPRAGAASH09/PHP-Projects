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
			  color : #000000;
			  background-color:  ;
			}
			input[type=number] {
    height: 30px;
    line-height: 30px;
    font-size: 16px;
    padding: 0 8px;
}
input[type=number]::-webkit-inner-spin-button { 
    -webkit-appearance: none;
    cursor:pointer;
    display:block;
    width:18px;
    color: #333;
    text-align:center;
    position:relative;
}    
input[type=number]:hover::-webkit-inner-spin-button { 
    background: #eee url('http://i.stack.imgur.com/YYySO.png') no-repeat 50% 50%;  
    width: 14px;
    height: 14px;
    padding: 4px;
    position: relative;
    right: 4px;
    border-radius: 28px;
}
		</style>
	</head>
	<body class="  text-body">
		<div class="container" style="width:50%;">
			<div class="d-flex p-3   ">
				<div class="container">
					<label class="mt-4">Name </label> 
				    	<div class="mt-0 row" >
					    	<div class="col-sm-6 col-md-4">
					    		<label>First name : </label>
					    		<input type="text" class="form-control" placeholder="Maths" >
					    	</div>
					    	<div class="col-sm-6 col-md-4">
					    		<label>Middle Name : </label>
					    		<input type="text" class="form-control" placeholder="Science" >
					    	</div>
					    	<div class="col-sm-6 col-md-4">
					    		<label>Last Name : </label>
					    		<input type="text" class="form-control" placeholder="English" >
					    	</div>
					    </div>
					    
					    <label class="mt-2">Chose Major : </label>
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
				    	
				    	<label for="LastName">Nationality: </label>
				  	<span class="error">* <?php echo $nationalityErr;?></span>
				  	<div class="container" style="margin-left:50px;font-size:18px;">
				  	   	<div class="checkbox">
					      		<label><input type="checkbox" name="Nationality" value="Indian">Indian</label>
					    	</div>
					    	<div class="checkbox">
					      		<label><input type="checkbox" name="Nationality" value="German">German</label>
					    	</div>
			 		</div>
			 		 
			 		 
					  <select>
					<?php
					    for ($i=1; $i<=100; $i++)
					    {
					        ?>
					            <option value="<?php echo $i;?>"><?php echo $i;?></option>
					        <?php
					    }
					?>
					</select>
					 
				</div>
			</div>
		</div>
	</body>
</html>