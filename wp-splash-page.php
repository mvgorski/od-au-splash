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
<!-- start of page_not_found -->
<style type="text/css">
/**/
header,
header.reg-donate-header-row,
.footer-row {
  display: none;
}
#content {
  margin-top: 0;
}
/**/
.splash-page-content-wrapper {
  width: 100%;
  max-width: 1200px;
  position: relative;
  margin: 0 auto;
}
.splash-page-bg {
  display: block;
  width: 100%;
}
.splash-page-bg-wrapper {
  width: 100%;
  max-width: 320px;
  margin: 0 auto;
  overflow-x: hidden;
}
.centered-splash-page-content {
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    max-width: 250px;
    height: 100%;
    max-height: 362px;
    background: #fff;
}
.splash-page-oneday-logo-wrapper {
    width: 100%;
    max-width: 200px;
    margin: 10px auto;
    height: 100px;
}
.website-btn {
    display: block;
    width: 100%;
    max-width: 235px;
    min-height: 40px;
    margin: 10px auto;
    padding: 8px;
    text-align: center;
    text-transform: uppercase;    
}
@media (min-width: 768px){
  .splash-page-bg-wrapper {
    max-width: initial;
  }
}
#index-page-content-wrapper {
  display: none;
}
.splash-page-loading-wrapper {
    display: block;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    max-width: 200px;
    height: 100%;
    max-height: 200px;
}
.loading-wrapper .fa {
    font-size: 5em;
}
@media (min-width: 992px){
  .centered-splash-page-content {
      top: 150px;
  }
  .md-row-45 {
    margin-right: -45px;
    margin-left: -45px;
  }
  .md-row-45:before,
  .md-row-45:after {
    display: table;
    content: " ";
  }
  .md-row-45:after {
    clear: both;
  }
}
</style>

  <div class="container-fluid">
<div class="splash-page-loading-wrapper loading-wrapper text-center">
  <i class="fa fa-cog fa-spin blue-clr"></i>
</div>
    <div id="index-page-content-wrapper" class="splash-page-content-wrapper splash-page-content-wrapper content-wrapper">
  <div class="splash-page-bg-row row">
    <div class="splash-page-bg-wrapper">
	<div class="row thin-colorbar-row">
      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/thin-mobile-colorbar.svg" alt="Colorbar Mobile SVG" class="colorbar full-width">
      </div>
      <div class="md-row-45">
	      <div class="col-xs-12 hidden-xs">
	        <img src="<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/thin-desktop-colorbar.svg" alt="Colorbar Desktop SVG" class="colorbar desktop-colorbar full-width">
	      </div>
	  </div>
    </div>

      <img class="splash-page-bg" src="<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/splash-page/desktop-bg.jpg" alt="Splash Page BG Image">

	<div class="row thin-colorbar-row">
      <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/thin-mobile-colorbar.svg" alt="Colorbar Mobile SVG" class="colorbar full-width">
      </div>
      <div class="md-row-45">
	      <div class="col-xs-12 hidden-xs">
	        <img src="<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/thin-desktop-colorbar.svg" alt="Colorbar Desktop SVG" class="colorbar desktop-colorbar full-width">
	      </div>
      </div>
    </div>
    </div><!-- end of <div class="splash-page-bg-row row"> -->
        <div class="centered-splash-page-content">
          <div class="inner-splash-page-content">
            <h1 class="hidden-site-title" style="visibility: hidden; margin: 0px; height: 0px; display: none;">The OneDay</h1>
            <div class="splash-page-oneday-logo-wrapper">
	            <img src="<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/splash-page/oneday-generic-logo.svg" alt="OneDay Generic Logo" class="full-width"/>
            </div>
            <h2 class="text-center text-uppercase green-clr" style="font-size: 22px;">Get Involved</h2>
            <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=br16_home" class="website-btn brisbane-btn btn-orange" title="Brisbane 2016">Brisbane 2016</a>
            <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=br17_home" class="website-btn brisbane-btn btn-orange" title="Brisbane 2017">Brisbane 2017</a>
            <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=ml16_home" class="website-btn melbourne-btn btn-blue" title="Melbourne 2016">Melbourne 2016</a>
            <a href="http://participate.theoneday.org.au/site/PageServer/?pagename=ml17_home" class="website-btn melbourne-btn btn-blue" title="Melbourne 2017">Melbourne 2017</a>
          </div><!-- end of <div class="inner-splash-page-content"> -->
        </div>

    </div><!-- end of <div id="pagenotfound-content-wrapper" class="content-wrapper"> -->

  </div><!-- end of <div class="container-fluid"> -->
<script type="text/javascript">
jQuery(window).load(function(){
  jQuery('.splash-page-loading-wrapper').hide(500);
  jQuery('#index-page-content-wrapper').show();
});
function determineSplashPageBG(){
  var windowWidth = window.innerWidth;
  if (windowWidth < 768){
    jQuery('.splash-page-bg').attr('src', '<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/splash-page/mobile-bg.jpg');
  } else {
    jQuery('.splash-page-bg').attr('src', '<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/splash-page/desktop-bg.jpg');
  }
}
jQuery(document).ready(function(){
  determineSplashPageBG();
});
jQuery(window).resize(function(){
  determineSplashPageBG();
});
jQuery('.brisbane-btn').mouseover(function(){
  jQuery('.splash-page-oneday-logo-wrapper img').attr('src', '<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/splash-page/oneday-brisbane-logo.svg').attr('alt', 'Brisbane OneDay Logo');
});
jQuery('.melbourne-btn').mouseover(function(){
  jQuery('.splash-page-oneday-logo-wrapper img').attr('src', '<?php echo get_site_url(); ?>/wp-content/themes/oneday/img/splash-page/oneday-melbourne-logo.svg').attr('alt', 'Melbourne OneDay Logo');
});
</script>
<!-- end of page_not_found -->
<?php get_footer(); ?>