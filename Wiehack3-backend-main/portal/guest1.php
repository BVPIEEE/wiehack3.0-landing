<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  header("location: guest.php");
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
           <a class="nav-link active" aria-current="page" href="#">Home</a>
         </li>

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
<div class="container my-4">
  <h2>Enter marks for each team with respect to criterias</h2>
<br>
<form class="" action="guest1.php" method="post">
  <div class="form-group row">
    <div class="col-lg-4">
      <label for="">Username</label>
    </div>
    <div class="col-lg-6">
      <input type="text" class="form-control" name="username" id="username" value="" placeholder="<?php $_SESSION['username'] ?>">
    </div>
  </div> <br>
  <div class="form-group row">
    <div class="col-lg-4">
      <label for="">Team Name</label>
    </div>
    <div class="col-lg-6">
      <input type="text" class="form-control" name="teamname" id="teamname" value="">
    </div>
  </div>

  <br>
  <div class="form-group row">
    <div class="col-lg-4">
    <label for="">Criteria 1</label>
  </div>
  <div class="col-lg-6">
    <input type="number" class="form-control" name="criteria1" id="criteria1" value="">
  </div>
  </div>
  <br>
  <div class="form-group row">
        <div class="col-lg-4">

    <label for="">Criteria 2</label>
  </div>
  <div class="col-lg-6">
    <input type="number" class="form-control" name="criteria2" id="criteria2" value="">
      </div>
  </div>

    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>
</div>

<br><br>



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
       $username = $_SESSION['username'];
     $teamname = $_POST["teamname"];
     $criteria1 = $_POST["criteria1"];
     $criteria2 = $_POST["criteria2"];
     $total = $criteria1 + $criteria2;
     $sql = "INSERT INTO judge1(username, teamname, criteria1, criteria2, total) VALUES('$username', '$teamname', '$criteria1', '$criteria2', '$total')";
     $result = mysqli_query($conn, $sql);
     if($result) {
        echo "Data is inserted successfully";
     } else {
    echo "Something is wrong". mysqli_error();
     }
   }

?>
