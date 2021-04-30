
<!DOCTYPE html>

<html>

<style>

body{
    margin:0px;
    padding:0px;
}

</style>


<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QVVGLTTCB3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-QVVGLTTCB3');
</script>
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
        <li class="links"><a href="../../assets/rulebook1.pdf" target="_blank">Rulebook</a></li>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>


    <div id="rules">
      <h1>RULES</h1>
      <p>1) The maximum team size can be upto 4 members.<br> 2) The team must have atleast 1 female member and atmost 1 male member. <br><br>*NOTE : If your team has more than 1 male member, your team will be disqualified.
      </p>
    </div>



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
            <option> Select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select> <br> <br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College <span style="color: red">*</span></label> <br>
    <label for="" style="font-size:0.9rem">(Please fill full College Name)</label>

          <input type="text" id="college" name="college" class="form-control" style="width: 70%" placeholder="College Name" required>
    </div>

      <div class="mb-3">
      <label for="TextInput" class="form-label">College Address<span style="color: red">*</span></label>
      <input type="text" id="address1" name="address1" class="form-control" style="width: 70%" placeholder="Full College Address" required>
    </div>

    <div class="mb-3">
          <label for="TextInput" class="form-label">College Pin Code <span style="color: red">*</span></label>
          <input type="text" id="collegepin1" name="collegepin1" class="form-control" style="width: 70%" placeholder="College Pin code" required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch <span style="color: red">*</span></label>
      <input type="text" id="branch" name="branch" class="form-control" style="width: 70%" placeholder="Branch" required>
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Year <span style="color: red">*</span></label>
         <select id="github" name="github" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> 1st</option>
        <option> 2nd</option>
        <option> 3rd</option>
        <option> 4th</option>
      </select>
    <!-- <input type="text" id="github" name="github" class="form-control" style="width: 70%" placeholder="Github Profile" required> -->
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Are you an IEEE Member? <span style="color: red">*</span></label>
       <select id="linkedin" name="linkedin" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> Yes</option>
        <option> No</option>
      </select>
    <!--  <input type="text" id="linkedin" name="linkedin" class="form-control" style="width: 70%" placeholder="LinkedIn Profile" required> -->
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Where did you hear about Wiehack?</label>
      <select id="portfolio" name="portfolio" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> Social Media</option>
        <option> Through a Friend</option>
        <option> Through a Website</option>
      </select>
   <!--   <input type="text" id="portfolio" name="portfolio" class="form-control" style="width: 70%" placeholder="Portfolio Link"> -->
    </div>

