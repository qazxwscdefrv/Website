<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
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
<form class="form-horizontal" id="form"  action="save_user.php" method="post">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Register</legend>
<br>
    <div class=" container tt1">
<!-- Text input-->
<div class="form-group" style="margin-top: 20px;">
  <label class="col-md-4 control-label" for="textinput">First name</label>  
  <div class="col-md-4">
  <input id="name" name="login" type="text" placeholder="Yerlan" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last name</label>  
  <div class="col-md-4">
  <input id="lname" name="lname" type="text" placeholder="Kassenov" class="form-control input-md" required="">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="yerlan@mail.com" class="form-control input-md" required="">
    
  </div>
</div>
    
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Phone number</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="8(747)639-58-38" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter your password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirm password </label>
  <div class="col-md-4">
    <input id="repeat" name="repeat" type="password" placeholder="Repeat your passwor" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input id="singlebutton" type="submit" name="submit" onclick="valid(document.getElementById('form'))" class="btn btn-primary" value="Register">
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
    <script>
            function valid(form){ 
            var fail=false; 
            var name=form.name.value; 
            var lname=form.lname.value; 
            var email=form.email.value; 
            var phone=form.phone.value; 
            var passwor=form.passwor.value; 
            var repeat=form.repeat.value; 
                
            if(name == ""){ 
                fail = "Please enter your Name " ; 
            } 
                else if(lname == ""){ 
                    fail = "Please enter your Last name " ; 
                } 
                
                else if( email == ""){ 
                    fail = "Please enter your E-mail " ; 
                } 
                    else if( phone == ""){ 
                    fail = "Please enter your Phone number " ; 
                } 
                    else if( passwor == ""){ 
                    fail = "Please enter your Password " ; 
                } 
                    else if( repeat == ""){ 
                    fail = "Please enter your Confirm password  " ; 
                } 
                
                
                if(fail){ 
                    alert(fail); } 

} 
         


    </script>



 <footer id="myFooter" style="background-color: #DE423A;">  
        <div class="container" >
            <div class="row">
                <div class="col-sm-2">
                    <br>
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
