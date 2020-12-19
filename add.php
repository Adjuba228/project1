<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','project');
	$image_name = 'img/' . basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $image_name);
    $query = mysqli_query($con,"INSERT INTO works (file,desciption,student_id) VALUES ('{$image_name}','{$_POST["desciption"]}','{$_POST["id"]}') ");
	header("location:accountStudent.php");

 ?>
 