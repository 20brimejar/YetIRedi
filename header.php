<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Yeti Redi</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>


    <script> 
      function validateForm() {
          if (document.forms[0].myEmail.value == "" ) {
                alert("Please enter an e-mail address.");
                return false;
          } // end if
          return true;
      } // end function validateForm
      </script>

</head>
<body>
  <div id="bluebar"></div>

<header class="header">
  <img src="images/yeti.png" alt="logo" class="logo">
  <nav>
    <ul class="menu-items">
      <li>
        <a href="#" class="menuitem">Shop</a>
         <div class="mega-menu">
          <div class="content">
            <div class="col">
              <section>
                <h2>Meals</h2>
                <ul class="mega-links">
                  <li><a href="#">Entrees</a></li>
                  <li><a href="#">Breakfast</a></li>
                  <li><a href="#">Desserts</a></li>
                  <li><a href="#">Vegetarian</a></li>
                </ul>
              </section>
            </div>
            <div class="col">
              <section>
                <h2>Emergency</h2>
                <ul class="mega-links">
                  <li><a href="#">Kits</a></li>
                  <li><a href="#">Meals</a></li>
                </ul>
              </section>
          </div>
          <div class="col">
            <section>
              <h2>Snacks</h2>
              <ul class="mega-links">
                <li><a href="#">Candy</a></li>
                <li><a href="#">Fruit</a></li>
              </ul>
            </section>
         </div>
      </li>
      <li>
        <a href="whyYeti.php" class="menuitem">Why Yeti</a>
      </li>
      <li>
        <a href="about.php" class="menuitem">About</a>
      </li>
      <li>
        <a href="#" class="menuitem">Account</a>
      </li>
    </ul>
  </nav>
</header>