<?php
            $db = mysqli_connect('localhost','root','','database');
    $email= $_POST['text'] ;
    $query="select * from l where email='$email'";
            $result=mysqli_query($db,$query)
                or die("try again");
                
                $row=mysqli_fetch_array($result);
                if(mysqli_num_rows($result)==1)
                {
                    
$message = 'updatepassword.php?id='.$row['uniqueid'].'';
   echo "SUCCESS<br>";
   echo '<a href="'.$message.'" target=""_blank>click here to change password</a>';

                }
                else{
                    echo "please write email declared in this website";
                }

             ?>