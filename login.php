
<?php
include_once("classes.php");
include_once("header.php")

?>
  
  <div class="title-div my-3 text-center"><h3>LOGIN PAGE</h3></div>


      <div class="row">


          <div class="col-md-4 r10c" id="r10c1"></div>

          <div class="col-md-4 r10c" id="r10c2">
              <!-- PHP Login for customers -->
                <?php  

                    if (isset($_POST['cust_signin_btn']) && $_POST['cust_signin_btn']== 'Sign In') {

                      $formerrors = array();

                      if (empty($_POST['cust_email'])) {
                        $formerrors[] = "Email field is required";
                      }

                      if (empty($_POST['cust_password'])) {
                        $formerrors[]= "Password field is required";
                      }

                      if (!empty($formerrors)) {
                        echo "<ul class='alert alert-danger mt-2'>";
                        foreach ($formerrors as $key => $value) {
                          echo "<li>$value</li>";
                        }
                        echo "</ul>";
                      }
                      elseif (empty($formerrors)) {
                        $objlogin = new MyCustomers;
                        $_POST['cust_password'] = md5($_POST['cust_password']);

                        $output = $objlogin->login($_POST['cust_email'], $_POST['cust_password']); 
                        if (!$output) {
                          echo "<p class='alert alert-danger'>Invalid Login credentials</p>";
                        }
                        else {
                          // so create session variables
                        // $_SESSION['cust_email'] = $_POST['cust_email'];

                        // // to go a step further, add a special key to authenticate who is in session.
                        // $_SESSION['mem'] = "@@Exec_2090%";
                          header("Location: customers_dashboard.php");
                          exit;
                          
                        }
                      }

                    }

                ?>
              <!-- Customers login form -->
            <div id="div-ExtUser" class="animate__animated animate__bounceInDown">
              

              <form name="form-ExtUser" action="" method="post" class="form-group">
                <label>Email Address</label>
                <input type="email" name="cust_email" class="form-control">
                <label>Password</label>
                <input type="password" name="cust_password" class="form-control"><br>
                <input type="submit" name="cust_signin_btn" class="btn btn-block btn-dark" value="Sign In">
              </form>
            </div>
          </div>
        
        <div class="col-md-4 r10c" id="r10c3"></div>

    </div>

<?php 
include_once("whatsapp.php");
include_once("footer.php")
?>