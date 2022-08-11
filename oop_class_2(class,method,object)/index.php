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
        if(isset($_SESSION['$message'])){
          ?>
          <span class="text-danger"><?php echo $_SESSION['$message'] ;?> </span> 
        <?php 
        } unset($_SESSION['$message']) ; 
        ?>
        </td>
      </tr>
    <tr>
      <td></td>
      <td><button Class="btn btn-primary mt-2" type="submit" name="numSubmit">Submit</button></td>
    </tr>
  </table>
 
</form>






                      
                      
<?php  include "footer.php";?>                   
                      
                      
                      
                      