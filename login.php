<!--

?php
	$error = "";
	if(isset($_POST['username'],$_POST['password'])){
		$user = array(
						"user"=> "sati",
						"pass"=>"12345"			
				);
		$username = $_POST['username'];
		$pass = $_POST['password'];
		if($username == $user['user'] && $pass == $user['pass']){
			session_start();
			$_SESSION['simple_login'] = $username;
            
            
                header("Location: book.php");
			echo '{"error":0}';
		}else{
			echo '{"error":1}';
		}
		exit();
	}
?
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
<!-- Form Name -->
<legend class="text-center">Login</legend>

<div class=" container tt1">

<!-- Text input--
<div class="form-group" style="margin-top: 20px;">
  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="sati@gmail.com" class="form-control input-md" required="">
    
  </div>
</div>
<br>    

<!-- Text input--
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Password</label>  
  <div class="col-md-4">
  <input  id="passwor" name="passwor" type="password" placeholder="Enter your password" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Button --
<!-- Button --
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input id="singlebutton" type="button" onclick="valid(document.getElementById('form'))" class="btn btn-primary"  value="Login">
  </div>
</div>
    -->
	
      <div align = "center">
         
            <div style = " padding:3px;"></div>
				
            <div style = "margin:30px">
               
               <form action="testreg.php" method="post">
                  <label>UserName  :</label><input type = "text" name = "login" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login "/><br />
               </form>
<!--
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
-->
					
<!--
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
-->
					
            </div>
				
         </div>
			
      </div>
   
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

   <script>
            function valid(form){ 
            var fail=false; 
            var name=form.name.value; 
            var pass=form.passwor.value; 
            if(name == ""){ 
                fail = "Please enter your name " ; 
            } 
                else if(pass == ""){ 
                    fail = "Please enter your password " ; 
                } 
                if(fail){ 
                    alert(fail); } 

} 
         


    </script>

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
