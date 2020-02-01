<!DOCTYPE html>
<html lang="en">
<head>
  <title>Damac Maison Royale The Distinction</title>
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
  <script src="js/jsc.js"></script>

</head>
<body>
 
<nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #EE524A;"  >
<!--        data-spy="affix" data-offset-top="20"-->
  <a class="navbar-brand" href="#"><img class="img-rounded" src="images/logo.png" width="120" height="35" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"  style="color: white;" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="book.html"> Book </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
         Hotels
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="hotel1.html">Palazzo Versace Dubai</a>
          <a class="dropdown-item" href="hotel2.html">First Central Hotel Apartments</a>
          <a class="dropdown-item" href="hotel3.html">JA Ocean View Hotel</a>
             <a class="dropdown-item" href="hotel4.html">Dusit Thani</a>
          <a class="dropdown-item" href="hotel5.html">Damac Maison Royale The Distinction</a>
          <a class="dropdown-item"  href="hotel6.html">Roda Al Murooj Hotel</a>
        </div>
      </li>
         <li class="nav-item">
        <a class="nav-link" style="color: white;" href="contact.html">Contact</a>
      </li>
         
    </ul>       <ul class=" navbar-nav navbar-right" >
      <li class="nav-item " >
        <a class="nav-link " style="color: white;" href="login.html">Login</a>
      </li>
         <li class="nav-item">
        <a class="nav-link " style="color: white;" href="register.html">Registration</a>
      </li>
      </ul>
   
  </div>
</nav>

  
<div class="container text-center">
<h1 class="names"> Damac Maison Royale The Distinction </h1>
    <br>

    
    <div id="slides">
	
	<div class="slide showing img-rounded"><img class="img-rounded" src="images/H5.2.jpg" width="1135" height="470" ></div>
 
    <div class="slide "> <img  class="img-rounded" src="images/H5.1.jpg" width="1132" height="470"></div> 
    <div class="slide "> <img  class="img-rounded" src="images/H5.3.jpg"  width="1132" height="470" ></div> 
    </div>
   <br>
    <br> <br>
    <br>
    <button class="w3-button w3-black w3-display-left" onclick="prevSlide()">&#10094;</button>
<button class="but glyphicon glyphicon-play" onclick="playSlideshow()"></button>
<button class="but glyphicon glyphicon-pause" onclick="pauseSlideshow()"></button>
   
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
<div class="container tt"> <h1 class="names text-center">Damac Maison Royale The Distinctionl </h1>
  <p>Situated in Dubai, JA Ocean View Hotel provides stylish, 5-star accommodation close to Al Bateen Tower. The various amenities this modern hotel has to offer include a sauna, a swimming pool and free Wi-Fi.  
    </p>
    <p>Tshere are a range of facilities on offer to guests of JA Ocean View Hotel, including a free shuttle service, a beauty centre and an executive floor. Guests can also enjoy free private parking on site. Recreational facilities include miniature golf. 
    </p>
    <p>The rooms are equipped with a coffee maker, a private balcony and slippers, and showcase views of the sea. All are air conditioned and provide a sofa bed, a seating area and a flat-screen TV. 

        </p>
    <p>Those staying at JA Ocean View Hotel can enjoy a drink at Girders, before savouring a meal at Le Rivage. Guests can also order from the extensive drinks menu at P25 - The Top.  </p></div>
  <!--body-->
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
   <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Luxury Room</div>
        <div class="panel-title"><img src="images/r5.1.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer"> Luxury Room.  <a href="book.html">Book...</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
  <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Deluxe Room</div>
        <div class="panel-title"><img src="images/r5.2.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer"> Deluxe Room.    <a href="book.html">Book...</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
  <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Premier Room</div>
        <div class="panel-title"><img src="images/r5.3.jpg" class="img-responsive"  alt="Image"></div>
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
        <div class="panel-title"><img src="images/r5.4.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer">Double Room.  <a href="book.html">Book...</a>  </div>
      </div>
    </div>
    <div class="col-sm-4"> 
    <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Single Room</div>
        <div class="panel-title"><img src="images/r5.5.jpg" class="img-responsive"  alt="Image"></div>
        <div class="panel-footer">Single Room.   <a href="book.html">Book...</a>  </div>
      </div>
    </div>
    <div class="col-sm-4"> 
  <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading">Twin Room</div>
        <div class="panel-title"><img src="images/r5.6.jpg" class="img-responsive" s alt="Image"></div>
        <div class="panel-footer">Twin Room.     <a href="book.html">Book...</a>  </div>
      </div>
    </div>
  </div>
</div><br><br>

 <footer id="myFooter" style="background-color: #DE423A;">  
        <div class="container" >
            <div class="row">
                  <div class="col-sm-2">
                    <br>
<!--
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
