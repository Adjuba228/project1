<?php 
	session_start();
 ?>
<?php 


	$image="img/";
	$image_name = $image_dir . basename($_FILES['img']['name']);
	$upload = move_uploaded_file($_FILES['img']['tmp_name'], $image_name);
	$con = mysqli_connect('127.0.0.1', 'root', '', '40urok');
	if($upload==false){
		echo "Не работает";
	}else{
		$query = mysqli_query($con,"UPDATE users SET avatar='{$image_name}' WHERE id='{$_SESSION["id"]}' ");
	}
	header("location:account.php");
 ?>
