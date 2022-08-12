<?php  include "../header&footer/header.php";?>

                        
<!--======== 5 class code =========-->

<h2 class="text-center">OOP 5 Class</h2>

<?php
//__constructor && __destructor

class Userdata{
  public $user;
  public $userid;
  

  public function __construct($uName,$uId){   //object er value gulu constructor method e parametre hisebe accept kore property er modde assign kore
    $this->user=$uName;
    $this->userid=$uId;
    echo "Name: {$this->user}Id: {$this->userid}";
  }

  
  public function __destruct(){
    unset($this->user);
    unset($this->user);
  }
}

$userdataObj= new Userdata("Ashekun Nahar","30"); //constructor method value gulu oi class er object er pashe dea jai

?>
                      
                      
<?php  include "../header&footer/footer.php";?>                   
                      
                      
                      
                      