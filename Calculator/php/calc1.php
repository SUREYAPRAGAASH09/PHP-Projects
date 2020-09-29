<?
if($symbols != "" or $operation != "" or $input != "" or $inputdot != "") {
	$masterFlag = True;
	 $CON = 1;
} 
if($_POST["symbols"] == "+" or $_POST["symbols"] == "-" or $_POST["symbols"] == "*" or $_POST["symbols"] == "/"  or $_POST["symbols"] == "=" ) {
	$decimalFlag = 0;
	$opr = $_POST["symbols"];
	$operator_count += 1; 
	$txtbx1 =   $txtbx1 . $txtbx2 . $_POST["symbols"];
 	$text = $_POST["symbols"];
 	$text2 = $_POST["equalToFlag"];
 	if( $_POST["symbols"] == "=" and $_POST["equalToFlag"] == True) {
 		 $operator_count += 1;
 	}
 	elseif($_POST["equalToFlag"] == True) {
 		$operator_count -= 1;
 	}
	if($operator_count >= 2 ) {
		switch($_POST["operator"]) {
			case "+":  
				$txtbx2 = $first_value + $second_value ;
				break;
				
			case "-":
				$txtbx2 =  $first_value - $second_value ;
				break;
				
			case "*":
				$txtbx2 = $first_value * $second_value ;
				 break;
				
			case "/":
				$txtbx2 =  $first_value / $second_value ;
				break;  	 	
		} 
		$operator_count = 1; 
		$number_count = 0;
		$first_value = $txtbx2;   	 
	}
	if ($opr == "=") {
 		$txtbx1 = "";  
 		$equalToFlag = True;
 	}   	
 	else {
		$operator = $opr;
		$second_value = "";
	}
 }
 elseif($_POST["input"] == "+/-") {
		if($_POST["txtbx2"] > 0) {
			if($_POST["operator_count"] == 0) {
				$txtbx2 = "-" . $txtbx2;
				$first_value = $txtbx2;
			}
			else {
				$txtbx2 = "-" . $txtbx2;
				$second_value = $txtbx2;
			}
		} else {
			$txtbx2 = abs($txtbx2);
	 	}
}
elseif($_POST["operator_count"] == 0) {
	 
	if($_POST["inputdot"] == "." && $decimalFlag == 0) { 
		 
		$txtbx2 =  $_POST["txtbx2"] . $_POST["inputdot"];
		$decimalFlag = 1;
	}	 
	$txtbx2 = $txtbx2 . $_POST["input"];
	$first_value = $txtbx2; 
}
elseif($_POST["operator_count"] >= 1) {
	
	 if($_POST["number_count"] >= 1) {
		if($_POST["inputdot"] == "." && $decimalFlag == 0) { 
			$txtbx2 = $txtbx2 . $inputdot;
			$decimalFlag = 1;
		}
		$txtbx2 = $txtbx2 . $_POST["input"];
		$second_value = $txtbx2;
		$number_count += 1;
		$equalToFlag = False;	
	}
	else {
		$txtbx2 = $_POST["input"];
		$second_value = $txtbx2;
		$first_number = 1;
		$number_count += 1;
		$display_count = 0;
		$equalToFlag = False;	
	}
}
if($_POST["operation"] == "DEL") {
	$temp = intval($_POST["txtbx2"]/10); 
	if($first_number == 0) {
		$txtbx2 = $temp;
		$first_value= $txtbx2;
	}
	else {
		$txtbx2 = $temp;
		$second_value = $txtbx2;
	}
}
if($_POST["operation"] == "C") {
	$txtbx1 = reset($txtbx1);
	$txtbx2 = reset($txtbx2);
	$operator_count = 0;
	$operator = reset($operator);
	$second_value = reset($second_value);
	$number_count = 0;
}
if($_POST["operation"] == "CE") { 
	$txtbx2 = reset($txtbx2);
}
 include("..\html\calc1.html");
?>
