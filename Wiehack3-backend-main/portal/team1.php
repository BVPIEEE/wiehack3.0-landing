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
           <a class="nav-link active" aria-current="page" href="#">Home</a>
         </li>
        <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="2.php">Round 1</a>
         </li>
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="3.php">Round 4</a>
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

   <?php
     include("dbconnect.php");
               //$_SESSION['email'] = 'spandey72100@gmail.com';
                 $teamname = $_SESSION['teamname'];
                 if($teamname){
                   $get_user = "select * from portal where teamname ='$teamname'";
                   $run_user = mysqli_query($conn,$get_user);
                   $row = mysqli_fetch_array($run_user);

                   $teamname = $row['teamname'];
                   $teamhead = $row['teamhead'];
              /*     $pass = $row['password'];
                   $college = $row['college'];
                   $branch = $row['branch'];
                   $year = $row['year'];
                   $user_image = $row['images']; */
                  }
                 else{
                       printf("error: %s\n", mysqli_error($conn));
                  }

     ?>

 <div class="jumbotron jumbotron-fluid" style="padding-top: 0; padding-bottom: 10px;">
   <div class="container" style="" >
     <div class="row featurette" >
       <div class="col-md-7">
         <h1 class="display-4">Welcome Team</h1><br>
         <!-- <div class="name_box"></div> -->

         <h4 class="">Teamname :<b style="word-space:10em">&nbsp;&nbsp;</b>
         <?php echo $teamname; ?></h4><br>
         <!-- <div class="name_box"></div> -->
         <h4 class="">Teamhead :<b style="word-space:10em">&nbsp;&nbsp;</b>
         <?php echo $teamhead; ?></h4><br>
         <!-- <div class="name_box"></div> -->


  <!-------------------------->
       </div>
       <div class="col-md-5" style="padding-top: 60px; padding-bottom: 20px;">
         <img src="img/download.png" align="right" class="img-thumbnail" style="height: 300px; width: 300px; border-radius:50%;">

       </div>
     </div>
   </div>
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
