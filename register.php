<?php 
require 'config/config.php';

require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    <!-- Bootstrap 5 CDN-Import: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Light-Theming: -->
    <link id="mainStyle" rel="stylesheet" href="asset/css/light.css">

  
</head>
<body>

    <div class="page-content d-flex align-items-center">

        <div class="container d-flex justify-content-center">

            <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">

                <div class="auth-card">

                    <div class="logo-area">

                        <!-- Light-Theming Logo: -->
                        <!-- <img id="header_logo" class="logo" src="/asset/img/light" /> -->

                        <!-- Dark-Theming: -->
                        <!-- <img class="logo" src="asset/img/logo_dark.png" /> -->
                        <img id="header_logo"   src="asset/img/light.png" class="logo"  alt="">
                    

                    </div>

                    <h5 class="auth-title">Join your Class anywhere anytime</h5>

                
                    <hr class="separator">

                    <!-- Signup-Form -->
                    <form action="register.php" method="POST"  >

                        <div class="mb-2 ">
                            
                        
                            <input type="text" class ="form-control auth-input" name="reg_fname" placeholder="First name"
                             
                             value="<?php 
                            if (isset($_SESSION['reg_fname'])) {
                                echo $_SESSION['reg_fname'];
                            } ?>"


                             required>



                        </div>

                        <div class="mb-2 ">
                        
                            <input type="text" class="form-control auth-input"        name="reg_lname" placeholder="Last name" value="<?php 
                                                                        if (isset($_SESSION['reg_lname'])) {
                                                                            echo $_SESSION['reg_lname'];
                                                                        } ?>" required>


                        
                        </div>

                        <div class="mb-2">
                       
                            

<input type="email" name="reg_email" class="form-control auth-input"        placeholder="Email" value="
<?php 
if (isset($_SESSION['reg_email'])) {
    echo $_SESSION['reg_email'];
} ?>" required>
                        
                        </div>
                        <div class="mb-2 ">
                  
                    
                            <input type="email" name="reg_email2" class="form-control auth-input"    placeholder="Confirm email" value="<?php 
                            if (isset($_SESSION['reg_email2'])) {
                                echo $_SESSION['reg_email2'];
                            } ?>" required>
 

<?php if (in_array("Email already in use<br>", $error_array)) echo "<span style = 'color: #14C800;'> Email already in use</span> <br>";
else if (in_array("Invalid email format<br>", $error_array)) echo "<span style = 'color: #14C800;'> Invalid email format </span> <br>";
else if (in_array("Email do not match<br>", $error_array)) echo "<span style = 'color: #14C800;'> Email don't match </span> <br>" ; ?>
 </div>


                           <div class="mb-2">
                            <input type="password" class="form-control auth-input"  name="reg_password" placeholder="Password" required>
                           
                           </div>

                        <div class="mb-3">


                            
              <input type="password" name="reg_password2" class="form-control auth-input"     placeholder="Confirm password" required>  </div>
                          


                        </div>

                        <?php if (in_array("Your password do not match<br>", $error_array)) echo "<span style = 'color: #14C800;'> You're Password don't match</span> <br>"; ?>

                        <?php if (in_array(" You're all set! Goahead and login!  <br>"  , $error_array)) echo "<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>"; ?>

                        <input type="submit" name="register_button" id="button" value="Register" class="btn auth-btn mt-2 mb-4">
    <br>
    <br>
                    

                    

</form>

                    <p class="text mb-4">Allredy have Account? <a   href="login.php" class="text-link">Sign in</a></p>

                </div>
            </div>
        </div>
    </div>


    <button id="theme_button" class="btn btn-theme" onclick="onThemeChange()">
        <i id="theme_icon" class="fas fa-moon"></i>
    </button>


    <script src="dark.js"></script>


    <!-- Bootstrap 5 JS-Bundle CDN import: -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
