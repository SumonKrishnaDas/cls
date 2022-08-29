<?php 
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
include("includes/classes/User.php");
include("includes/classes/User2.php");
include("includes/classes/Post.php");

   if(isset($_SESSION['username'])){
		 $userLoggedIn  = $_SESSION['username'];
		 $userLoggedIn2  = $_SESSION['username'];
		 $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
		 $user_details_query2 = mysqli_query($con, "SELECT * FROM createclass WHERE username = '$userLoggedIn2' ORDER BY id DESC");
		 $user = mysqli_fetch_array($user_details_query);
		 $user2 = mysqli_fetch_array($user_details_query2);
   }
   else{
   	header("Location:register.php");
   }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EC</title>

    <!-- Bootstrap 5 CDN-Import: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Light-Theming: -->
    <link id="mainStyle" rel="stylesheet" href="asset/css/light.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets\js\createJoinClass.js"></script>
    <script src="assets/js/demo.js"></script>
    <script src="assets/js/jquery.jcrop.js"></script>
    <script src="assets/js/jcrop_bits.js"></script>

    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="assets\css\styling.css"> -->
    <link rel="shortcut icon" type="image/png" href="assets/images/background/graduation.png">
    <link rel="stylesheet" href="assets/css/jquery.Jcrop.css">
</head>


<body>


    <nav class="navbar  navbar-expand-lg  navbar-dark bg-success p-3">




        <div class="container-fluid">


            <a href="index.php" class=" text-white nav-link mx-2 active "><i class="fa fa-chalkboard"></i>
                EClassroom</a>



            <div class="collapse  navbar-collapse">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link mx-2 active"> <i class="fas fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="createJoinClass.php" class="nav-link mx-2 active "><i class="fas fa-plus"></i>
                            <span class=>Create or Join Class</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo $userLoggedIn; ?> " class="nav-link mx-2 active ">
                            <?php echo $user['first_name'] ?>
                            <span>Profile</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="includes/handlers/logout.php" class="nav-link mx-2 active ">
                            <i class="fas fa-power-off"></i>
                            <span class=>Logout</span>
                        </a>
                    </li>

                    <li class="nav-item">

                        <button id="theme_button" class="btn btn-theme" onclick="onThemeChange()">
                            <i id="theme_icon" class="fas fa-moon"></i>

                    </li>

                </ul>

            </div>

        </div>

    </nav>
 <script src="dark.js"></script>
    
</body>

</html>