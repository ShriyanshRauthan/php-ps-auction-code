<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "psauction";

$con= mysqli_connect($server,$user,$password,$db);

if($con){
  
}else{
  ?>
   <script>
    alert(" NO Connection ")
   </script>
  <?php
}  

?>