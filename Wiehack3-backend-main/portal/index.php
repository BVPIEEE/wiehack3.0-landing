
<!DOCTYPE html>

<html>

<style>

body{
    margin:0px;
    padding:0px;
}

</style>


<head>
 <script  type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/register.css">


<title>Registration</title>
<meta name="keywords"
    content="Hackathon, wiehack, Hacakthon Delhi, BVPIEEE, Bharati Vidyapeeth College of Engineering, IPU, Coding" />

  <meta name="title" content="WieHack3.0" />
<link rel="icon" href="../../assets/wiehacklogo2.png" />
</head>
<body>

    <nav class="navbar-default">
      <img src="../../assets/wiehacklogo3.png" class="wiehack-logo">
      <img src="../../assets/bvpieeelogo.png" class="bvpieee-logo">
      <ul class="nav-links">
        <li><a href="../../index.html" class="login-btn">Home</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

<div class="container-fluid my-4">
<form action="index.php" method="post" enctype="multipart/form-data" style="margin-left: 20%">

<div class="mb-3">
      <label for="TextInput" class="form-label">Team Name <span style="color: red">*</span> </label>
      <input type="text" id="teamname" name="teamname" class="form-control" style="width: 70%" placeholder=" Team Name" required>
    </div>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Password <span style="color: red">*</span></label>
          <input type="text" id="password" name="password" class="form-control" style="width: 70%"  placeholder ="Password" required>
        </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name(Team Head) <span style="color: red">*</span></label>
      <input type="text" id="teamhead" name="teamhead" class="form-control" style="width: 70%"   placeholder="Team Head " required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id <span style="color: red">*</span></label>
      <input type="email" id="email" name="email" class="form-control" style="width: 70%"  placeholder ="E-mail" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number <span style="color: red">*</span></label>
      <input type="number" id="contact" name="contact" class="form-control" style="width: 70%"  placeholder ="Contact" required>
    </div>

    <label for="Select" class="form-label"> Gender <span style="color: red">*</span></label>
          <select id="choice2" name="choice2" class="form-select" style="width: 25%" required>
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select> <br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College <span style="color: red">*</span></label>
          <input type="text" id="college" name="college" class="form-control" style="width: 70%" placeholder="College" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch <span style="color: red">*</span></label>
      <input type="text" id="branch" name="branch" class="form-control" style="width: 70%" placeholder="Branch" required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link <span style="color: red">*</span></label>
      <input type="text" id="github" name="github" class="form-control" style="width: 70%" placeholder="Github Profile" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link <span style="color: red">*</span></label>
      <input type="text" id="linkedin" name="linkedin" class="form-control" style="width: 70%" placeholder="LinkedIn Profile" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(If Any)</label>
      <input type="text" id="portfolio" name="portfolio" class="form-control" style="width: 70%" placeholder="Portfolio Link">
    </div>

<label for="Select" class="form-label"> Team members(including head of team) <span style="color: red">*</span></label>
      <select id="choice" name="choice" style="width: 25%" class="form-select" required>
        <option> select</option>
        <option> 2</option>
        <option> 3</option>
        <option> 4</option>
      </select>
<br>


<br><br><br>
<h3>2nd Member</h3>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name </label>
      <input type="text" id="name2" name="name2" class="form-control" style="width: 70%" placeholder=" Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id</label>
      <input type="email" id="email2" name="email2" class="form-control" style="width: 70%" placeholder="E-mail">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number</label>
      <input type="number" id="contact2" name="contact2" class="form-control" style="width: 70%" placeholder=" Contact Number">
    </div>

    <label for="Select" class="form-label"> Gender</label>
          <select id="choice3" name="choice3" style="width: 25%" class="form-select">
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select> <br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label>
          <input type="text" id="college1" name="college1" class="form-control" style="width: 70%" placeholder="College Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch1" name="branch1" class="form-control" style="width: 70%" placeholder=" Branch Name">
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link</label>
      <input type="text" id="github2" name="github2" class="form-control" style="width: 70%" placeholder="Github Profile">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link</label>
      <input type="text" id="linkedin2" name="linkedin2" class="form-control" style="width: 70%" placeholder="Linkedin Profile">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(If Any)</label>
      <input type="text" id="portfolio2" name="portfolio2" class="form-control" style="width: 70%" placeholder="Portfolio Link">
    </div>


    <br><br><br>
    <h3>3rd Member</h3>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name </label>
      <input type="text" id="name2" name="name2" class="form-control" style="width: 70%" placeholder=" Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id</label>
      <input type="email" id="email2" name="email2" class="form-control" style="width: 70%" placeholder="E-mail">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number</label>
      <input type="number" id="contact2" name="contact2" class="form-control" style="width: 70%" placeholder=" Contact Number">
    </div>

    <label for="Select" class="form-label"> Gender</label>
          <select id="choice3" name="choice3" style="width: 25%" class="form-select">
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select> <br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label>
          <input type="text" id="college1" name="college1" class="form-control" style="width: 70%" placeholder="College Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch1" name="branch1" class="form-control" style="width: 70%" placeholder=" Branch Name">
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link</label>
      <input type="text" id="github2" name="github2" class="form-control" style="width: 70%" placeholder="Github Profile">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link</label>
      <input type="text" id="linkedin2" name="linkedin2" class="form-control" style="width: 70%" placeholder="Linkedin Profile">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(If Any)</label>
      <input type="text" id="portfolio2" name="portfolio2" class="form-control" style="width: 70%" placeholder="Portfolio Link">
    </div>



  <br><br><br>
  <h3>4th Member</h3>
  <div class="mb-3">
      <label for="TextInput" class="form-label"> Name </label>
      <input type="text" id="name2" name="name2" class="form-control" style="width: 70%" placeholder=" Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id</label>
      <input type="email" id="email2" name="email2" class="form-control" style="width: 70%" placeholder="E-mail">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number</label>
      <input type="number" id="contact2" name="contact2" class="form-control" style="width: 70%" placeholder=" Contact Number">
    </div>

    <label for="Select" class="form-label"> Gender</label>
          <select id="choice3" name="choice3" style="width: 25%" class="form-select">
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select> <br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label>
          <input type="text" id="college1" name="college1" class="form-control" style="width: 70%" placeholder="College Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch1" name="branch1" class="form-control" style="width: 70%" placeholder=" Branch Name">
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link</label>
      <input type="text" id="github2" name="github2" class="form-control" style="width: 70%" placeholder="Github Profile">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link</label>
      <input type="text" id="linkedin2" name="linkedin2" class="form-control" style="width: 70%" placeholder="Linkedin Profile">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(If Any)</label>
      <input type="text" id="portfolio2" name="portfolio2" class="form-control" style="width: 70%" placeholder="Portfolio Link">
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label"> Abstract(500 words limit)</label>
      <input type="text" id="uploadfile" name="uploadfile" class="form-control" style="width: 70%; height: 200px;" placeholder="">
    </div>
