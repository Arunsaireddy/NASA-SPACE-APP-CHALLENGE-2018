<!DOCTYPE html>
<html lang="en">
<head>
  <title>Details</title>
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
      background: url('http://localhost/Rocket_Lance_Scoop/images/back.jpg');
      background-size: cover;
  }
  #back{
    color: white;
    margin-left: 20px;
  }
  .bg-3 {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    width: 800px;
    margin-top: 40px;
}
.containered-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .readmore{
    margin-left: 500px;
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
    </div>
  </div>
</nav><br><br><br>
<div id="document" class="container-fluid bg-2 text-center">
    <?php include('insert.php') ?>
</div>
<br><br><br><br><br>



</body>
</html>
