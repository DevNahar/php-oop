<?php  include "../header&footer/header.php";?>

                        
<!--======== 4 class code =========-->

<h2 class="text-center">OOP 4 Class</h2>

<?php
//__destructor

class Person{
  public $name;
  public $age;
  public $id;

  public function __construct($pName,$pAge){
    $this->name=$pName;
    $this->age=$pAge;
  }

  public function setId($id){
    $this->id=$id;
  }
  public function __destruct(){
    if(!empty($this->id)){
      echo "saving person";
    }
  }
}

$personObj= new person("Ashekun Nahar","30");
$personObj->setId(7);
unset($personObj);
?>
                      
                      
<?php  include "../header&footer/footer.php";?>                   
                      
                      
                      
                      