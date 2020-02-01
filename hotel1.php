<!DOCTYPE html>
<html lang="en">
<head>
  <title>Palazzo Versace Dubai</title>
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
<?php include'header.php';?>
  
<div class="container text-center">
<h1 class="names"> Palazzo Versace Dubai </h1>
    <br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



    
    <div id="slides">
	
	<div class="slide showing img-rounded"><img class="img-rounded" src="images/H1.1.jpg" width="1135" height="470" ></div>
    <div class="slide "> <img  class="img-rounded" src="images/H1.2.jpg"  width="1130" height="470" ></div> 
    <div class="slide "> <img  class="img-rounded" src="images/H1.3.jpg" width="1132" height="470"></div> 
    <div class="slide "> <img  class="img-rounded" src="images/H1.4.jpg"  width="1132" height="470" ></div> 
    </div>
   <br>
    <br>
<br>
<br>


<!--  <a class="prev glyphicon glyphicon-menu-left" onclick="prevSlide();"></a>-->
    <button class="w3-button w3-black w3-display-left" onclick="prevSlide()">&#10094;</button>
<button class="but glyphicon glyphicon-play" onclick="playSlideshow()"></button>
<button class="but glyphicon glyphicon-pause" onclick="pauseSlideshow()"></button>
<!--    <a class="next glyphicon glyphicon-menu-right" onclick="nextSlide();"></a>-->
   
  <button class="w3-button w3-black w3-display-right" onclick="nextSlide()">&#10095;</button>

</div>
<script>
var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,2000);


function nextSlide(){
	slides[currentSlide].className = 'slide';
	currentSlide = (currentSlide+1)%slides.length;
	slides[currentSlide].className = 'slide showing';
}

function prevSlide(){
	slides[currentSlide].className = 'slide';
	currentSlide = (currentSlide+slides.length-1)%slides.length;
	slides[currentSlide].className = 'slide showing';
}
var playing = true;

function pauseSlideshow(){
	playing = false;
	clearInterval(slideInterval);
}

function playSlideshow(){
	playing = true;
	slideInterval = setInterval(nextSlide,2000);
}

pauseButton.onclick = function(){
	if(playing){ pauseSlideshow(); }
	else{ playSlideshow(); }
};




</script>


  <hr>
<div class=" container tt"> <h1 class="names text-center"> Palazzo Versace Dubai </h1>
  <p>This luxury hotel in Dubai offers complimentary Wi-Fi, as well as a butler service and an infinity pool. 
       A swimming pool and a limousine service are just some of the luxurious amenities on offer to guests throughout their stay. 
    </p>
    <p>Guests can soak up the outdoors on the terrace or have a beverage at the bar. It offers babysitting services, a currency exchange and a reception that is available 24 hours a day. The hotel also has its very own gym, Gym. 
    </p>
    <p>The rooms are air conditioned and include a coffee maker, a private balcony and a marble bathroom. Deluxe facilities include a flat-screen TV with cable/satellite channels as well as luxury toiletries and a rain shower. 
        </p></div>
   <!--body-->
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Luxury Room</div>
        <div class="panel-title"><img src="images/r1.1.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer"> Luxury Room.  <a href="book.html">Book...</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
<div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Deluxe Room</div>
        <div class="panel-title"><img src="images/r1.5.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer"> Deluxe Room.    <a href="book.html">Book...</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
     <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Premier Room</div>
        <div class="panel-title"><img src="images/r1.3.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer">  Premier Room.   <a href="book.html">Book...</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
<div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Double Room</div>
        <div class="panel-title"><img src="images/r1.6.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer">Double Room.  <a href="book.html">Book...</a>  </div>
      </div>
    </div>
    <div class="col-sm-4"> 
   <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Single Room</div>
        <div class="panel-title"><img src="images/r1.4.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer">Single Room.   <a href="book.html">Book...</a>  </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Twin Room</div>
        <div class="panel-title"><img src="images/r1.2.jpg" class="img-responsive" s alt="Image"></div>
        <div class="panel-footer">Twin Room.     <a href="book.html">Book...</a>  </div>
      </div>
    </div>
  </div>
</div><br><br>

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
