<?php include 'navbar.php'; ?>


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
      <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Sno</th>
          <th scope="col">Teamname</th>
          <th scope="col">uploadfile</th>
        </tr>
      </thead>
      <tbody>


        <?php
      include 'dbconnect.php';
          $sql = "SELECT sno, teamname, uploadfile FROM `portal`";
          $result = mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result)) {
            $sno = $sno + 1;
            echo "  <tr>
                <th scope='row'>". $sno ."</th>
                <td>". $row['teamname'] ."</td> "?>
              <td>  <a href ="<?php echo "uploads/".$row['uploadfile']; ?>" > <?php echo $row['uploadfile'] ?> </a></td>
            <?php
              // ". $row['uploadfile'] ."
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
