<html>
<head>
    <title>forgot password</title>
    <script type="text/javascript">
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
  </script>
    <style type="text/css">
    body{
        background: url('http://localhost/Rocket_Lance_Scoop/images/back.jpg');
        background-size: cover;
    }

        .login-box{
    width:600px;
    height: 300px;
    background: white;
    color: #898e84;
    top: 50%;
    left: 40%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 10px 30px;
}

#text{
    width: 60%;
    margin-left: 40px;
    margin-bottom: 50px;
    color: #898e84;
    border: none;
    border-bottom: 1px solid #8b9099;
    background: transparent;
    outline: none;
    height: 25px;
    color: #898e84
    font-size: 16px;
}
#button
{
    border: none;
    outline: none;
    height: 40px;
    width: 140px;
    margin-left: 10px;
    background: #5f91e2;
    color: white;
    font-size: 18px;
    border-radius: 20px;
}
#button:hover
{
    cursor: pointer;
    background: #898e84;
    color: white;
}
a{
    margin-left: 600px;
    text-decoration: none;
    color: #898e84;
}
a:hover{
    color: #5f91e2;
}
.head{
    text-align: center;
    margin-bottom: 40px;
    color: #5f91e2;
}
p{
    padding-left: 20px;
    color: #898e84
}
::placeholder {
    color: #898e84;
    opacity: 1;
}
::value {
    color: #898e84;
    opacity: 1;
    }
</style>
</head>
    <body id="myimage">
    <div class="login-box"><br>
        <h2 class="head">please enter Email address of your account</h2>
            <form name="form"  action="http://localhost/Rocket_Lance_Scoop/PHP/forgotten.php" method="post"><br><br>
            <input type="email" name="text" id="text" placeholder="Enter Email address" required="yes" autocomplete="off">
            
            <input type="submit" name="submit" value="Send mail" id="button">
            </form>
            
        </div>

    </body>
</html>
