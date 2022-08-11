<?php
session_start();
if(isset($_POST['numSubmit'])){
    $numone= $_POST['num1'];
    $numtwo= $_POST['num2'];

    if(empty($numone) || empty($numtwo)){
        $_SESSION['$message']= "all fields are requirded";
        
    }
}
header("location: index.php");



?>