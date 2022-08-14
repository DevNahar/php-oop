<?php  include "../header&footer/header.php";?>

                        
<!--======== practice OOP class 7 =========-->

<h2 class="text-center">OOP Class 7</h2>

<?php
//Class Constants

class Userdata{
  public $user;
  public $userid;
  const USERNAME =" Ashekun Nahar";   //constant e consnant name ta capital e likhte hoi.
  //static poperty
  public static $age="30";

  // constant k access korar rules

  public function information(){
    echo "My name is" . Userdata::USERNAME ."<br>";
    //use of static poperty
    echo "My age is ". self::$age;
  }


}

$userdataObj= new Userdata(); 

$userdataObj->information();

?>
                      
                      
<?php  include "../header&footer/footer.php";?>                   
                      
                      
                      
                      