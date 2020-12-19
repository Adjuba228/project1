<?php session_start() ?>
<?php 
    $con = mysqli_connect('127.0.0.1', 'root','','project');
    mysqli_query($con,"DELETE FROM works WHERE id = {$_GET["id"]}");
    header("Location: accountStudent.php");
 ?>