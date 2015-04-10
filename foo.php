<?php
?>
   <fom method="GET" action="*?foo=bar">
   	<input type="Submit" name="button" value="<?php echo 'Click Here'; ?>">
   	
   	<button> <A href="?foo=bar"><?php echo 'Click Here'; ?></A> </button>
   </fom>

<?php
	
		var_dump( $foo);
	
