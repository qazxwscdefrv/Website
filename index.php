<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel</title>
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
    
</head>
<body>
<?php include 'header.php';?>

<div class="container text-center" >
<div class="container-fluid col-sm-12 text-center" > 
<div id="slideer"> 
<div class="active th"> 
<img  src="images/H1.1.jpg" style="width:90%"> 
</div> 
<div class="slide th"> 
<img class="imgs" src="images/H1.2.jpg" style="width:90%"> 
</div> 
<div class="slide th"> 
<img class="imgs" src="images/H1.3.jpg" style="width:90%"> 
</div> <br>
<div class="row"> 
<div class="container-fluid col-md-12 text-center wrap"> 
<button  onclick="prevSlide()"><span class="glyphicon glyphicon-fast-backward"></span></button> 
<button onclick="playSlideshow()"><span class="glyphicon glyphicon-play"></span></button> 
<button  onclick="pauseSlideshow()"><span class="glyphicon glyphicon-pause"></span></button> 
<button onclick="nextSlide()"><span class="glyphicon glyphicon-fast-forward"></span></button> 
</div> 
</div> 
</div> 
    </div></div>

    
    <!--
<div class="container text-center">

<div id="slides">
	
	<div class="slide showing img-rounded"><img class="img-rounded" src="images/slider1.jpg " style="width:104%;"></div>
    <div class="slide "> <img  class="img-rounded" src="images/slider2.jpg" style="width:104%;" ></div> 
     </div>
  
    <button class="w3-button w3-black w3-display-left " onclick="prevSlide()">&#10094;</button>
<button  class="but glyphicon glyphicon-play " onclick="playSlideshow()"></button>
<button class="but glyphicon glyphicon-pause" onclick="pauseSlideshow()"></button>
   
  <button class="w3-button w3-black w3-display-right" onclick="nextSlide()">&#10095;</button>

</div>
-->

<script>
var slides = document.querySelectorAll('#slideer .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,3000);



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
	slideInterval = setInterval(nextSlide,3000);
}

pauseButton.onclick = function(){
	if(playing){ pauseSlideshow(); }
	else{ playSlideshow(); }
};

    
    
</script>  
<!--
    <div class="tt "> <h1 class="names text-center">About Us </h1>
    <div class="t text-center"><p>Situated in Dubai, JA Ocean View Hotel provides stylish, 5-star accommodation close to Al Bateen Tower. The various amenities this modern hotel has to offer include a sauna, a swimming pool and free Wi-Fi.  
    </p>
    <p>Tshere are a range of facilities on offer to guests of JA Ocean View Hotel, including a free shuttle service, a beauty centre and an executive floor. Guests can also enjoy free private parking on site. Recreational facilities include miniature golf. 
    </p>
    
    <p>Those staying at JA Ocean View Hotel can enjoy a drink at Girders, before savouring a meal at Le Rivage. Guests can also order from the extensive drinks menu at P25 - The Top.  </p></div>
    </div>
-->
    <br>
 
    <div class="container tt" >
     
         
            <p>
    <p>Tshere are a range of facilities on offer to guests of JA Ocean View Hotel, including a free shuttle service, a beauty centre and an executive floor. Guests can also enjoy free private parking on site. Recreational facilities include miniature golf. 
    </p>
    <p>The rooms are equipped with a coffee maker, a private balcony and slippers, and showcase views of the sea. All are air conditioned and provide a sofa bed, a seating area and a flat-screen TV. 

        </p>
            <p>The rooms are equipped with a coffee maker, a private balcony and slippers, and showcase views of the sea. All are air conditioned and provide a sofa bed, a seating area and a flat-screen TV. 

        </p>
             <p>Tshere are a range of facilities on offer to guests of JA Ocean View Hotel, including a free shuttle service, a beauty centre and an executive floor. Guests can also enjoy free private parking on site. Recreational facilities include miniature golf. 
    </p>
             <p>Tshere are a range of facilities on offer to guests of JA Ocean View Hotel, including a free shuttle service, a beauty centre and an executive floor. Guests can also enjoy free private parking on site. Recreational facilities include miniature golf. 
    </p>
            </div>
    
    
    
    <br>

    <!--body-->
