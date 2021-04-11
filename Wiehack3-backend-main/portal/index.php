
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">



<title>Registration</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WieHack 3.0</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="link.php">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          <li class="nav-item d-flex">
            <a class="nav-link" href="login.html">Login</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>


<div class="container my-4">
<form action="index.php" method="post" enctype="multipart/form-data">

<div class="mb-3">
      <label for="TextInput" class="form-label">Team Name <span style="color: red">*</span> </label>
      <input type="text" id="teamname" name="teamname" class="form-control" placeholder=" Team Name" required>
    </div>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Password <span style="color: red">*</span></label>
          <input type="text" id="password" name="password" class="form-control" placeholder="Password" required>
        </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name(Team Head) <span style="color: red">*</span></label>
      <input type="text" id="teamhead" name="teamhead" class="form-control" placeholder="Team Head " required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id <span style="color: red">*</span></label>
      <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number <span style="color: red">*</span></label>
      <input type="number" id="contact" name="contact" class="form-control" placeholder="Contact" required>
    </div>

    <label for="Select" class="form-label"> Gender <span style="color: red">*</span></label>
          <select id="choice2" name="choice2" class="form-select" required>
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College <span style="color: red">*</span></label>
          <input type="text" id="college" name="college" class="form-control" placeholder="College" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch <span style="color: red">*</span></label>
      <input type="text" id="branch" name="branch" class="form-control" placeholder=" input" required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link <span style="color: red">*</span></label>
      <input type="text" id="github" name="github" class="form-control" placeholder=" input" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link <span style="color: red">*</span></label>
      <input type="text" id="linkedin" name="linkedin" class="form-control" placeholder=" input" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(if any)</label>
      <input type="text" id="portfolio" name="portfolio" class="form-control" placeholder=" input">
    </div>

<label for="Select" class="form-label"> Team members(including head of team) <span style="color: red">*</span></label>
      <select id="choice" name="choice" class="form-select" required>
        <option> select</option>
        <option> 2</option>
        <option> 3</option>
        <option> 4</option>
      </select>
  </div>
  <div class="container">


<h3>2nd Member</h3>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name <span style="color: red">*</span></label>
      <input type="text" id="name2" name="name2" class="form-control" placeholder=" input" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id <span style="color: red">*</span></label>
      <input type="email" id="email2" name="email2" class="form-control" placeholder=" input" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number <span style="color: red">*</span></label>
      <input type="number" id="contact2" name="contact2" class="form-control" placeholder=" input" required>
    </div>

    <label for="Select" class="form-label"> Gender <span style="color: red">*</span></label>
          <select id="choice3" name="choice3" class="form-select" required>
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College <span style="color: red">*</span></label>
          <input type="text" id="college1" name="college1" class="form-control" placeholder=" input" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch <span style="color: red">*</span></label>
      <input type="text" id="branch1" name="branch1" class="form-control" placeholder=" input" required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link <span style="color: red">*</span></label>
      <input type="text" id="github2" name="github2" class="form-control" placeholder=" input" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link <span style="color: red">*</span></label>
      <input type="text" id="linkedin2" name="linkedin2" class="form-control" placeholder=" input" required>
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(if any)</label>
      <input type="text" id="portfolio2" name="portfolio2" class="form-control" placeholder=" input">
    </div>


    <h3>3rd Member</h3>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name(Team Head)</label>
      <input type="text" id="name3" name="name3" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id</label>
      <input type="email" id="email3" name="email3" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number</label>
      <input type="number" id="contact3" name="contact3" class="form-control" placeholder=" input" >
    </div>

    <label for="Select" class="form-label"> Gender</label>
          <select id="choice4" name="choice4" class="form-select">
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label>
          <input type="text" id="college2" name="college2" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch2" name="branch2" class="form-control" placeholder=" input" >
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link</label>
      <input type="text" id="github3" name="github3" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link</label>
      <input type="text" id="linkedin3" name="linkedin3" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(if any)</label>
      <input type="text" id="portfolio3" name="portfolio3" class="form-control" placeholder=" input">
    </div>

  <h3>4th Member</h3>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name(Team Head)</label>
      <input type="text" id="name4" name="name4" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id</label>
      <input type="email" id="email4" name="email4" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number</label>
      <input type="number" id="contact4" name="contact4" class="form-control" placeholder=" input" >
    </div>

    <label for="Select" class="form-label"> Gender</label>
          <select id="choice5" name="choice5" class="form-select">
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label>
          <input type="text" id="college3" name="college3" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch3" name="branch3" class="form-control" placeholder=" input" >
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Github Profile link</label>
      <input type="text" id="github4" name="github4" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Linkedin Profile link</label>
      <input type="text" id="linkedin4" name="linkedin4" class="form-control" placeholder=" input" >
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(if any)</label>
      <input type="text" id="portfolio4" name="portfolio4" class="form-control" placeholder=" input">
    </div>




    <div class="form-group">
Pdf File : <input type="file" name="file" placeholder="File" value="Choose File">
</div>
<br>
<br>

<input type="submit" name="submit" value="Submit">
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>




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
    $filename = $_FILES["file"]["name"];
    $tmpname  = $_FILES["file"]["tmp_name"];
    $folder = "uploads/".basename($filename);





    move_uploaded_file($tmpname,$folder);

    $ins=mysqli_query($conn, "INSERT INTO portal(teamname, password, teamhead, email, contact, choice2, college, branch, github, linkedin, portfolio, choice, name2, email2, contact2, choice3, college1, branch1, github2, linkedin2, portfolio2, name3, email3, contact3, choice4, college2, branch2, github3, linkedin3, portfolio3, name4, email4, contact4, choice5, college3, branch3, github4, linkedin4, portfolio4,uploadfile) VALUES('$teamname', '$password', '$teamhead',  '$email', '$contact', '$choice2', '$college', '$branch', '$github', '$linkedin', '$portfolio', '$choice', '$name2', '$email2', '$contact2', '$choice3', '$college1', '$branch1', '$github2', '$linkedin2', '$portfolio2', '$name3', '$email3', '$contact3', '$choice4', '$college2', '$branch2', '$github3', '$linkedin3', '$portfolio3', '$name4', '$email4', '$contact4', '$choice5', '$college3', '$branch3', '$github4', '$linkedin4', '$portfolio4', '$filename')");
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
