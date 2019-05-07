<!DOCTYPE html>
<html>
<title>NexShop a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown -->
<!-- //js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <?php session_start();
  if (empty($_SESSION))
  {header("location:index.php");}?>
  <!-- header -->
  <div class="header" id="home1">
    <div class="container">
      <div class="w3l_login">
        <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
      </div>
      <div class="w3l_logo">
        <h1><a href="index.php">NexShop Store<span>Your stores. Your place.</span></a></h1>
      </div>
      <div class="search">
        <input class="search_box" type="checkbox" id="search_box">
        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
        <div class="search_form">
          <form action="#" method="post">
            <input type="text" name="Search" placeholder="Search...">
            <input type="submit" value="Send">
          </form>
        </div>
      </div>
      <div class="cart cart box_1">
        <form action="#" method="post" class="last">
          <input type="hidden" name="cmd" value="_cart" />
          <input type="hidden" name="display" value="1" />
          <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
  </div>
  <!-- //header -->
  <!-- navigation -->
  <div class="navigation">
    <div class="container">
      <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <!-- Mega Menu -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <h6>Mobiles</h6>
                      <li><a href="products.html">Mobile Phones</a></li>
                      <li><a href="products.html">Mp3 Players <span>New</span></a></li>
                      <li><a href="products.html">Popular Models</a></li>
                      <li><a href="products.html">All Tablets<span>New</span></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <ul class="multi-column-dropdown">
                      <h6>Accessories</h6>
                      <li><a href="products1.html">Laptop</a></li>
                      <li><a href="products1.html">Desktop</a></li>
                      <li><a href="products1.html">Wearables <span>New</span></a></li>
                      <li><a href="products1.html"><i>Summer Store</i></a></li>
                    </ul>
                  </div>
                  <div class="col-sm-2">
                    <ul class="multi-column-dropdown">
                      <h6>Home</h6>
                      <li><a href="products2.html">Tv</a></li>
                      <li><a href="products2.html">Camera</a></li>
                      <li><a href="products2.html">AC</a></li>
                      <li><a href="products2.html">Grinders</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <div class="w3ls_products_pos">
                      <h4>30%<i>Off/-</i></h4>
                      <img src="../images/1.jpg" alt=" " class="img-responsive" />
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </ul>
            </li>
            <li><a href="about.html" class="act">About Us</a></li>
            <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="icons.html">Web Icons</a></li>
                <li><a href="codes.html">Short Codes</a></li>
              </ul>
            </li>
            <li><a href="mail.html">Mail Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- //navigation -->
  <center>
<div class="w3-container">
  <h2>Votre carte fidèlité</h2>

  <div class="w3-card-4" style="width:40%">
    <header class="w3-container w3-light-grey">
      <h3><?php echo $_SESSION['nom'] ?> <?php echo $_SESSION['prenom'] ?></h3>
    </header>
    <div class="w3-container">
      <p>Nouveau Client fidèle Chez NexShop</p>
      <hr>
      <img src="mann.png" alt="Avatar">
      <p>points fidelités: 0 (Faites des achats pour augmenter vos points et gagnez des bandes d'achats) </p><br>
    </div>
    <a class="w3-button w3-block w3-dark-grey" href="index.php">Retour à la page d'acceuil</a>
  </div>
</div>
<br>
<br>

  </center>
<!-- newsletter -->
<div class="newsletter">
  <div class="container">
    <div class="col-md-6 w3agile_newsletter_left">
      <h3>Newsletter</h3>
      <p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
    </div>
    <div class="col-md-6 w3agile_newsletter_right">
      <form action="#" method="post">
        <input type="email" name="Email" placeholder="Email" required="">
        <input type="submit" value="" />
      </form>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //newsletter -->
<div class="footer">
  <div class="container">
    <div class="w3_footer_grids">
      <div class="col-md-3 w3_footer_grid">
        <h3>Contact</h3>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
        <ul class="address">
          <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
          <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
          <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>Information</h3>
        <ul class="info">
          <li><a href="about.html">About Us</a></li>
          <li><a href="mail.html">Contact Us</a></li>
          <li><a href="codes.html">Short Codes</a></li>
          <li><a href="faq.html">FAQ's</a></li>
          <li><a href="products.html">Special Products</a></li>
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>Category</h3>
        <ul class="info">
          <li><a href="products.html">Mobiles</a></li>
          <li><a href="products1.html">Laptops</a></li>
          <li><a href="products.html">Purifiers</a></li>
          <li><a href="products1.html">Wearables</a></li>
          <li><a href="products2.html">Kitchen</a></li>
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>Profile</h3>
        <ul class="info">
          <li><a href="index.php">Home</a></li>
          <li><a href="products.html">Today's Deals</a></li>
        </ul>
        <h4>Follow Us</h4>
        <div class="agileits_social_button">
          <ul>
            <li><a href="#" class="facebook"> </a></li>
            <li><a href="#" class="twitter"> </a></li>
            <li><a href="#" class="google"> </a></li>
            <li><a href="#" class="pinterest"> </a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
  <div class="footer-copy">
    <div class="footer-copy1">
      <div class="footer-copy-pos">
        <a href="#home1" class="scroll"><img src="../images/arrow.png" alt=" " class="img-responsive" /></a>
      </div>
    </div>
  </div>
</div>
<!-- //footer -->
<!-- cart-js -->
<script src="../js/minicart.js"></script>
<script>
      w3ls.render();

      w3ls.cart.on('w3sb_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
          items = this.items();

          for (i = 0, len = items.length; i < len; i++) {
          }
        }
      });
  </script>
<!-- //cart-js -->
</body>
</html>
