<?php
/**
 * Template Name: Splash Page
 *
 * This is a custom template for the all Splash page.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OneDay
 */
get_header(); ?>
<!-- start splash page template -->
<style>
/* WP overrides */
header.fixed-header {
  display:none;
}
#body {
  height: 100vh;
  margin-left: -15px;
  margin-right: -15px;
}
@font-face {
  font-family: "Karbon Bold";
  src: url("../splash/fonts/Karbon-Bold.otf");
  font-weight: normal; }
@font-face {
  font-family: "Karbon Semibold";
  src: url("../splash/fonts/Karbon-Semibold.otf");
  font-weight: normal; }
@font-face {
  font-family: "Karbon Regular";
  src: url("../splash/fonts/Karbon-Regular.otf");
  font-weight: normal; }
@font-face {
  font-family: "Karbon Medium";
  src: url("../splash/fonts/Karbon-Medium.otf");
  font-weight: normal; }
@font-face {
  font-family: "Karbon Thin";
  src: url("../splash/fonts/Karbon-Thin.otf");
  font-weight: normal; }
html, body, p, a, li {
  font-family: "Karbon Medium", Helvetica, Arial, sans-serif; }

.font-bold {
  font-family: "Karbon Bold", Helvetica, Arial, sans-serif !important; }
.font-semibold {
  font-family: "Karbon Semibold", Helvetica, Arial, sans-serif !important; }
.font-medium {
  font-family: "Karbon Medium", Helvetica, Arial, sans-serif !important; }
.font-light {
  font-family: "Karbon Thin", Helvetica, Arial, sans-serif !important; }

a {
  -o-transition: .3s ease-in-out;
  -ms-transition: .3s ease-in-out;
  -moz-transition: .3s ease-in-out;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
  color: #006496; }
  a:visited {
    color: #004263; }
  a:hover {
    color: #004263; }
  a:focus {
    color: #004263; }

* {
  box-sizing: border-box; }

/* mobile */
#body {
  background: url(../splash/img/bg-m-2017-02.jpg) no-repeat top center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; }

@media screen and (min-width: 992px) {
  /* desktop*/
  #body {
    background: url(../splash/img/bg-2017-01.jpg) no-repeat top left fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; } }
body {
  /*background-color: transparent;*/ }

/* hide sponsor images initially besides generic */
.sponsor-br, .sponsor-ml, .copyright-br, .copyright-ml {
  display: none; }

.logos img {
  max-width: 400px;
  width: 100%;
  margin-left: 30px; }

img.sponsor-ml {
  max-width: 365px; }

@media screen and (max-width: 1450px) {
  .logos img {
    margin-left: auto; } }
@media screen and (max-width: 1500px) and (min-width: 992px) {
  .logos img {
    max-width: 350px; } }
.nav {
  padding-top: 75px; }

.logos {
  padding-top: 30px; }

.nav {
  padding-left: 15px; }

.nav a.header {
  display: block;
  text-transform: uppercase;
  font-family: "Karbon Bold", Helvetica, Arial, sans-serif;
  color: #006496;
  font-size: 50px;
  line-height: .7; }

.nav a.year {
  display: inline-block;
  font-family: "Karbon Thin", Helvetica, Arial, sans-serif;
  color: #e17f25;
  font-size: 30px; }

.nav a:hover, .nav a:focus {
  color: #e17f25;
  font-family: "Karbon Bold", Helvetica, Arial, sans-serif;
  text-decoration: none;
  -o-transition: .3s ease-in-out;
  -ms-transition: .3s ease-in-out;
  -moz-transition: .3s ease-in-out;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out; }

.nav span {
  display: inline-block;
  font-family: "Karbon Thin", Helvetica, Arial, sans-serif;
  color: #e17f25;
  font-size: 20px;
  margin: 0 5px 0 8px; }

#desktop .nav div:hover {
  cursor: pointer; }

footer p {
  /*font-family: $font-light;*/
  color: #fff; }

@media screen and (max-width: 1200px) {
  .nav a.header {
    font-size: 40px; }

  .nav {
    padding-top: 50px; }

  .logos {
    padding-top: 15px; } }
#mobile {
  color: #fff;
  min-height: 100vh;
  padding-bottom: 30px; }

#mobile img.logo {
  margin-top: 15px;
  margin-bottom: 40%;
  padding: 0 20px;
  max-width: 400px;
  width: 100%; }

#mobile .panel-title a {
  color: #e17f25;
  font-size: 2.4em;
  text-decoration: none;
  display: block; }

/* Bootstrap Accordion overrides */
#mobile .panel:first-child .panel-title a {
  color: #006496; }

#mobile .panel:first-child .panel-body {
  background: rgba(0, 100, 150, 0.8); }

#mobile .panel-body {
  color: #fff;
  font-family: "Karbon Thin", Helvetica, Arial, sans-serif;
  font-size: 2em;
  background: rgba(225, 127, 37, 0.8); }

#mobile .panel-body a {
  font-family: "Karbon Semibold", Helvetica, Arial, sans-serif;
  padding-right: 0;
  padding-left: 15px;
  color: #fff;
  font-size: 1.3em;
  letter-spacing: 1px; }

#mobile .panel-body a:first-child {
  border-right: 2px solid #fff;
  padding-left: 0;
  padding-right: 25px; }

