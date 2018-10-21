<?php
$uniqueid=$_GET["word"];
if (preg_match("/^[_a-zA-Z0-9]+$/", $uniqueid)){ 
$f=test_input($uniqueid);
$db = mysqli_connect('localhost','root','','database');
  $query="select * from l where uniqueid='$f'";
    $result=mysqli_query($db,$query);
      $row=mysqli_fetch_array($result);
      $word=$row['fname'];
      echo $word;
  }else
  {
  	
  }
      function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
      ?>