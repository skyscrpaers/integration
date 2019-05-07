
</table>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Electronic store</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="" href=""/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script type="text/javascript" src="controle.js"></script>

</head>
<body class="animsition">
<?php
include "../core/livraisonC.php";
$livraison1C=new LivraisonC();
$listeLivraisons=$livraison1C->afficherLivraisons();
$chauffeur=$livraison1C->getChauffeur($_GET['livreur']);
foreach ($chauffeur as $result) {
	$cin_chauffeur=$result['cin'];
}
?>
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="https://web.facebook.com/nextun//" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
				</div>

				<span class="topbar-child1">
					Bienvenue Chez Electronic store
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						info.nexshop@gmail.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>TND</option>
						</select>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="" alt="">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.html">Vêtement</a>
								<ul class="sub_menu">
										<li><a href="produithomme.html">Homme</a></li>
									<li><a href="produitfemme.html">Femme</a></li>
								</ul>
							</li>
							<li>
								<a href="product.html">Matériel</a>
							</li>

							<li class="sale-noti">
								<a href="product.html">Top Vente</a>
							</li>

							<li>
								<a href="cart.html">Panier</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
					
				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="livraison.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.html">Home</a>
						<ul class="sub-menu">
							<li><a href="index.html">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url();">
		<h2 class="l-text2 t-center">
			
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">Id</th>
							<th class="column-1">Nom</th>
							<th class="column-1">Prenom</th>
							<th class="column-1">Cin</th>
							<th class="column-1">Telephone</th>
							<th class="column-1">E-mail</th>
							<th class="column-1">Adresse</th>
							<th class="column-1">Livreur</th>
							<th class="column-1">Supprimer</th>
							<th class="column-1">Modifier</th>
						</tr>
<?PHP
foreach($listeLivraisons as $row){
    ?>
    <tr>
    <td class="column-1"><?PHP echo $row['id']; ?></td>
    <td class="column-1"><?PHP echo $row['nom']; ?></td>
    <td class="column-1"><?PHP echo $row['prenom']; ?></td>
    <td class="column-1"><?PHP echo $row['cin']; ?></td>
    <td class="column-1"><?PHP echo $row['numero']; ?></td>
    <td class="column-1"><?PHP echo $row['email']; ?></td>
    <td class="column-1"><?PHP echo $row['adresse']; ?></td>
    <td class="column-1"><a href="coordonneesChauffeur.php?livreur=<?PHP echo $row['livreur']; ?>"><?PHP echo $row['livreur'];?></a></td>
    <td class="column-1"><form method="POST" action="supprimerLivraison.php">
    <button><img src="https://img.icons8.com/dusk/64/000000/cancel.png"></button>
    <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
    </form>
    </td>
    <td class="column-1">
    	<a href="modifierLivraison.php?id=<?PHP echo $row['id']; ?>" >
    <img src="https://img.icons8.com/dusk/64/000000/multi-edit.png"></a></td>
    </tr>
    <?PHP
}
?>
					</table>
				</div>
			</div>


			<!-- Total -->
		</div>
	</section><section class="main-container col2-right-layout wow bounceInUp animated">
  <div class="main container">
    <div class="row">
      <section class="col-main col-sm-9">
        <div class="page-title">

	<h2> Paiement</h2>
       <?php
      
     // $prix=$_POST['total'];
      
/* Les variables suivantes doivent être personnalisées selon vos besoins */
  $email_paypal= 'payments@AutoTop.com';/*email associé au compte paypal du vendeur*/
  $item_numero = '04AAA'; /*Numéro du produit en vente*/
  $item_prix   = '259.99';    /*prix du produit*/
  $item_nom    = 'Lipstick+porefection'; /*Nom du produit*/
  $url_retour='http://www.memo-web.fr/paypal-remerciement.php';/*page de remerciement à créer*/
  $url_cancel='http://www.memo-web.fr/paypal-annulation.php'; /*page d'annulation d'achat*/
  $url_confirmation='http://www.memo-web.net/paypal-confirmation.php';/*page de confirmation d'achat*/
/* fin déclaration des variables */
 
  echo '
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick"/>
  <input type="hidden" name="business" value="'.$email_paypal.'"/>
  <input type="hidden" name="item_name" value="'.$item_nom.'"/>
  <input type="hidden" name="item_number" value="'.$item_numero.'"/>
  <input type="hidden" name="amount" value="'.$item_prix.'"/>
  <input type="hidden" name="currency_code" value="EUR"/>
  <input type="hidden" name="no_note" value="1"/>
  <input type="hidden" name="no_shipping" value="0"/>
  <input type="hidden" name="lc" value="FR"/>
  <input type="hidden" name="notify_url" value="'.$url_confirmation.'"/>
  <input type="hidden" name="cancel_return" value="'.$url_cancel.'">
  <input type="hidden" name="return" value="'.$url_retour.'">
  <input  align="right" valign="center" type="image" alt="Paiement par Paypal" src=" https://www.paypal.com/fr_FR/i/bnr/horizontal_solution_PP.gif" border="0" class="md-trigger" id="modal" data-modal="modal" name="submit" alt="Paiement sécurisé par paypal"/>
  </form>   ';
  

?>



	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Adresse
				</h4>

				<div>
					<p class="s-text7 w-size27">
						 Cité ghazela, Ariana, Tunisia
					</p>

					<p class="s-text7 w-size27">
						+216 92562931
					</p>


					<div class="flex-m p-t-30">
						<a href="https://web.facebook.com/nextun/" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Catégories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="homme.html" class="s-text7">
							
						</a>
					</li>

					<li class="p-b-9">
						<a href="femme.html" class="s-text7">
							
						</a>
					</li>

					<li class="p-b-9">
						<a href="materiel.html" class="s-text7">
							Matériel
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Nos marques
						</a>
					</li>

					<li class="p-b-9">
						<a href="https://web.facebook.com/nextun/" class="s-text7">
							Contacter nous
						</a>
					</li>


				</ul>

			</div>
			<picture>
					<source media="(min-width: 100px)" srcset="">
  
			</picture>
		</div>

	


			<div class="t-center s-text8 p-t-20">
				Copyright © 2019 All rights reserved. | Electronic Store <i class="fa fa-heart-o" aria-hidden="true"></i> 
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>