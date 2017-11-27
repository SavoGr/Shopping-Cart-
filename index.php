<?php 
require 'script.php';

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<style type="text/css">

</style>
	<title>Shopping Cart By Savo</title>

</head>
<body>
<div class="container">
	<?php 
if (mysqli_num_rows($result)>0)	 {
echo '<div class="row bg-danger">';
	while ($r = mysqli_fetch_array($result)) {
		
		
		
	}
	echo '</div></div>';


}

	 ?>	
  
  </div>


		

	



</body>
</html>