<?php  include "../header&footer/header.php";?>

                        
<!--======== 1st class code =========-->

<h2 class="text-center">OOP First Class</h2>

<?php

class Person{
    public $name = "Ashekun nahar";  //dui babe kora jai
    // public $name ;     //dui babe kora jai
    public $age;

    function personName(){
      echo "Person name is : ". $this->name ;
    }

    function personAge($value){
      return "Person age is : " . $this->age = $value; // $value k $age poperty e re-assign kora hoese
      
    }
  }
  
// object create
$personObj = new Person;
//poperty show
echo $personObj->name ;   //dui babe kora jai
// echo $personObj->name = "Ashekun Nahar";  //ababe o assign kora jai
echo "<br>";
//method show
$personObj->personName() ; //method e echo korle ekhane echo kora lagbe na
echo "<br>";
echo $personObj->personAge(18) ; // ebabe argument pathano jai


?>
                      
                      
<?php  include "../header&footer/footer.php";?>                   
                      
                      
                      
                      