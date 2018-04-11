<DOCTYPE html!>

<html>

<body>

<h1> Calculator </h1>
<FORM METHOD = "POST" ACTION="<?php echo $_SERVER["PHP_SELF"];?>" >
<INPUT TYPE="text" NAME="thisInput" VALUE="default" SIZE=10>
<INPUT TYPE="submit" VALUE="done">

</FORM>
<?php
function validateExpression($Expr) {
	 $flag = true;


	 //Check for all consecutive dots and multiple dots per number.
	 
	 preg_match_all('/[0-9,.]+/', $Expr, $matches);
	 $nums = $matches[0];
	 foreach ($nums as &$value) {
  	 	 preg_match_all('/[\.]+/', $value, $resp);
  		 if (count($resp[0]) > 1) {
      		 	 
      			 $flag = false;  
	 	 }
		 foreach ($resp[0] as $dot) {
      		 	 if (strlen($dot) > 1) {
         		    
	 		    $flag = false;  
            		 }
    		 }
  
	 }

	 //Check for errors in the beginning of the expression
	 if (!is_numeric($Expr[0]) && $Expr[0] != '-') {
  	    
	    $flag = false; 
	 }
	 //Check for consecutive minus signs in the beginning of the expression (A unique edge case not covered by the last).
	 if ($Expr[0] == '-' && $Expr[1] == '-') {

	    $flag = false;
	    }

	 //Check for more than 2 consecutive operators (of any kind) or any pair of consecutive operators for which the
	 // second operator is not "-". 
	 preg_match_all('/[-, \+, \/, *]+/', $Expr, $matches2);
	 foreach ($matches2[0] as $opers) {
	 	  
  	 	 if ((strlen($opers) > 2) || (strlen($opers) == 2 && $opers[1] != '-')) {
     		    
     		    $flag = false; 
     		 }
    	 }
	 
	 return $flag; 
}
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   
	   
	   $expr = $_POST["thisInput"]; 
	   if (validateExpression($expr)) {
	       
	      $p = eval('return '.$expr.';');
	      echo $_POST["thisInput"];
              echo "=";
	      echo $p;
	   } else {
	      echo "Invalid Expression!";
	   }
	 }
	 
?>
</body>

</html>