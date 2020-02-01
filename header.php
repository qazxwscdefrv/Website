
    <nav  class="navbar navbar-expand-lg navbar-light" style="background-color: #EE524A;"  >
<!--        data-spy="affix" data-offset-top="20"-->
  <a class="navbar-brand" href="#"><img class="img-rounded" style="margin-top: -7px;" src="images/logo.png" width="120" height="35" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link"  style="color: white;" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: white;" href="book.php"> Book </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
         Hotels
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="hotel1.php">Palazzo Versace Dubai</a>
          <a class="dropdown-item" href="hotel2.php">First Central Hotel Apartments</a>
          <a class="dropdown-item" href="hotel3.php">JA Ocean View Hotel</a>
             <a class="dropdown-item" href="hotel4.php">Dusit Thani</a>
          <a class="dropdown-item" href="hotel5.php">Damac Maison Royale The Distinction</a>
          <a class="dropdown-item"  href="hotel6.php">Roda Al Murooj Hotel</a>
        </div>
      </li>
         <li class="nav-item">
        <a class="nav-link" style="color: white;" href="contact.php">Contact</a>
      </li>
         
    </ul>      
         <?php


if (session_id() == '' || !isset($_SESSION['login'])) { //if sid exists and login for sid exists
  
?>
      <ul class=" navbar-nav navbar-right" >
   
      <li class="nav-item " >
        <a class="nav-link " style="color: white;" href="login.php">Login</a>
      </li>
         <li class="nav-item">
        <a class="nav-link " style="color: white;" href="register.php">Registration</a>
      </li>
      </ul>
      
      <?php

} else {

  echo "Hi, " . $_SESSION['login'];

?>
       <ul class=" navbar-nav navbar-right" >
   
      <li class="nav-item " >
          
        <a class="nav-link " style="color: white;" href="logout.php">Logout</a>
      </li>
      </ul>
      

<?php 

}

?>
   
  </div>
</nav>
    