<html> 
 <head> 
  <title>Tip Calculator</title>
  <link rel="stylesheet" href="styles.css">
 </head>
 
 <body>

 <form action = "calculator.php" method = "post">
 <?php 
  
  $subtotal = $_POST['subtotal'] ;
  $calc = $_POST['calc'];
?>
<h1>Tip Calculator </h1>
 Bill subtotal: $<input type = "number" name = "subtotal" size = "10" value = "<?php echo ("$subtotal");?>">
  
  <br>
  Tip percentage: <br>
  <input type = "radio" name = "calc" value = "ten" <?php if ("ten" == $calc) {echo "checked";}?>> 10%
  <input type = "radio" name = "calc" value = "fifteen" <?php if ("fifteen" == $calc) {echo "checked";}?>> 15%
  <input type = "radio" name = "calc" value = "twenty" <?php if ("twenty" == $calc) {echo "checked";}?>> 20% 
  <hr>
  <input type = "submit" value = "Submit"> 
  </form>
 <h3>

  
  <?php
	if( $calc != null )
	{
		switch( $calc )
          {
              case "ten" : 
				$tip = ( $subtotal * 0.10 );
			  break;
              
			  case "fifteen" :
				$tip = ( $subtotal * 0.15 );
			  break;
              
			  case "twenty" :
				$tip = ( $subtotal * 0.20 );
			  break;
              
          }      
		
		$total = $subtotal + $tip;
        echo "The tip is: ", "$tip","<br>", "The total is: ", $total;
		
    } 
 ?>
<h3>
 </body>
</html>