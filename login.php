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
    <title>LogIn</title>

    <!-- Bootstrap 5 CDN-Import: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Light-Theming: -->
    <link id="mainStyle" rel="stylesheet" href="asset/css/light.css">

    <!-- Dark-Theming: -->
    <!-- Uncomment the line below to use dark theming. Don't forget to comment the line above.-->
    <!-- <link rel="stylesheet" href="asset/css/style_dark.css"> -->
    <!-- this also works automatically by clicking the theme_button. -->
</head>



<body>

    <div class="page-content d-flex align-items-center">

        <div class="container d-flex justify-content-center">

            <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">

                <div class="auth-card">

                    <div class="logo-area">

                        <!-- Light-Theming Logo: -->
                        <!-- <img id="header_logo" class="logo" src="asset/img/logo.png" />

                        Dark-Theming: -->
                        <!-- <img class="logo" src="asset/img/logo_dark.png" /> -->
                      <img id="header_logo"   src="asset/img/light.png" class="logo"  alt="">
                    
                    </div>

                    <h5 class="auth-title">Join your class Anywhere Anytime</h5>

                   <hr class="separator">

                    <!-- Login-Form-->
                    
                        <form action="login.php" method="POST">

                        <div class="mb-2 mt-5">
                            
                            <input type="email" name="log_email"    class="form-control auth-input"  placeholder="Email address"
                             value="<?php 
                                                                            if (isset($_SESSION['log_email'])) {
                                                                                echo $_SESSION['log_email'];
                                                                            }
                                                                            ?>"
                                                                             required>
    
                          
                        </div>
                  


                        <div class="mb-3">
                        
                            <input type="password" name="log_password"class="form-control auth-input"   placeholder="Password">

</div>
<br>
                 
<?php if (in_array("Email or password was incorrect<br>", $error_array)) echo "<span style='color:red; font-size:0.78rem;'>Email or  password was incorrect<br><br></span>"; ?>
                        
                        <input type="submit" name="login_button" id="button" value="Login" class="btn auth-btn mt-2 mb-4">

                    </form>

          
                    <p class="text mb-4">Crate a new account? <a href="register.php" class="text-link">Sign up</a></p>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
