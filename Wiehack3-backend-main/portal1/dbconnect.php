<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "portal";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn) {
  die("Error". mysqli_error());
}

//
//,
/* <script type="text/javascript">
  $(document).ready(function(){
    var maxinc = 3;
    var x = 1;
  $( ".add-row" ).click(function(){
     var $clone = $( "fieldset.personal-details" ).first().clone();
     if(x < maxinc){
         x++;
     $clone.append( "<button type='button' class='remove-row'>Remove team member</button>" );
    $clone.insertBefore( ".add-row" );}
  });

  $( ".form-style-9" ).on("click", ".remove-row", function(){
     $(this).parent().remove();
     x--;
  });
});
</script> */
//<button type="button" class="add-row" style=" margin-top: 10px;">Add team member</button> <br><br>

 ?>
