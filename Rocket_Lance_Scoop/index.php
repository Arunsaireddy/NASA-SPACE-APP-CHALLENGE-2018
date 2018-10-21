<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/back.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <style type="text/css">
  	body {
       margin: 0;
    font-family: Arial;
    font-size: 17px;
      color: #777;
      background: url('images/giph.gif');
      background-size: cover;
  }
  input{
      background: none;
      border: none;
      width: 100px;
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
      <div class="navnav"><img src="images/back.png" class="navbar-brand" style="height: 55px;width: 55px;">
      <a class="navbar-brand" href="#myPage">Rocket Launch Scoop</a></div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    
    
    
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="name">Country
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="document.getElementById('name').innerHTML='india'"><input type="submit" name="text" value="india"></a></li>
            <li><a><input type="submit" name="text" value="America" onclick="document.getElementById('name').innerHTML='America'"></a></li>
            <li><a><input type="submit" name="text" value="Russia" onclick="document.getElementById('name').innerHTML='Russia'"></a></li>
            <li><a><input type="submit" name="text" value="Germany" onclick="document.getElementById('name').innerHTML='Germany'"></a></li>
            <li><a><input type="submit" name="text" value="Japan" onclick="document.getElementById('name').innerHTML='Japan'"></a></li> 
          </ul>
        </li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="center">SpaceStation
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php include("PHP/action.php") ?>
            
          </ul>
        </li>
        <li><a href="HTML/login.html">login</a></li>
      
      </ul>
    </div>
</form>
  </div>
</nav>


<div class="content">
  <h1>About Rocket Science</h1>
  <q>'Rocket Science' is really where I fell in love with filmmaking, I think 'Camp' was incredible, but it was so bizarre, and I was trying to find my footing in this world where you don't have an audience for immediate validation.</q>
</div>

</body>
</html>
