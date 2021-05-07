<!DOCTYPE html>
<?php

include("dbconnect.php");
if(isset($_POST['submit']))
{
$email = $_POST['email'];
$teamname = $_POST['teamname'];
 $ins = "INSERT INTO pass (email, teamname) VALUES ('$email', '$teamname')";
 $result = mysqli_query($conn, $ins);
 if ($result) {
   echo "<script>alert('Thanks, Your request for new password is submitted successfully. Your new password will be provided in 1-2 days through Mail.')</script>";
echo "<script>window.open('team.php','_self')</script>";
} else {
  echo mysqli_error();
} }
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
    <div class="container my-4">
     <h1 class="text-center">Login to our website</h1>
     <form action="team.php" method="post">
        <div class="form-group">
            <label for="username">Teamname</label>
            <input type="text" class="form-control" id="teamname" name="teamname" aria-describedby="emailHelp" >

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    <br>
      <a href="edit_password.php" data-toggle="modal" data-target="#staticBackdrop">Forgot Password?</a>

    </div>
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-size">
       <div class="modal-content">
         <div class="modal-header">
           <img src="../../assets/wiehacklogo3.png" class="wiehack-logo"  width="40px" height="40px">
           <h4 class="modal-title" id="staticBackdropLabel" style="padding-left: 20px;">WIEHACK</h4>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>
         <div class="modal-body">
             <!------------>
             <div class="signup-form">
                 <form action="edit_password.php" method="post">
                 <h4>Request to Change Password</h4><hr class="hr1">

                     <div class="form-group">
                       <input type="text" class="form-control input-lg" name="teamname" placeholder="teamname" required="required">
                     </div>
                 <div class="form-group">
                       <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
                     </div>
                 <div class="form-group">
                        <input class="login-btn" style = "color: black;" type="submit" name="submit" value="Submit">
                     </div>
                 </form>
             </div>
             <!------------------->
     </div>
    </div>


       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     </body>
    </html>
