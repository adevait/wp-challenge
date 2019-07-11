<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lumina
 */
 
?>
<!doctype html>
<html style="margin-top: 0px !important;" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" id="lumina-style-css" href="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey/style.css?ver=4.9.8" type="text/css" media="all">
	<link rel="stylesheet" id="child-style-css" href="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/css/style.css?ver=1.0.0" type="text/css" media="all">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:100,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
<header id="header-2" class="site-header">
   <div class="container">
      <div class="row align-items-start">
         <div class="site-logo col-md-3">
            <a href="#" class="custom-logo-link" rel="home" itemprop="url"><img width="138" height="131" src="<?php print get_template_directory_uri(); ?>/images/foor_logo.png" class="custom-logo" alt="Garden Savvy" itemprop="logo"></a>            
         </div>
         <nav class="main-navigation col-md-9">
            <div class="top-nav-row">
               <ul class="info-menu">
                  <li class="inf-facebook">
                     <a href="#" target="_blank" rel="noopener">
                     <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-fb.png">
                     </a>
                  </li>
                  <li class="inf-twitter">
                     <a href="#" target="_blank" rel="noopener">
                     <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-twitter.png">
                     </a>
                  </li>
                  <li class="inf-instagram">
                     <a href="#" target="_blank" rel="noopener">
                     <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-insta.png">
                     </a>
                  </li>
                  <li class="inf-pinterest">
                     <a href="#" target="_blank" rel="noopener">
                     <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-pinterest.png">
                     </a>
                  </li>
                  <li class="inf-login">
                     <a href="#" class="log-in">
                     <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-login.png">
                     <span>Log in</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="bot-nav-row">
               <div class="menu-menu-1-container">
                  <ul id="menu-menu-1" class="menu">
                     <li id="menu-item-491" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-491">
                        <a href="#">Catalog</a>
                        <ul class="sub-menu">
                           <li id="menu-item-5195" class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5195"><a href="#">Flowers</a></li>
                           <li id="menu-item-5198" class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5198"><a href="#">Vegetables</a></li>
                           <li id="menu-item-5199" class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5199"><a href="#">Fruits</a></li>
                           <li id="menu-item-5196" class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5196"><a href="#">Plants</a></li>
                           <li id="menu-item-5197" class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5197"><a href="#">Gardening Tools</a></li>
                           <li id="menu-item-5200" class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5200"><a href="#">Associations</a></li>
                        </ul>
                     </li>
                     <li id="menu-item-852" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-852"><a href="#">Blog</a></li>
                     <li id="menu-item-267" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-267"><a href="#">Forum</a></li>
                     <li id="menu-item-470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-470"><a href="#">About</a></li>
                     <li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="#">Contact</a></li>
                     <li id="menu-item-263" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263"><a href="#">Get Listed</a></li>
                  </ul>
               </div>
            </div>
         </nav>
         <div id="mob-btn-1" class="btn-mob">
            <div></div>
            <div></div>
            <div></div>
         </div>
      </div>
   </div>
   <div id="mob-nav-1" class="mobile-nav">
      <div class="menu-menu-1-container">
         <ul id="menu-menu-2" class="menu">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-491">
               <a href="https://gardensavvy.lumina-previews.com/catalog/">Catalog</a>
               <ul class="sub-menu">
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5195"><a href="https://gardensavvy.lumina-previews.com/suppliers-category/flowers/">Flowers</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5198"><a href="https://gardensavvy.lumina-previews.com/suppliers-category/vegetables/">Vegetables</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5199"><a href="https://gardensavvy.lumina-previews.com/suppliers-category/fruits/">Fruits</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5196"><a href="https://gardensavvy.lumina-previews.com/suppliers-category/plants/">Plants</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5197"><a href="https://gardensavvy.lumina-previews.com/suppliers-category/gardening-tools/">Gardening Tools</a></li>
                  <li class="menu-item menu-item-type-taxonomy menu-item-object-suppliers_category menu-item-5200"><a href="https://gardensavvy.lumina-previews.com/suppliers-category/associations/">Associations</a></li>
               </ul>
            </li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-852"><a href="/gardening-blog">Blog</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-267"><a href="/forum">Forum</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-470"><a href="https://gardensavvy.lumina-previews.com/about/">About</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="https://gardensavvy.lumina-previews.com/contact/">Contact</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-263"><a href="https://gardensavvy.lumina-previews.com/get-listed/">Get Listed</a></li>
         </ul>
      </div>
      <ul class="info-menu">
         <li class="inf-login">
            <a href="#" class="log-in">
            <img src="https://gardensavvy.lumina-previews.com/wp-content/themes/lumina-andrey-child/assets/images/header-soc-login.png">
            <span>Log in</span>
            </a>
         </li>
      </ul>
   </div>
</header>

<div class="page-area">
		<main id="main" class="site-main">