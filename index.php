<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Yeti Redi</title>

    <script> 
      function validateForm() {
          if (document.forms[0].myEmail.value == "" ) {
                alert("Please enter an e-mail address.");
                return false;
          } // end if
          return true;
      } // end function validateForm
      </script>

      <style>
        h1 {
          color: #000;
        }
      </style>

<?php wp_head(); ?>

</head>
<body>

<?php
  require_once("header.php");
?>

<div class="hero-carousel">
  <img src="images/hiking.jpg" alt="Image 1">
  <img src="images/walking.jpg" alt="Image 2" class="second-image">
  <img src="images/kid.jpg" alt="Image 3">
  <a href="https://www.example.com" class="shop">Shop</a>
  <a href="#" class="shop">Shop</a>
  <a href="#" class="shop">Shop</a>

  <h1 class="cta">Shop our <br>outdoor<br> essentials <br>today</h1>
</div>

  <div class="container">

    <div><h1>Why Yeti</h1></div>

    <div><img src="images/Strawberries .jpg" alt="strawberries"></div>

    <div>
      Here at Yeti Reti, we take pride in 
      our unique features that make it stand out 
      from other outdoor food options. <br><br>
      Our freeze-dried meals taste just like home-cooked meals, 
      making them a perfect choice for those who crave the comfort 
      of homemade food while on outdoor adventures.
    </div>

    <div>
      Yeti meals are easily accessible for all outdoor activities, whether 
      you're hiking, camping, or enjoying a day out in nature. They are 
      lightweight and easy to pack, making them a great on-the-go option.<br><br> 
      We offer fresh ingredients that provide a healthy and delicious meal 
      option for those in the great outdoors.
    </div>

    <div><img src="images/Skizzels .jpg" alt="freeze dried skittles"></div>


    <div><h1>What is yeti</h1></div>

    <div>
      Yeti Redi is a freeze-dried food company that not only offers 
      quality outdoor food products, but also strives to educate its 
      customers on the benefits of freeze-dried food. Their mission is 
      to provide convenient and nutritious meal options for outdoor 
      enthusiasts, while also promoting responsible outdoor practices.
    </div>


    <div>
      In addition to offering a range of freeze-dried meals and 
      snacks, Yeti Redi aims to empower customers with the knowledge 
      and tools to make informed decisions about their outdoor food choices. 
      They are committed to using high-quality ingredients ensuring that 
      their products are not only delicious but also quality.
    </div>

    <div>
      Whether you're planning a multi-day backpacking trip or a day hike in the 
      mountains, Yeti Redi's freeze-dried meals provide a convenient and satisfying 
      option for all your outdoor adventures.
    </div>


    <div><h1>Check us out</h1></div>

    <div class="product-image">
      <a href="#"><img src="images/Taffy Puffs .jpg" alt="freeze dried laffy taffy"></a>
    </div>

    <div class="product-image">
      <a href="#"><img src="images/Bit - O - Honeys .jpg" alt="freeze dried honey candy"></a>
    </div>

    
      <div class="product-image">
       <a href="#"> <img src="images/Galaxy Burts .jpg" alt="freeze dried starbursts"></a>
      </div>

    
    <div class="quick-link"><a href="#">Taffy puffs</a></div>

    <div class="quick-link"><a href="#">Bit-o-honey</a></div>

    <div class="quick-link"><a href="#">Galaxy Burts</a></div>

  </div>

<div class="news-container">
  <div><h1>Stay in the know</h1></div>
  <div>sign up for our news letter!</div>
</div>

<form method="post" onsubmit="return validateForm();" action="https://computing.utahtech.edu/web/1400/mail.php">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname">

  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname">

  <label for="myEmail">* E-mail:</label>
  <input type="text" id="myEmail" name="myEmail">

  <input type="submit" value="Submit" id="mysubmit">
</form>

<?php
  require_once("footer.php");
?>

  
</body>
</html>