<?php  include "../header&footer/header.php";?>

                        
<!--======== 3rd class code =========-->

<h2 class="text-center">OOP Third Class</h2>

<?php
//__constructor

class Person{
  public $name;
  public $age;

  public function __construct($pName,$pAge){
    $this->name=$pName;
    $this->age=$pAge;
  }

  public function personDetails(){
    echo "Person name is {$this->name} and person age {$this->age}";
  }
}

$personObj= new person("Ashekun Nahar","30");
$personObj->personDetails();
?>
                      
                      
<?php  include "../header&footer/footer.php";?>                   
                      
                      
                      
                      