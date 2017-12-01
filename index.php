<?php 
require 'script.php';

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
	<title>Shopping Cart By Savo</title>

</head>
<body>


<div class="container">
<h1 class="display-3 bd-info text-success" ><span class="display-1 text-info">VoSa</span> Shopping Cart</h1>
<br>
<br>
<div class="row ">


<?php
 if(mysqli_num_rows($result)>0){
	while ($r=mysqli_fetch_array($result)) {
	
 ?>
 
	<div class="col-3 ">
		<form method="post" action="index.php?action=add&id= <?php echo $r['id']; ?>">
			
			<img src="<?php echo 'img/'.$r['image']; ?>" class="img-thumbnail img-fluid">
			<h2 class="text-success"><?php echo  $r['name']; ?></h2>
			<h2 class="text-danger"><?php echo $r['price'].'$'; ?></h2>
			<input type="text" name="quantity" class="form-control" value="0">
			<input type="hidden" name="hidden_name" value="<?php $r['name'] ?>">
			<input type="hidden" name="hidden_price" value="<?php $r['price'] ?>">
			<input type="submit" name="add" class="btn btn-danger" value="Add to Cart" >
		</form>
	</div>

<?php }
} ?>
</div>
<!--     Ucitavanje katrica
 -->
<br>
<br>
<div class="table-responsive">
 	<table class="table">
 		<tr>
 			<th>Name of item</th>
 			<th>Quantity</th>
 			<th>Price</th>
 			<th>Total</th>
 			<th>Action</th>
 		</tr>
 	
 	</table>
 </div>
</div>


 
		

	



</body>
</html>