<label for="Select" class="form-label"> Team members(including head of team) <span style="color: red">*</span></label>
      <select id="choice" name="choice" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> 1</option>
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
          </select> <br> <br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label>
          <br>
    <label for="" style="font-size:0.9rem">(Please fill full College Name)</label>
          <input type="text" id="college1" name="college1" class="form-control" style="width: 70%" placeholder="College Name">
    </div>

      <div class="mb-3">
      <label for="TextInput" class="form-label">College Address</label>
      <input type="text" id="address2" name="address2" class="form-control" style="width: 70%" placeholder="Full College Address">
    </div>

     <div class="mb-3">
          <label for="TextInput" class="form-label">College Pin Code</label>
          <input type="text" id="collegepin2" name="collegepin2" class="form-control" style="width: 70%" placeholder="College Pin code">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch1" name="branch1" class="form-control" style="width: 70%" placeholder=" Branch Name">
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Year</label>
       <select id="github2" name="github2" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> 1st</option>
        <option> 2nd</option>
        <option> 3rd</option>
        <option> 4th</option>
      </select>
    <!-- <input type="text" id="github" name="github" class="form-control" style="width: 70%" placeholder="Github Profile" required> -->
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Are you an IEEE Member?</label>
     <select id="linkedin2" name="linkedin2" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> Yes</option>
        <option> No</option>
      </select>
    <!--  <input type="text" id="linkedin2" name="linkedin2" class="form-control" style="width: 70%" placeholder="LinkedIn Profile" required> -->
    </div>
   <!-- <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(If Any)</label>
      <input type="text" id="portfolio2" name="portfolio2" class="form-control" style="width: 70%" placeholder="Portfolio Link">
    </div> -->


    <br><br><br>
    <h3>3rd Member</h3>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Name </label>
      <input type="text" id="name3" name="name3" class="form-control" style="width: 70%" placeholder=" Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id</label>
      <input type="email" id="email3" name="email3" class="form-control" style="width: 70%" placeholder="E-mail">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number</label>
      <input type="number" id="contact3" name="contact3" class="form-control" style="width: 70%" placeholder=" Contact Number">
    </div>

    <label for="Select" class="form-label"> Gender</label>
          <select id="choice4" name="choice4" style="width: 25%" class="form-select">
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select> <br><br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label>
          <br>
    <label for="" style="font-size:0.9rem">(Please fill full College Name)</label>
          <input type="text" id="college2" name="college2" class="form-control" style="width: 70%" placeholder="College Name">
    </div>

      <div class="mb-3">
      <label for="TextInput" class="form-label">College Address</label>
      <input type="text" id="address3" name="address3" class="form-control" style="width: 70%" placeholder="Full College Address">
    </div>

     <div class="mb-3">
          <label for="TextInput" class="form-label">College Pin Code</label>
          <input type="text" id="collegepin3" name="collegepin3" class="form-control" style="width: 70%" placeholder="College Pin code">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch2" name="branch2" class="form-control" style="width: 70%" placeholder=" Branch Name">
    </div>

     <div class="mb-3">
      <label for="TextInput" class="form-label">Year</label>
       <select id="github3" name="github3" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> 1st</option>
        <option> 2nd</option>
        <option> 3rd</option>
        <option> 4th</option>
      </select>
    <!-- <input type="text" id="github" name="github" class="form-control" style="width: 70%" placeholder="Github Profile" required> -->
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Are you an IEEE Member?</label>
     <select id="linkedin3" name="linkedin3" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> Yes</option>
        <option> No</option>
      </select>
    <!--  <input type="text" id="linkedin2" name="linkedin2" class="form-control" style="width: 70%" placeholder="LinkedIn Profile" required> -->
    </div>
   <!-- <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(If Any)</label>
      <input type="text" id="portfolio2" name="portfolio2" class="form-control" style="width: 70%" placeholder="Portfolio Link">
    </div> -->



  <br><br><br>
  <h3>4th Member</h3>
  <div class="mb-3">
      <label for="TextInput" class="form-label"> Name </label>
      <input type="text" id="name4" name="name4" class="form-control" style="width: 70%" placeholder=" Name">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> E-mail id</label>
      <input type="email" id="email4" name="email4" class="form-control" style="width: 70%" placeholder="E-mail">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Contact Number</label>
      <input type="number" id="contact4" name="contact4" class="form-control" style="width: 70%" placeholder=" Contact Number">
    </div>

    <label for="Select" class="form-label"> Gender</label>
          <select id="choice5" name="choice5" style="width: 25%" class="form-select">
            <option> select</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
          </select> <br><br>
    <div class="mb-3">
          <label for="TextInput" class="form-label">Name of College</label> <br>
    <label for="" style="font-size:0.9rem">(Please fill full College Name)</label>
          <input type="text" id="college3" name="college3" class="form-control" style="width: 70%" placeholder="College Name">
    </div>

      <div class="mb-3">
      <label for="TextInput" class="form-label">College Address</label>
      <input type="text" id="address4" name="address4" class="form-control" style="width: 70%" placeholder="Full College Address">
    </div>

     <div class="mb-3">
          <label for="TextInput" class="form-label">College Pin Code</label>
          <input type="text" id="collegepin4" name="collegepin4" class="form-control" style="width: 70%" placeholder="College Pin code">
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label">Branch</label>
      <input type="text" id="branch3" name="branch3" class="form-control" style="width: 70%" placeholder=" Branch Name">
    </div>

    <div class="mb-3">
      <label for="TextInput" class="form-label">Year</label>
       <select id="github4" name="github4" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> 1st</option>
        <option> 2nd</option>
        <option> 3rd</option>
        <option> 4th</option>
      </select>
    <!-- <input type="text" id="github" name="github" class="form-control" style="width: 70%" placeholder="Github Profile" required> -->
    </div>
    <div class="mb-3">
      <label for="TextInput" class="form-label"> Are you an IEEE Member?</label>
     <select id="linkedin4" name="linkedin4" style="width: 25%" class="form-select" required>
        <option> Select</option>
        <option> Yes</option>
        <option> No</option>
      </select>
    <!--  <input type="text" id="linkedin2" name="linkedin2" class="form-control" style="width: 70%" placeholder="LinkedIn Profile" required> -->
    </div>
   <!-- <div class="mb-3">
      <label for="TextInput" class="form-label"> Portfolio(If Any)</label>
      <input type="text" id="portfolio2" name="portfolio2" class="form-control" style="width: 70%" placeholder="Portfolio Link">
    </div> -->




