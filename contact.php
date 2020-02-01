<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="footer.css">
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
    <link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/bootstrap.css"> 
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css"> 
</head>
<body>
<?php include 'header.php';?>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Contact</legend>

    <div class=" container tt1"> 
<!-- Text input-->
<div class="form-group" style="margin-top: 20px;">
  <label class="col-md-4 control-label" for="textinput">Name</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Sati" class="form-control input-md" required="">    
  </div>
</div>
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="sati@gmail.com" class="form-control input-md" required="">
    
  </div>
</div>
<br>    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Subject</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Subject..." class="form-control input-md" required="">
    
  </div>
</div>
<br>    
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Message</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Hello ..." class="form-control input-md" required="">
    
  </div>
</div>
<br>    
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" style = "green">Submit</button>
  </div>
</div>
    </div> 
 
</fieldset>
</form>
<br>
<br>
<br>
<br>

<br>
<br>

 
 <footer id="myFooter" style="background-color: #DE423A;">  
        <div class="container" >
            <div class="row">
                       <div class="col-sm-2">
<!--
                    <br>
                    <h2 class="logo"><a href="#"> LOGO </a></h2>
                    <img class="img-rounded" src="images/logo.png">
-->
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default" > <a href="contact.html" style="color:#DE423A;">Contact us</a>
    
</button>
                </div>
            </div>
        </div>
      <br>
    </footer>

</body>
</html>
