<?php 
include("header.php");
$username = $user['username'];
$userCode = $user2['courseCode'];
$post = new Post($con, $username, $userCode);
$checkTeaching = $post->checkTeachingClass();
$checkEnrolled = $post->checkEnrolledClass();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link id = "mainStyle" class = "krishna" rel="stylesheet" type="text/css" href="asset\css\light.css"> -->
</head>

<body>


    <div class="bg">
        <div class="wrapper">
          

            <?php 
          if ($checkTeaching == true) {
               echo "<div class='teaching'>
             <h3><span class='header'>Teaching</span></h3>";
               $post->loadTeachingClasses();
               echo "</div>";
          }

          if ($checkEnrolled == true) {
               echo "<div class='enrolled'>
             <h3><span class='header'>Enrolled:</span></h3>";
               $post->loadEnrolledClasses();
               echo "</div>";
          }
          if (($checkEnrolled == false) && ($checkTeaching == false)) {
               echo "<div id='nullTeachingEnrolled'>
                         <p class='box-text'>It seems you haven't created or enrolled in any class yet!</p>
                         <p>Click the button below or <i class='fas fa-plus' style='padding:0.4rem; color:inherit'></i> above to start with your class</p>
                         
     <a href='createJoinClass.php'>
     <button class='null-button'>Create/Join</button></a>
                     </div>";
          }
          ?>





</body>

</html>