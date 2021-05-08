<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  header("location: team.php");
  exit;
}
 ?>
 <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
 }
 else{
   $loggedin = false;
 }
 echo '
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">WieHack 3.0</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="team1.php">Home</a>
       </li>
     <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="1.php">Round 1</a>
       </li>
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="2.php">Round 2</a>
       </li>
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="3.php">Round 3</a>
       </li>
       <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="4.php">Round 4</a>
       </li>
      <!--    <li class="nav-item">
 <a class="nav-link disabled" href="1.php" tabindex="-1" aria-disabled="true">Round 1</a>
</li>
 <li class="nav-item">
 <a class="nav-link disabled" href="2.php" tabindex="-1" aria-disabled="true">Round 2</a>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="3.php" tabindex="-1" aria-disabled="true">Round 3</a>
</li>
<li class="nav-item">
<a class="nav-link disabled" href="4.php" tabindex="-1" aria-disabled="true">Round 4</a>
</li> -->
         </ul>';

           if($loggedin){
           echo '<li class="nav-item">
             <a class="nav-link" href="logout.php">Logout</a>
           </li>';
         } else {
           exit;
         }
 echo '    </div>
   </div>
 </nav>'; ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

   </head>
   <body>


<div class="container">
  <br><br>
<h2 class="text-center">ROUND 3 SUBMISSIONS</h2><br><br>
  <form class="" action="3.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="TextInput" class="form-label">Teamname</label>
      <input type="text" id="Teamname" name="Teamname" class="form-control" placeholder=" input">
    </div>
    <div class="form-group">
  Pdf File : <input type="file" name="file" id="file" placeholder="File" value="Choose File">
  </div>
  <br>

  <input type="submit" name="submit" value="Submit">
  </form>
</div>



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


   <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
   </script>
   </body>
 </html>
 <?php
 include("dbconnect.php");
 if(isset($_POST['submit']))
 {
    $teamname = $_SESSION['teamname'];

 $filename = $_FILES['file']['name'];
 $tmpname  = $_FILES['file']['tmp_name'];
 $folder = "uploads/".basename($filename);

          move_uploaded_file($tmpname,$folder);

              $ins=mysqli_query($conn, "INSERT INTO round3(teamname, uploadfile) VALUES('$teamname','$filename')");
              if($ins)
              {
                 echo "<script>alert('Thanks, Your contribution is submitted successfully')</script>";
            //  echo "<script>window.open('2.php','_self')</script>";
              }
              else
              {
                  echo mysqli_error();
              }
          }

 ?>
