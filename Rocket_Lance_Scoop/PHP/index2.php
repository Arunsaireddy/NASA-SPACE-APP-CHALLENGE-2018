<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="http://localhost/Rocket_Lance_Scoop/images/back.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://localhost/Rocket_Lance_Scoop/CSS/style.css">
  <style type="text/css">
    body {
       margin: 0;
    font-family: Arial;
    font-size: 17px;
      color: #777;
      background: url('http://localhost/Rocket_Lance_Scoop/images/giph.gif');
      background-size: cover;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div class="navnav"><img src="http://localhost/Rocket_Lance_Scoop/images/back.png" class="navbar-brand" style="height: 55px;width: 55px;">
      <a class="navbar-brand" href="#myPage">Rocket Launch Scoop</a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a>india</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="center">SpaceStation
          <span class="caret"></span></a>
          
          <ul class="dropdown-menu">
            <?php $work= $_GET['word']; ?>
            <li><a href="http://localhost/Rocket_Lance_Scoop/PHP/details.php?station=vssc" onclick="document.getElementById('center').innerHTML='VSSC'">VSSC</a></li>
            <li><a href="http://localhost/Rocket_Lance_Scoop/PHP/details.php?station=lpsc" onclick="document.getElementById('center').innerHTML='LPSC'">LPSC</a></li>
            <li><a href="http://localhost/Rocket_Lance_Scoop/PHP/details.php?station=sdsc" onclick="document.getElementById('center').innerHTML='SDSC-SHAR'">SDSC-SHAR</a></li>
            <li><a href="http://localhost/Rocket_Lance_Scoop/PHP/details.php?station=iprc" onclick="document.getElementById('center').innerHTML='IPRC'">IPRC</a></li>
            <li><a href="http://localhost/Rocket_Lance_Scoop/PHP/details.php?station=isac" onclick="document.getElementById('center').innerHTML='ISAC'">ISAC</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php 
              include("profile.php")
          ?> </span></a>
          <ul class="dropdown-menu">
            <li><a href="#">profile</a></li>
            <li><a href="http://localhost/Rocket_Lance_Scoop/HTML/community.html">community</a></li>
            <li><a href="http://localhost/Rocket_Lance_Scoop/HTML/login.html">logout</a></li> 
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


<div class="content">
  <h1>About Rocket Science</h1>
  <q>'Rocket Science' is really where I fell in love with filmmaking, I think 'Camp' was incredible, but it was so bizarre, and I was trying to find my footing in this world where you don't have an audience for immediate validation.</q>
</div>

</body>
</html>