.panel-group .panel {
  border: 0;
  background: transparent;
  -webkit-box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.36);
  box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.36); }

.panel-group .panel:last-child {
  border-bottom: 0; }

.panel-default > .panel-heading {
  background-color: #fff;
  border: 0; }

.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border: 0; }

.panel-group .panel + .panel {
  margin-top: 30px; }

</style>
<div id="body" class="hidden-sm hidden-xs">
<!-- Desktop Content -->
<header id="desktop" class="container-fluid hidden-sm hidden-xs">
  <div class="row">
    <div class="col-md-4 col-lg-4 logos">
      <img class="sponsor-default img-responsive center-block" src="splash/img/logo-gn.svg" alt="OneDay to Conquer Cancer">
      <img class="sponsor-br img-responsive center-block" src="splash/img/logo-br.svg" alt="OneDay to Conquer Cancer" title="Royal Brisbane Hospital">
      <img class="sponsor-ml img-responsive center-block" src="splash/img/logo-ml.svg" alt="OneDay to Conquer Cancer" title="Peter MacCallum Cancer Centre">
    </div>
    <div class="col-md-8 col-lg-8 nav">
      <div id="brisbane" class="main-head col-md-6 col-lg-4 text-center">
          <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=br17_home" class="header">Brisbane</a>
          <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=br16_home" class="year">2016</a>
          <span>|</span>
          <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=br17_home" class="year">2017</a>
      </div>
      <div id="melbourne" class="main-head col-md-5 col-lg-4 text-center">
        <a href="http://participate.theoneday.org.au/site/PageServer?pagename=ml17_home" class="header">Melbourne</a>
        <a href="http://participate.theoneday.org.au/site/PageServer?pagename=ml16_home" class="year">2016</a>
        <span>|</span>
        <a href="http://participate.theoneday.org.au/site/PageServer?pagename=ml17_home" class="year">2017</a>
      </div>
    </div>
  </div>
</header>
<footer class="navbar-fixed-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 copyright text-center">
      <!-- <p class="copyright-default">&copy; 2017 CauseForce, LLC. OneDay to Conquer Cancer name and logo are registered.</p> -->
      <!-- <p class="copyright-br">&copy; 2016 CauseForce, LLC.</p>
      <p class="copyright-ml">&copy; 2016 CauseForce, LLC.</p>
      -->
      </div>
    </div>
  </div>
</footer>
</div><!-- #desktop -->

<div id="body" class="hidden-md hidden-lg">
<!-- Mobile Content -->
<div id="mobile" class="container-fluid hidden-md hidden-lg">
  <div class="row header no-padding">
    <div class="col-xs-12">
        <img src="splash/img/logo-gn.svg" alt="OneDay to Conquer Cancer" class="img-responsive center-block logo">
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <!-- mobile nav -->
      <div class="panel-group text-center" id="mobile-accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <div class="panel-title">
              <a role="button" class="text-uppercase font-bold" data-toggle="collapse" data-parent="#mobile-accordion" href="#mobileCollapseOne" aria-expanded="true" aria-controls="mobileCollapseOne">Brisbane
              </a>
            </div>
          </div>
          <div id="mobileCollapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=br16_home" target="_blank">2016</a>
              <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=br17_home" target="_blank">2017</a>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <div class="panel-title">
              <a class="collapsed text-uppercase font-bold" role="button" data-toggle="collapse" data-parent="#mobile-accordion" href="#mobileCollapseTwo" aria-expanded="false" aria-controls="mobileCollapseTwo">Melbourne
              </a>
            </div>
          </div>
          <div id="mobileCollapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=ml16_home" target="_blank">2016</a>
              <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=ml17_home" target="_blank">2017</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
</div><!-- #body -->

<script>
$(document).ready(function() {

/*
 * SVGeezy.js
 *
 * Copyright 2016, Ben Howdle http://benhowdle.im
 *
 * Date: Sun Aug 26 20:38 2012 GMT
 */

window.svgeezy=function(){return{init:function(t,i){this.avoid=t||false;this.filetype=i||"png";this.svgSupport=this.supportsSvg();if(!this.svgSupport){this.images=document.getElementsByTagName("img");this.imgL=this.images.length;this.fallbacks()}},fallbacks:function(){while(this.imgL--){if(!this.hasClass(this.images[this.imgL],this.avoid)||!this.avoid){var t=this.images[this.imgL].getAttribute("src");if(t===null){continue}if(this.getFileExt(t)=="svg"){var i=t.replace(".svg","."+this.filetype);this.images[this.imgL].setAttribute("src",i)}}}},getFileExt:function(t){var i=t.split(".").pop();if(i.indexOf("?")!==-1){i=i.split("?")[0]}return i},hasClass:function(t,i){return(" "+t.className+" ").indexOf(" "+i+" ")>-1},supportsSvg:function(){return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")}}}();


//initialize SVGeezy

svgeezy.init(false, 'png'); 


  $("#brisbane").mouseover(function(){
    $(".sponsor-br").fadeIn('fast');
    $(".sponsor-default").hide();
    $(".sponsor-ml").hide();
  });
  $("#melbourne").mouseover(function(){
    $(".sponsor-ml").fadeIn('fast');
    $(".sponsor-default").hide();
    $(".sponsor-br").hide();
  });


}); // ready

</script>
<!-- end splash page template -->