<br>
<br>

<input class="login-btn" style = "color: white;" type="submit" name="submit" value="Submit">
</form>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="/js/nav.js"></script>


</body>
</html>
<?php
$showerror = false;
include("dbconnect.php");
if(isset($_POST['submit']))
{
  $teamname = $_POST["teamname"];
  $password = $_POST["password"];
  $teamhead = $_POST["teamhead"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];

  $choice2 = $_POST["choice2"];
  $college = $_POST["college"];
  $branch = $_POST["branch"];
  $github = $_POST["github"];
  $linkedin = $_POST["linkedin"];
  $portfolio = $_POST["portfolio"];

  $choice = $_POST["choice"];

  $name2 = $_POST["name2"];
  $email2 = $_POST["email2"];
  $contact2 = $_POST["contact2"];
  $choice3 = $_POST["choice3"];
  $college1 = $_POST["college1"];
  $branch1 = $_POST["branch1"];
  $github2 = $_POST["github2"];
  $linkedin2 = $_POST["linkedin2"];
  $portfolio2 = $_POST["portfolio2"];

  $name3 = $_POST["name3"];
  $email3 = $_POST["email3"];
  $contact3 = $_POST["contact3"];
  $choice4 = $_POST["choice4"];
  $college2 = $_POST["college2"];
  $branch2 = $_POST["branch2"];
  $github3 = $_POST["github3"];
  $linkedin3 = $_POST["linkedin3"];
  $portfolio3 = $_POST["portfolio3"];

  $name4 = $_POST["name4"];
  $email4 = $_POST["email4"];
  $contact4 = $_POST["contact4"];
  $choice5 = $_POST["choice5"];
  $college3 = $_POST["college3"];
  $branch3 = $_POST["branch3"];
  $github4 = $_POST["github4"];
  $linkedin4 = $_POST["linkedin4"];
  $portfolio4 = $_POST["portfolio4"];
  $uploadfile = $_POST["uploadfile"];


    $ins=mysqli_query($conn, "INSERT INTO portal(teamname, password, teamhead, email, contact, choice2, college, branch, github, linkedin, portfolio, choice, name2, email2, contact2, choice3, college1, branch1, github2, linkedin2, portfolio2, name3, email3, contact3, choice4, college2, branch2, github3, linkedin3, portfolio3, name4, email4, contact4, choice5, college3, branch3, github4, linkedin4, portfolio4,uploadfile) VALUES('$teamname', '$password', '$teamhead',  '$email', '$contact', '$choice2', '$college', '$branch', '$github', '$linkedin', '$portfolio', '$choice', '$name2', '$email2', '$contact2', '$choice3', '$college1', '$branch1', '$github2', '$linkedin2', '$portfolio2', '$name3', '$email3', '$contact3', '$choice4', '$college2', '$branch2', '$github3', '$linkedin3', '$portfolio3', '$name4', '$email4', '$contact4', '$choice5', '$college3', '$branch3', '$github4', '$linkedin4', '$portfolio4', '$uploadfile')");
    if($ins)
    {
        echo "<script>alert('Thanks, Your contribution is submitted successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
        echo mysqli_error();
    }
}
?>
