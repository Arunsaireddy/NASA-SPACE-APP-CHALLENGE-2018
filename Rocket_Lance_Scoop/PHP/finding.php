<?php
session_start();
$db = mysqli_connect('localhost','root','','database');
    $fname= test_input($_POST['fname'] );
    $lname= test_input($_POST['lname'] );
    $email= test_input($_POST['email'] );
    $mnumber= test_input($_POST['mnumber'] );
    if (preg_match("/^[_a-zA-Z0-9]+$/", $fname)){
    	$username= test_input($_POST['username'] );
    	$password=test_input($_POST["password"]);
    	if (preg_match("/^[_0-9]+$/", $password)){
    		$uniqueid=array_merge(range('a', 'z'),range('A','Z'),range(0, 9),range(0, 9));
			shuffle($uniqueid);
			$uniqueid=substr(implode($uniqueid),0,25);
			$query="insert into l values('$username',$password,'$fname','$lname','$uniqueid','$email','$mnumber')";
			$result=mysqli_query($db,$query)
				or die("try again");
			echo "your created account successfully";
			
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