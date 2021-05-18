<?php
$login = false;
  $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $teamname = $_POST["teamname"];
    $password = $_POST["password"];


     $sql = "Select * from portal where teamname='$teamname' AND
     password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
if ($num == 1){
      // while($row=mysqli_fetch_assoc($result)){
     // if (password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['teamname'] = $teamname;
              // $_SESSION['password'] = $password;
                header("location: team1.php");
            }
            else{
                          $showError = "Invalid Credentials";
                      }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style>
body {
    background: #242582;
    font-family: 'Poppins';
}
.forgot {
	font-family: Poppins;
	font-weight: 400;
}

.logo {
  text-align: center;
}
.logo {
  margin-top: 5%;
  width: 150px;
  height: 150px;
  margin-bottom: 3rem;
}

.login-box {
	border-radius: 30px;
    margin-top: 3.2%;
    height: auto;
    margin-bottom: 5%;
    background: white;
    text-align: center;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.76), 0 3px 6px rgba(0, 0, 0, 0.93);
}

.login-key {
    height: 100px;
    font-size: 80px;
    line-height: 100px;
}

.login-title {
    margin-top: 75px;
    text-align: center;
    font-size: 30px;
    letter-spacing: 2px;
    font-weight: bold;
    color: black;
}

.login-form {
    margin-top: 25px;
    text-align: left;
}

input[type=username] {
    /* background-color: #1A2226; */
    border: none;
    border-bottom: 2px solid #be39f7;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    color: black;
}

input[type=password] {
    /* background-color: #1A2226; */
    border: none;
    border-bottom: 2px solid #be39f7;
    border-top: 0px;
    border-radius: 0px;
    font-weight: bold;
    outline: 0;
    padding-left: 0px;
    margin-bottom: 20px;
    color: black;
}

.form-group {
    margin-bottom: 40px;
    outline: 0px;
}

.form-control:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 2px solid #be39f7;
    outline: 0;
    /* background-color: #1A2226; */
    color: black;
}

input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

label {
    margin-bottom: 0px;
}

.form-control-label {
    font-size: 10px;
    color: #6C6C6C;
    font-weight: bold;
    letter-spacing: 1px;
}

.btn-outline-primary {
    border-color: #be39f7;
	border-width: 2px;
    color: black;
    border-radius: 0px;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.btn-outline-primary:hover {
    background-color: #be39f7;
	border-width: 2px;
    right: 0px;
}


.login-button {
	left: 23%;
    padding-right: 0px;
    text-align: center;
    margin-bottom: 25px;
}

.login-text {
    text-align: center;
    padding-left: 0px;
    color: black;
}

.loginbttm {
    padding: 0px;
}
</style>

    <title>Login</title>
  </head>
  <body>

    <?php
      if($login){
      echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> You are logged in
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
      if($showError){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '. $showError. '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div> ';
      }
      ?>

   <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <img src="../../assets/wiehacklogo3.1.png" class = "logo">
                </div>
                <div class="col-lg-12 login-title">
                    WIEHACK3.0
                </div>
                <form action="team.php" method="post">
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">TEAMNAME</label>
                                <input type="username" class="form-control" id="teamname" name="teamname" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control"  id="password" name="password">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               <a class = "forgot" href="#" data-toggle="modal" data-target="#staticBackdrop">Forgot Password?</a>
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
            </div>
        </div>



       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     </body>
   </html>
