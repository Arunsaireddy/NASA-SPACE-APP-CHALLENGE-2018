<?php
            $get=$_POST['user'];
            $db = mysqli_connect('localhost','root','','database');
    
    $query="update l set password=".$_POST['text']." where username='".$get."'";
            $result=mysqli_query($db,$query)
                or die("try again");
                echo "password changed successfully";
                ?>