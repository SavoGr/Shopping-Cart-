<?php 
session_start();
$conn = mysqli_connect('localhost','root','','artical');
$q  = "SELECT * FROM `artical` ";
$result = mysqli_query($conn,$q);
//for adding items to shopping cart


if (isset($_POST['add'])) {
	if (isset($_SESSION['shopping_cart']))
	{$item_arr_id = array_column($_SESSION['shopping_cart'], 'id');
		if (!in_array($_GET['id'],$item_arr_id)) {
			$num = count($_SESSION['shopping_cart']);
			$array_of_items = array(
			'id' => $_GET['id'],
			'name' => $_POST['hidden_name'],
			'price' =>$_POST['hidden_price'] ,
			'quantity' =>$_POST['quantity'] ,
		 );
			$_SESSION['shopping_cart'][$num] = $array_of_items;
		}
		else{
			echo '<script type="text/javascript">alert("Item is already Added")</script>';
			echo '<script type="text/javascript"> window.location = "index.php"</script>';
		}
		
	}
	else{
		$array_of_items = array(
			'id' => $_GET['id'],
			'name' => $_POST['hidden_name'],
			'price' =>$_POST['hidden_price'] ,
			'quantity' =>$_POST['quantity'] ,
		 );
		$_SESSION['shopping_cart'][0] = $array_of_items;
		
	}
}

?>