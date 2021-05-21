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
   <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
       <div class="sidebar-brand">
           <h2><span>Wiehack3.0</span></h2>
       </div>
       <div class="sidebar-menu" id="nav">
           <ul>
               <li><a href="team1.php" class="link active"><span class="fa fa-window-maximize"></span><span>Dashboard</span></a></li>
               <li><a href="../../assets/rulebook.pdf" class="link" target="_blank"><span class="fa fa-book"></span><span>Rulebook</span></a></li>
               <li><a href="#" class="link"><span class="fa fa-upload"></span><span>Submissions</span></a></li>
               <li><a href="https://discord.gg/cf44CfGR" class="link"><span class="fab fa-discord"></span><span>Discord</span></a></li>
               <li><a  href="logout.php" class="link" ><span class="fas fa-sign-out-alt"><span></span>Logout</span></a>
               </li>';

echo '    </ul>
       </div>
     </div>  '; ?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- External CSS -->
<link rel="stylesheet" href="styles.css">
   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"> -->
<style media="screen">
:root {
  --main-color: #242582;
  --color-dark: #553D57;
  --text-grey: #99738E;
}

/* Animations */
@-webkit-keyframes bg-scrolling-reverse {
100% {
  background-position: 50px 50px;
}
}
@-moz-keyframes bg-scrolling-reverse {
100% {
  background-position: 50px 50px;
}
}
@-o-keyframes bg-scrolling-reverse {
100% {
  background-position: 50px 50px;
}
}
@keyframes bg-scrolling-reverse {
100% {
  background-position: 50px 50px;
}
}
@-webkit-keyframes bg-scrolling {
0% {
  background-position: 50px 50px;
}
}
@-moz-keyframes bg-scrolling {
0% {
  background-position: 50px 50px;
}
}
@-o-keyframes bg-scrolling {
0% {
  background-position: 50px 50px;
}
}
@keyframes bg-scrolling {
0% {
  background-position: 50px 50px;
}
}
/* Main styles */
body {
color: white;
/* img size is 50x50 */
background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
-webkit-animation: bg-scrolling-reverse 0.92s infinite;
/* Safari 4+ */
-moz-animation: bg-scrolling-reverse 0.92s infinite;
/* Fx 5+ */
-o-animation: bg-scrolling-reverse 0.92s infinite;
/* Opera 12+ */
animation: bg-scrolling-reverse 0.92s infinite;
/* IE 10+ */
-webkit-animation-timing-function: linear;
-moz-animation-timing-function: linear;
-o-animation-timing-function: linear;
animation-timing-function: linear;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}

.sidebar {
  width: 345px;
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  background: var(--main-color);
  z-index: 10;
  transition: width 300ms;
}

.sidebar-brand {
  height: 90px;
  padding: 1rem 0 1rem 2rem;
  color: #fff;
}

.sidebar-brand h2 {
  display: inline-block;
  padding-right: 1rem;
  margin-left: 15px;
}

.sidebar-menu {
  margin-top: 1rem;
}

.sidebar-menu li {
  width: 100%;
  margin-bottom: 2.5rem;
  padding-left: 2rem;
}

.sidebar-menu a {
  padding-left: 1rem;
  display: block;
  color: #fff;
  font-size: 1.0rem;
}

.sidebar-menu a.active {
  background: #fff;
  padding-top: 0.6rem;
  padding-bottom: 0.6rem;
  color: var(--main-color);
  border-radius: 30px 0px 0px 30px;
}

.sidebar-menu a span:first-child {
  font-size: 1.3rem;
  padding-right: 2rem;
}

.main-content {
  transition: margin-left 300ms;
  margin-left: 345px;
}

header {
  background: #fff;
  display: flex;
  justify-content: space-between;
  padding: 1rem;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
  position: fixed;
  left: 345px;
  width: calc(100% - 345px);
  top: 0;
  z-index: 10;
  transition: left 300ms;
}

header h2 {
  color: #222;
}

header label span {
  font-size: 1.7rem;
  padding-right: 1rem;
}

