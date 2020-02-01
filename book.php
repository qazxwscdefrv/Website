<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book</title>
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
    
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="footer.css">
   
 
    <link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/bootstrap.css"> 
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css"> 
    
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css.."> 
<link rel="stylesheet" href="footer.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.."></script> 
<script> 
$(document).ready(function(){ 
$("input").focus(function(){ 
$("span").css("display", "inline").fadeOut(4000); 

}); 
}); 
</script> 
<style> 
span { 
display: none; 

</style>
    
    
    
</head>
<body>
<?php include 'header.php';?>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Book a Hotel</legend>

<!-- Text input-->
    <div class="container tt1">
<div class="form-group " style="margin-top: 20px;">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Yerlan" class="form-control input-md" required="">
    
  </div><span>Please write the information correctly!</span>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emailaddress">Email Address</label>  
  <div class="col-md-4">
  <input id="emailaddress" name="emailaddress" type="text" placeholder="Yerlan@gmail.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone Number</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" type="text" placeholder="8(747)639-58-38" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tourselection">Hotel Name</label>
  <div class="col-md-4">
    <select id="tourselection" name="tourselection" class="form-control">
      <option value="1">Palazzo Versace Dubai</option>
      <option value="2">First Central Hotel Apartments</option>
      <option value="3">JA Ocean View Hotel</option>
      <option value="4">Dusit Thani</option>
         <option value="3">Damac Maison Royale The Distinction</option>
      <option value="4">Roda Al Murooj Hotel</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="airboatsize">Rooms</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="airboatsize-0">
      <input type="radio" name="airboatsize" id="airboatsize-0" value="1" checked="checked">
      Luxury Room
    </label>
    </div>
  <div class="radio">
    <label for="airboatsize-1">
      <input type="radio" name="airboatsize" id="airboatsize-1" value="2" checked="checked">
      Deluxe Room
    </label>
      </div>
        <div class="radio">
        <label for="airboatsize-2">
      <input type="radio" name="airboatsize" id="airboatsize-0" value="3" checked="checked">
      Premier Room
    </label>
    </div>
  <div class="radio">
    <label for="airboatsize-3">
      <input type="radio" name="airboatsize" id="airboatsize-1" value="4" checked="checked">
      Double Room
    </label>
      </div>
        <div class="radio">
        <label for="airboatsize-4">
      <input type="radio" name="airboatsize" id="airboatsize-0" value="5" checked="checked">
         Single Room
    </label>
    </div>
  <div class="radio">
    <label for="airboatsize-5">
      <input type="radio" name="airboatsize" id="airboatsize-1" value="6" checked="checked">
      Twin Room
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">Number of People</label>  
  <div class="col-md-4">
  <input id="quantity" name="quantity" type="text" placeholder="1-8 " class="form-control input-md">
    
  </div>
</div>
       <form id="form1" runat="server">  
 <div class="form-group"> 
<label class="col-md-4 control-label" for="name">Date of arrival</label> 
<div class="col-md-4"> 
<input id="txtDate1" name="txtDate" type="text" placeholder="Date" class="form-control input-md" required=""> 

</div> 
</div>
        </form>

<form id="form1" runat="server"> 
<div class="form-group"> 
<label class="col-md-4 control-label" for="name">Date of departure</label> 
<div class="col-md-4"> 
<input id="txtDate" name="txtDate" type="text" placeholder="Date" class="form-control input-md" required=""> 

</div> 
</div>
</form>
        

<script type="text/javascript"> 
$(function () { 
$("[id$=txtDate]").datepicker({ dateFormat: 'dd-mm-yy' }); 
}); 
    $(function () { 
$("[id$=txtDate1]").datepicker({ dateFormat: 'dd-mm-yy' }); 
});
    
    
  
    
</script>
        
<!-- Button -->
<div class="form-group" action="">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="submit" style = "green">Submit</button>
  </div>
</div>
    </div>
  
    <script>
      
    
    $(document).ready(function(){
    $("form").submit(function(){
        alert("Submitted");
    });
});
    
    </script>
    


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