<br>

<input type="checkbox" name="checkbox" value="check" id="agree" required> I have read and agree to the <a href="../../assets/T&CWiehack3.0.docx" target="_blank" class="links">Terms and Conditions</a> and Privacy Policy
<br>
<br>

<input class="login-btn" style = "color: white;" type="submit" name="submit" value="Submit">
</form>
</div>

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
    $address1 = $_POST["address1"];
    $collegepin1 = $_POST["collegepin1"];
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
    $address2 = $_POST["address2"];
    $collegepin2 = $_POST["collegepin2"];
    $branch1 = $_POST["branch1"];
    $github2 = $_POST["github2"];
    $linkedin2 = $_POST["linkedin2"];
    //$portfolio2 = $_POST["portfolio2"];

    $name3 = $_POST["name3"];
    $email3 = $_POST["email3"];
    $contact3 = $_POST["contact3"];
    $choice4 = $_POST["choice4"];
    $college2 = $_POST["college2"];
    $address3 = $_POST["address3"];
    $collegepin3 = $_POST["collegepin3"];
    $branch2 = $_POST["branch2"];
    $github3 = $_POST["github3"];
    $linkedin3 = $_POST["linkedin3"];
    //$portfolio3 = $_POST["portfolio3"];

    $name4 = $_POST["name4"];
    $email4 = $_POST["email4"];
    $contact4 = $_POST["contact4"];
    $choice5 = $_POST["choice5"];
    $college3 = $_POST["college3"];
    $address4 = $_POST["address4"];
    $collegepin4 = $_POST["collegepin4"];
    $branch3 = $_POST["branch3"];
    $github4 = $_POST["github4"];
    $linkedin4 = $_POST["linkedin4"];
    //$portfolio4 = $_POST["portfolio4"];
    $uploadfile = "http://postalpincode.in/api/pincode/" . $collegepin1;

    // Check whether this username exists
    $existSql = "SELECT * FROM `portal` WHERE teamname = '$teamname'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showerror = true;
  /*  echo "                   " . "Teamname Already Exists"; */
    }
    else{

      $ins=mysqli_query($conn, "INSERT INTO portal(teamname, password, teamhead, email, contact, choice2, college, address1, collegepin1, branch, github, linkedin, portfolio, choice, name2, email2, contact2, choice3, college1, address2, collegepin2, branch1, github2, linkedin2, name3, email3, contact3, choice4, college2, address3, collegepin3, branch2, github3, linkedin3, name4, email4, contact4, choice5, college3, address4, collegepin4, branch3, github4, linkedin4, uploadfile) VALUES('$teamname', '$password', '$teamhead',  '$email', '$contact', '$choice2', '$college', '$address1', '$collegepin1', '$branch', '$github', '$linkedin', '$portfolio', '$choice', '$name2', '$email2', '$contact2', '$choice3', '$college1', '$address2', '$collegepin2', '$branch1', '$github2', '$linkedin2', '$name3', '$email3', '$contact3', '$choice4', '$college2', '$address3', '$collegepin3', '$branch2', '$github3', '$linkedin3', '$name4', '$email4', '$contact4', '$choice5', '$college3', '$address4', '$collegepin4', '$branch3', '$github4', '$linkedin4', '$uploadfile')");
      if($ins)
      {
          echo "<script>alert('Thanks, Your Registration is submitted successfully. Your selection will be notified via email. After selection you will be able to login')</script>";
  		echo "<script>window.open('index.php','_self')</script>";
      }
      else
      {
          echo mysqli_error();
      }
  } }

  if($showerror){
  echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Teamname already exists.</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div> ';
} ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="/js/nav.js"></script>


</body>
</html>
