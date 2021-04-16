<?php
session_start();
/*if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
  header("location: admin.php");
  exit;
}*/
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
           <a class="nav-link active" aria-current="page" href="admin1.php">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="judge1.php">Judge1</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="judge2.php">Judge2</a>
         </li>
                  <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="round1_score.php">Round 1</a>
         </li>
           <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="round4_scores.php">Round 3</a>
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
<br>
<h2 class="text-center">Sample1 scores </h2>
<br><br>
<div class="container my-4">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Username</th>
      <th scope="col">Teamname</th>
      <th scope="col">criteria1</th>
      <th scope="col">criteria2</th>
      <th scope="col">Total Marks</th>
    </tr>
  </thead>
  <tbody>


    <?php
  include 'dbconnect.php';
        $sql1 = "SELECT sno, username, teamname, criteria1, criteria2, Total FROM judge1 WHERE username='Sample1'";
      $result = mysqli_query($conn, $sql1);
      $sno = 0;
      while($row = mysqli_fetch_assoc($result)) {
        $sno = $sno + 1;
        echo "  <tr>
            <th scope='row'>". $sno ."</th>
            <th scope='row'>". $row['username'] ."</th>
          <td>". $row['teamname'] ."</td>
            <td>". $row['criteria1'] ."</td>
              <td>". $row['criteria2'] ."</td>
        <td>". $row['Total'] ." </td>";
             echo "</tr> ";

      }
    ?>

  </tbody>
</table>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


   <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
   </script>
   </body>
 </html>
