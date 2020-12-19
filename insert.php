<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','project');
	 $query = mysqli_query($con,"SELECT * FROM students WHERE id =  {$_SESSION['student_id']}");
    $query = mysqli_query($con,"INSERT INTO applications (student_id,university_id) VALUES ('{$_GET["stud_id"]}','{$_GET["univ_id"]}') ");
    header("location:index.php");
 ?>