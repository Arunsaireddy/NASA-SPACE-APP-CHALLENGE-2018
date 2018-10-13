<?php
session_start();
$db = mysqli_connect('localhost','root','','hitam');
    $text= test_input($_POST['data'] );
    if (preg_match("/^[_a-zA-Z0-9]+$/", $text)){
			$query="SELECT `center` FROM `spacecenter` WHERE country=\'$text\'";
			$result=mysqli_query($db,$query);
			$row=mysqli_fetch_array($result);
	
	}else{
    	echo "Please write proper username";
	}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>