<?php  include "header.php";?>

                        
<!--======== 2nd class code =========-->

<h2 class="text-center">OOP 2nd Class</h2>
<form action="controller.php" method="post" class="mt-5 mb-5">
  <table class="m-auto ">
    <tr>
      <td>Enter First Number : </td>
      <td><input type="number" name="num1"></td>
    </tr>
    <tr>
      <td>Enter Second Number : </td>
      <td><input type="number" name="num2"></td>
    </tr>
    <tr>
      <td>
          <?php 
        if(isset($_SESSION['message'])){
          ?>
          <span class="text-danger"><?php echo $_SESSION['message'] ;?> </span> 
        <?php 
        } unset($_SESSION['message']) ; 
        ?>
        </td>
      </tr>
    <tr>
      <td></td>
      <td><button Class="btn btn-primary mt-2" type="submit" name="numSubmit">Submit</button></td>
    </tr>
  </table>
 
  <?php if(isset($_GET['num1'],$_GET['num2'])){
        $numone=$_GET['num1'];
        $numtwo=$_GET['num2']; 
        
        echo " <b> First Number  :</b> ". " ".$numone ."<br>";
        echo "<b>Second Number : </b>". " ".$numtwo ."<br>";
      }
        if(isset($_SESSION['summation'])){
          ?>
          <span ><?php echo $_SESSION['summation'] ;?> </span> 
        <?php 
        } unset($_SESSION['summation']) ; 
        ?>

        <?php 
        if(isset($_SESSION['subtraction'])){
          ?>
          <span ><?php echo $_SESSION['subtraction'] ;?> </span> 
        <?php 
        } unset($_SESSION['subtraction']) ; 
        ?>
        <?php 
        if(isset($_SESSION['multiplication'])){
          ?>
          <span ><?php echo $_SESSION['multiplication'] ;?> </span> 
        <?php 
        } unset($_SESSION['multiplication']) ; 
        ?>

<?php 
        if(isset($_SESSION['division'])){
          ?>
          <span ><?php echo $_SESSION['division'] ;?> </span> 
        <?php 
        } unset($_SESSION['division']) ; 
        ?>
        
 
</form>






                      
                      
<?php  include "footer.php";?>                   
                      
                      
                      
                      