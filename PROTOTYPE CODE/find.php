<?php
session_start();
$db = mysqli_connect('localhost','root','','hitam');
    $text= test_input($_POST['text'] );
    if (preg_match("/^[_a-zA-Z0-9]+$/", $text)){
    	$password=test_input($_POST["password"]);
    	if (preg_match("/^[_0-9]+$/", $password)){
			$query="select * from l where password=".$password;
			$result=mysqli_query($db,$query)
				or die("try again");
			$row=mysqli_fetch_array($result);
			$word=$row['uniqueid'];
			if($row['username']==$text){
				$_SESSION['fname']=$row['fname'];
				$_SESSION['lname']=$row['lname'];
				$_SESSION['uniqueid']=$row['uniqueid'];
				header("Location:loading.php");exit;
			}else{
				echo "username or password is incorrect*";
			}
		}else{
				echo "Please write proper password";
		}

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