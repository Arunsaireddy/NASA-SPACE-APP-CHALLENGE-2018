<?php
	$db = mysqli_connect('localhost','root','','database');
	$station=$_GET['station'];
	
	$query="select * from ".$station;
	
			$result=mysqli_query($db,$query)
				or die("try again");
			$row=mysqli_fetch_array($result);

			$i=0;
			while($row=$result->fetch_assoc()){
				$title=$row['title'];
			$description=$row['description'];
			$date=$row['date'];
			$url=$row['url'];
			$uploader=$row['uploader'];
			$image=$row['image'];
			echo '<div id="photo" class="container-fluid bg-3 text-center"><h1>'.$title.'</h1><img src="http://localhost/Rocket_Lance_Scoop/images/'.$image.'"><h2>date:'.$date.'</h2>'.$description.'<br><a href="'.$url.'">read more...</a><p>uploaded by:'.$uploader.'</p></div>';
				$i++;
			}
		

		?>
		