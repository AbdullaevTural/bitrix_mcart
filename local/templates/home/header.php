?><?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?$APPLICATION->ShowTitle()?></title>
  <?$APPLICATION->ShowHead();?>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?
$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-3.3.1.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-migrate-3.0.1.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-ui.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/popper.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/owl.carousel.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/mediaelement-and-player.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.stellar.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.countdown.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.magnific-popup.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap-datepicker.min.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/aos.js');
$APPLICATION->AddHeadScript('/local/templates/home/js/main.js');
$APPLICATION->SetAdditionalCSS("https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
$APPLICATION->SetAdditionalCSS("/local/templates/home/fonts/icomoon/style.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap.min.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/magnific-popup.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/jquery-ui.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.carousel.min.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/mediaelementplayer.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/bootstrap-datepicker.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/owl.theme.default.min.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/animate.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/fonts/flaticon/font/flaticon.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/fl-bigmug-line.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/aos.css");
$APPLICATION->SetAdditionalCSS("/local/templates/home/css/style.css");
?>
</head>

<body>
<?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>

<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span
                  class="d-none d-md-inline-block ml-2">+2 102 3923 3922</span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span
                  class="d-none d-md-inline-block ml-2">info@domain.com</span></a>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
            <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
            <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class=""><a href="index.html" class="h5 text-uppercase text-black"><strong>HomeSpace<span
                    class="text-danger">.</span></strong></a></h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li class="has-children">
                  <a href="properties.html">Properties</a>
                  <ul class="dropdown">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Lease</a></li>
                    <li class="has-children">
                      <a href="#">Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>