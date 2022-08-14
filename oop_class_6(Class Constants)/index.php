<?php  include "../header&footer/header.php";?>

                        
<!--======== practice OOP class 6 =========-->

<h2 class="text-center">OOP Class 6</h2>

<?php
//Class Constants

class Userdata{
  public $user;
  public $userid;
  const USERNAME =" Ashekun Nahar";   //constant e consnant name ta capital e likhte hoi.

  // constant k access korar rules

  public function information(){
    echo "My name is" . Userdata::USERNAME;
  }


}

$userdataObj= new Userdata(); 

$userdataObj->information();

?>
                      
                      
<?php  include "../header&footer/footer.php";?>                   
                      
                      
                      
                      