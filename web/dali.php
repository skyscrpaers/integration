
<?php



require_once "../core/cartC.php";
session_start();

$db=config::getConnexion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SkyScapers Online Shopping Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<!-- web fonts -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->
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
</head>
<body>
  <!-- for bootstrap working -->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
  <!-- //for bootstrap working -->
  <!-- header modal -->
    <!--  <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;</button>
          <h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
        </div>
    <div class="modal-body modal-body-sub">
          <div class="row">
            <div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
              <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                  <ul>
                    <li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>

                  </ul>
                  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                    <div class="facts">
                      <div class="register">
                        <form action="#" method="post">
                          <input name="Email" placeholder="Email Address" type="text" required="">
                          <input name="Password" placeholder="Password" type="password" required="">
                          <div class="sign-up">
                            <input type="submit" value="Sign in"/>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                    <div class="facts">
                      <div class="register">

                        <form action="#" method="post">


                          <input placeholder="Name" name="Name" type="text" required="">
                          <input placeholder="Email Address" name="Email" type="email" required="">
                          <input placeholder="Password" name="Password" type="password" required="">
                          <input placeholder="Confirm Password" name="Password" type="password" required="">
                          <div class="sign-up">
                            <input type="submit" value="Create Account"/>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
              <script type="text/javascript">
                $(document).ready(function () {
                  $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                  });
                });
              </script>
              <div id="OR" class="hidden-xs">OR</div>
            </div>
            <div class="col-md-4 modal_body_right modal_body_right1">
              <div class="row text-center sign-with">
                <div class="col-md-12">
                  <h3 class="other-nw">Sign in with</h3>
                </div>
                <div class="col-md-12">
                  <ul class="social">
                      <li><a href="deconnexion.php"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                    <li class="social_facebook"><a href="https://www.facebook.com/mido.zalila" class="entypo-facebook"></a></li>
                    <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                    <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                    <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    $('#myModal88').modal('show');
  </script>
  <!-- header modal -->
  <!-- header -->
  <div class="header" id="home1">
    <div class="container">
      <div class="w3l_login">
        <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
      </div>
      <div class="w3l_logo">
        <h1><a href="index.php">SkyScapers<span>Your stores. Your place.</span></a></h1>
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
        <form action="checkout.html" method="post" class="last">

          <input type="hidden" name="display" value="1" />
          <button  <a class="w3view-cart" href="checkout.php"  type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>></a> </button>
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
            <li><a href="index.html" class="act">Home</a></li>
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
                      <img src="images/1.jpg" alt=" " class="img-responsive" />
                    </div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </ul>
            </li>
            <li><a href="about.html">About Us</a></li>
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
  <!--//header-->
  <!--breadcrumbs-->
  <div class="breadcrumbs">
    <div class="container">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
        <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Acceuil</a></li>
        <li class="active">Commandes</li>
      </ol>
    </div>
  </div>
  <!--//breadcrumbs-->
  <!--cart-items-->
  <div class="cart-items">
    <div class="container">
      <h3 class="wow fadeInUp animated" data-wow-delay=".5s">Panier</h3>

<table>  
    <tr>
           <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings"><tr>
                                    <th>login</th>
                                    <th>nom</th>
                                    
                                    <th>prix</th>
                              <th>quantite</th>
                              <th>total</th>
                              <th>supp</th>
                              <th>modifier</th>

                              
                           
    </tr>

  <?PHP

$panier=new cartC();
$e=0;
$v=0;
$h=0;
$j;




//var_dump($listeEmployes->fetchAll());

$sql="SElECT * from cart ";
    
        $db = config::getConnexion();
    
                foreach  ($db->query($sql) as $row)
                {
  ?>
  <tr>
  <td><?PHP echo $row['login']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prix']; ?> %</td>
  <td><?PHP echo $row['quantite']; ?></td>
  <td><?PHP  echo number_format($row['prix']* $row['quantite']); ?></td>

  <td><form method="POST" action="supprimerpanier.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
  </form>
  <td><form method="POST" action="modifierpanier.php">
  <input type="submit" name="modifier" value="modifier la quantite">
  <input type="text" value="<?PHP echo $row['quantite']; ?>" name="quantite">
  <input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
  <input type="hidden" value="<?PHP echo $row['prix']; ?>" name="prix">
  </form>
  <form method="POST" action="ajoutcommande.php">
      <input type="submit" name="valider">

  
  </tr>




<?php }$e++;?>

<?php
 if($e==0)
 echo "<div class='alert alert-block alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>
                        <i class='ace-icon fa fa-times'></i>
                         </button>
                        <i class='ace-icon fa fa-check green'></i>
               <center>Votre panier est
                <strong class='green'>vide</strong>
                </center></div>";

?>

</table>
<?php if($v==0)
{   ?>
    <form method="POST" action="ajoutcommande.php">
      <input type="submit" name="valider">
      <br><br>
      <a href="products.php">Retourner vers la liste des produits</a>

<?php } $v++;

?>
      </form>
    </div>
  </div>
  <!--//cart-items-->
  <!--footer-->

  <!--//footer-->

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
  <!-- footer -->
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
            <li><a href="index.html">Home</a></li>
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
          <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
        </div>
      </div>
      <div class="container">
        <p>&copy; 2017 Electronic Store. All rights reserved.</p>
      </div>
    </div>
  </div>
  <!-- //footer -->
  <!-- cart-js -->
  <script src="js/minicart.js"></script>
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
