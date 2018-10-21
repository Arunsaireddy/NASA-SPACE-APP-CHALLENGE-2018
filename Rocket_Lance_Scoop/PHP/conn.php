<?php
session_start();
$db = mysqli_connect('localhost','root','','database');
$center= test_input($_POST['center'] );

    $title= test_input($_POST['title'] );
    $description= test_input($_POST['description'] );
    $date= test_input($_POST['date'] );
    $url= test_input($_POST['url'] );
    $image='image.jpg';
    	$uploader= test_input($_POST['uploader'] );

			$query="insert into $center values('$title','$description','$url','$uploader','$date','$image')";
			$result=mysqli_query($db,$query)
				or die("try again");
			echo "your submitted data successfully";
			
			
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	?>