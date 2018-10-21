<?php
$db = mysqli_connect('localhost','root','','database');
    $text= $_POST['text'] ;

    if (preg_match("/^[_a-zA-Z0-9]+$/", $text)){
			$query="select * from spacecenter where country='$text'";
			$result=mysqli_query($db,$query)
				or die("try again");
				$i=0;
			while($row=$result->fetch_assoc()){
				echo "<li><a href='http://localhost/Rocket_Lance_Scoop/PHP/details.php?station=".$row['link']."'>";
				echo $row['center']."</a></li>";
				$a[$i]=$row['center'];
				$i++;
			}
			

	}else{
    	echo "Please write proper country";
	}
	
	?>