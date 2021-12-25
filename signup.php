<?php
include_once("classes.php");
include_once("header.php")

?>
	
	<div class="title-div my-3 text-center"><h3>SIGNUP PAGE</h3></div>


      <div class="row">


          <div class="col-md-4 r10c" id="r10c1"></div>

          <div class="col-md-4 r10c" id="r10c2">
          <!-- PHP Signup for customers -->
            <?php  

            if (isset($_POST['cust_signup_btn']) && $_POST['cust_signup_btn'] == 'Sign Up') {

              // next we validate the fields, but first let's open an array to store all received feedback or errors

              $errors = array();

              if (empty($_POST['cust_firstname'])) {
                $errors[] = "Firstname is required!";
              }
              if (empty($_POST['cust_lastname'])) {
                $errors[] = "Lastname is required!";
              }
              if (empty($_POST['cust_phone'])) {
                $errors[] = "Phone Number is required!";
              }
              if (empty($_POST['cust_email'])) {
                $errors[] = "Email Address is required!";
              }
              if (empty($_POST['cust_password'])) {
                $errors[] = "Password is required!";
              }
              elseif (strlen(trim($_POST['cust_password'])) < 5) {
                $errors[] = "Password must be more than five characters!";
              }
              if (empty($_POST['cust_CFpassword'])) {
                $errors[] = "Password Confirmation field cannot be empty!";
              }
              if (($_POST['cust_password']) !== ($_POST['cust_CFpassword'])) {
                $errors[] = "Passwords do not match!";
              }
              if (empty($_POST['cust_gender'])) {
                $errors[] = "Gender is required!";
              }
              if (empty($_POST['cust_address'])) {
                $errors[] = "Address is required!";
              }
              if (empty($_POST['terms'])) {
                $errors[] = "You are yet to agree to our Terms!";
              }


              if(empty($errors)) {
                $objuser = new MyCustomers;

                // check if email address exists
                      if ($objuser->checkEmailAddress($_POST['cust_email']) == true) {
                        echo "<div class='alert alert-danger'>Email Address already taken!</div>";
                      }
                      else {
                        // register
                $new_User = $objuser->addCustomers($_POST['cust_firstname'], $_POST['cust_lastname'], $_POST['cust_phone'], $_POST['cust_email'], $_POST['cust_password'], $_POST['cust_gender'], $_POST['cust_address']);

                  // so create session variables
                
                  // $_SESSION['cust_firstname'] = $_POST['cust_firstname'];
                  // $_SESSION['cust_lastname'] = $_POST['cust_lastname'];
                  // $_SESSION['cust_phone'] = $_POST['cust_phone'];
                  // $_SESSION['cust_email'] = $_POST['cust_email'];
                  // $_SESSION['cust_username'] = $_POST['cust_username'];
                  // $_SESSION['cust_gender'] = $_POST['cust_gender'];
                  // $_SESSION['cust_address'] = $_POST['cust_address'];
                  // // to go a step further, add a special key to authenticate who is in session.
                  // $_SESSION['mem'] = "@@Exec_2090%";

                header("Location: customers_dashboard.php?msg=Successfuly logged in");
                exit;
                }
              }

              // next we alert the errors found

              if (!empty($errors)) {

                echo "<ul class='alert alert-danger'>";
                      foreach ($errors as $key => $value) {
                        echo "<li>$value</li>";
                          }
                        echo "</ul>";
              }

            }

            ?>

          <!-- Customers signup form -->
          <div id="div-NewUser" class="animate__animated animate__rotateIn">
            
              <form id="form-newUser" action="" method="post" class="form-group" name="NewUser-Form">
        
                <label>Firstname</label>
                <input type="text" name="cust_firstname" class="form-control">
                <label>Lastname</label>
                <input type="text" name="cust_lastname" class="form-control">
                <label>Phone Number</label>
                <input type="text" name="cust_phone" class="form-control">
                <label>Email Address</label>
                <input type="email" name="cust_email" class="form-control">
                <label>Password</label>
                <input type="password" name="cust_password" class="form-control">
                <label>Confirm Password</label>
                <input type="password" name="cust_CFpassword" class="form-control">
                <label>Select Gender</label>
                <input type="radio" name="cust_gender" value="male"> Male
                <input type="radio" name="cust_gender" value="female"> Female<br>
                <label>Mailing Address</label>
                <textarea id="cust_address" name="cust_address" class="form-control" rows="3"></textarea>
                <input type="checkbox" name="terms"> I agree to <a href="#" data-toggle="modal" data-target="#staticBackdrop">Terms & Conditions</a>
                <input type="submit" id="cust_signup_btn" class="btn btn-block btn-dark" name="cust_signup_btn" value="Sign Up">
              </form>
            </div>
        </div>
        
        <div class="col-md-4 r10c" id="r10c3"></div>

    </div>

<?php 
include_once("whatsapp.php");
include_once("footer.php")
?>          