main {
  margin-top: 85px;
  padding: 2rem 1.5rem;
  background: #f1f5f9;
  min-height: calc(100vh - 90px);
}

#nav-toggle {
  display: none;
  cursor: pointer;
}

#nav-toggle:checked + .sidebar {
  width: 110px;
}

#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar .li a {
  padding-left: 1rem;
}

#nav-toggle:checked + .sidebar .li a span {
  padding-right: 1rem;
}

#nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child {
  display: none;
}

#nav-toggle:checked ~ .main-content {
  margin-left: 110px;
}

#nav-toggle:checked ~ .main-content header {
  width: calc(100% - 110px);
  left: 110px;
}

.iframe-container {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%;
  height: 0;
}

.iframe-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 10%;
}

.container {
  background-color: var(--main-color);
  border-radius: 20px;
  margin-left: 10%;
  margin-right: 10%;
  padding: 40px;
}

@media only screen and (max-width: 1200px){
  .sidebar {
      width: 110px;
  }

  .sidebar .sidebar-brand,
  .sidebar .li a {
      padding-left: 1rem;
  }

  .sidebar .li a span {
      padding-right: 1rem;
  }

  .sidebar .sidebar-brand h2 span:last-child,
  .sidebar li a span:last-child {
      display: none;
  }

  .main-content {
      margin-left: 110px;
  }

  .main-content header {
      width: calc(100% - 110px);
      left: 110px;
  }
}

@media only screen and (max-width: 960px) {

}

@media only screen and (max-width: 768px) {
  .sidebar {
      left: -90% !important;
  }

  header h2 {
      display: flex;
      align-items: center;
  }

  header h2 label {
      display: inline-block;
      background: var(--main-color);
      padding-right: 0rem;
      margin-right: 1rem;
      height: 40px;
      width: 40px;
      border-radius: 50%;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center !important;
  }

  header h2 span {
      text-align: center;
      padding-right: 0rem;
  }

  header h2 {
      font-size: 1.1rem;
  }

  .main-content {
      width: 100%;
      margin-left: 0rem;
  }

  header {
      width: 100% !important;
      left: 0 !important;
      z-index: 10;
      width: 345px;
  }

  #nav-toggle:checked + .sidebar {
      left: 0 !important;
  }

  #nav-toggle:checked + .sidebar .sidebar-brand,
  #nav-toggle:checked + .sidebar .li a {
      padding-left: 2rem;
      text-align: left;
  }

  #nav-toggle:checked + .sidebar .li a span {
      padding-right: 1rem;
  }

  #nav-toggle:checked + .sidebar .sidebar-brand h2 span:last-child {
      display: inline;
  }

  #nav-toggle:checked ~ .main-content {
      margin-left: 0rem !important;
  }

  #nav-toggle:checked + .sidebar .li a span:last-child {
      display: none;
  }
}

@media only screen and (max-width: 560px) {

}

</style>

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
                     $pass = $row['password'];
                      $college = $row['college'];
                      $branch = $row['branch'];
                       }
                    else{
                          printf("error: %s\n", mysqli_error($conn));
                     }

        ?>
   <div class="main-content">
     <header>
         <div class="header-title">
             <h2>
                 <label for="nav-toggle">
                     <span class="fa fa-bars"></span>
                 </label>
                 Welcome, <?php echo $teamname; ?>
             </h2>
         </div>
     </header>

     <div class="iframe-container">
       <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/5ghCQxKKWRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>

     <div class="container">
       <h2>Round 1</h2>
       <ul>
         <li>Instructions TBD</li>
         <!-- <li>point 2</li>
         <li>point 3</li>
         <li>point 4</li>
         <li>point 5</li> -->
       </ul>
     </div>

        <!-- <div class="name_box"></div> -->
        <!-- <?php echo $teamname; ?> --></h4><br>
        <!-- <div class="name_box"></div> -->
        <!-- <?php echo $teamhead; ?> --></h4><br>
        <!-- <div class="name_box"></div> -->
<br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

 <script src="navbar.js"></script>

  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
  </script>
  </body>
</html>
