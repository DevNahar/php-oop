<?php
session_start();

class Calculate {
    function add($firstNum, $secondNum){
       $summation=  "Summation :". " "  .($firstNum + $secondNum) ."<br>";
       return $_SESSION['summation']= "$summation";
    }
    function sub($firstNum, $secondNum){
        $subtraction=  "Subtraction :". " "  .$firstNum - $secondNum ."<br>";
        return $_SESSION['subtraction']= "$subtraction";
     }
     function multi($firstNum, $secondNum){
        $multiplication=  "Multiplication :". " "  .$firstNum * $secondNum ."<br>";
        return $_SESSION['multiplication']= "$multiplication";
     }
     function divi($firstNum, $secondNum){
        $division=  $firstNum / $secondNum;
        $division= round($division,2) ;
        $division="Division :". " ".$division;
        return $_SESSION['division']= "$division";
     }
}


if(isset($_POST['numSubmit'])){
    $numone= $_POST['num1'];
    $numtwo= $_POST['num2'];

    if(empty($numone) || empty($numtwo)){
        $_SESSION['message']= "All fields are requirded";
        header("location: index.php");
        
    }else{
    
    $objCal= new Calculate;
    $objCal->add($numone, $numtwo);
    $objCal->sub($numone, $numtwo);
    $objCal->multi($numone, $numtwo);
    $objCal->divi($numone, $numtwo);

    header("location: index.php?num1=$numone & num2=$numtwo");
}
}


?>