<div class="container">    
  <div class="row" >
    <div class="col-sm-4">
      <div class="panel " style="background-color: #DF433B;"> 
        <div class="panel-heading" style="color:white">Palazzo Versace Dubai</div>
        <div class="panel-title" ><img src="images/H1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer" style="background-color:white">This luxury hotel in Dubai offers complimentary Wi-Fi, as well as a butler service and an infinity pool.   <a href="Hotels/hotel1.html">More...</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel" style="background-color: #DF433B;">
        <div class="panel-heading" style="color:white">First Central Hotel Apartments</div>
        <div class="panel-title"><img src="images/H2.jpg" class="img-responsive" style=" width:100%" alt="Image"></div>
        <div class="panel-footer"> First Central Hotel Apartments provides 4-star accommodation, as well as a rooftop pool.     <a href="hotel1.html">More...</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel " style="background-color: #DF433B;">
        <div class="panel-heading" style="color:white">JA Ocean View Hotel </div>
        <div class="panel-title"><img src="images/H3.jpg" class="img-responsive"  width="400" alt="Image"></div>
        <div class="panel-footer">   Situated in Dubai, JA Ocean View Hotel provides stylish, 5-star accommodation close to Al Bateen Tower.   <a href="hotel1.html">More...</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel " style="background-color: #DF433B;">
        <div class="panel-heading" style="color:white">Dusit Thani</div>
        <div class="panel-title"><img src="images/H4.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Featuring a rooftop pool and a limousine service, Dusit Thani is a luxurious place to stay in Dubai.   <a href="hotel1.html">More...</a>  </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel " style="background-color: #DF433B;">
        <div class="panel-heading" style="color:white">Damac Maison Royale The Distinction</div>
        <div class="panel-title"><img src="images/H5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Conveniently located in the centre of the city, this 5-star hotel makes for an excellent base in Dubai.    <a href="hotel1.html">More...</a>  </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel " style="background-color: #DF433B;">
        <div class="panel-heading" style="color:white">Roda Al Murooj Hotel</div>
        <div class="panel-title"><img src="images/H6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Boasting a swimming pool, a Jacuzzi and outdoor tennis courts, Roda Al Murooj Hotel is located in Dubai.     <a href="hotel1.html">More...</a>  </div>
      </div>
    </div>
  </div>
</div><br><br>
<a href="#" class=" scrollToTop " ><img class="img-rounded" src="images/aa.png"> </a>
  
<!--    Scroll top-->
    
    <script>
    $(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});</script>
    
    
    <hr>
     <br>
     <br>
<!--

<form name="upload" action="upload.php" method="POST" ENCTYPE="multipart/form-data"> 
Select the file: 
<input type="file" name="userfile" > 
<input type="submit" name="upload" value="Upload"> 
</form>
    <br>
       
-->
    <div class="container" style="width:900px;">  
   <h3 align="center">Ajax Image Insert Update Delete in Mysql Database using PHP</h3>  
   <br />
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success">Add</button>
   </div>
   <br />
   <div id="image_data">

   </div>
  </div>  
 </body>  
</html>

<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Image</h4>
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Select Image</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
      
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
 
<script>  
$(document).ready(function(){
 
 fetch_data();

 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#image_data').html(data);
   }
  })
 }
 $('#add').click(function(){
  $('#imageModal').modal('show');
  $('#image_form')[0].reset();
  $('.modal-title').text("Add Image");
  $('#image_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#image_form').submit(function(event){
  event.preventDefault();
  var image_name = $('#image').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"action.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form')[0].reset();
      $('#imageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.update', function(){
  $('#image_id').val($(this).attr("id"));
  $('#action').val("update");
  $('.modal-title').text("Update Image");
  $('#insert').val("Update");
  $('#imageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{image_id:image_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});  
</script>

    
    
    
     <br>
     <br>
     <br>
     <br>
    <hr>
    
    <br>
    <br>
     <div class="container">
    <?php


if (isset($_SESSION['login'])) { //if sid exists and login for sid exists
  
?>
         <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
        
    </div>
   </form>
         <h2>Comment</h2>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
   
     <?php

} else {

  echo "Hi, if you want to leave a comment, you need to log in !!!";

?> <h2>Comment</h2>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
      
    
<?php 

}

?>
         </div>
   
    <script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>


    
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
