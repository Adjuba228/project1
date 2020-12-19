<?php session_start() ?>
<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','project');
    $query = mysqli_query($con,"SELECT * FROM students WHERE phone ='{$_POST["phone"]}' AND password ='{$_POST["password"]}'");
    $result = $query->fetch_assoc();
   	$num_rows =  mysqli_num_rows($query);
   	$_SESSION['student_id']=$result['id'];

    if($num_rows>0){
    	header('Location: accountStudent.php');
    }else{
    	header("Location:loginStudent.php?nothing=Такого пользователя нет!");
    }

 ?>
