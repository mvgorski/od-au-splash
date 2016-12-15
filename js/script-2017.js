/*

Dec. 2016
Matt Gorski

This needs:

1.
2.
3.

The first parameter is a class to tell the code not to check. Feel free to pass in false if you want SVGeezy to check all images. This may be because you have no fallbacks for certain SVGs.

The second is a filetype, this can be anything you want, just make sure the file path resolves to an image. ie. '/images/logo.svg', will be replaced with '/images/logo.png'.


*/

$(document).ready(function() {

//initialize SVGeezy

svgeezy.init(false, 'png'); 

// hide sponsor images initially besides generic
  $(".sponsor-br, .sponsor-ml, .copyright-br, .copyright-ml").hide();

  $("#brisbane").mouseover(function(){
    $(".sponsor-br").fadeIn();
    $(".sponsor-default").hide();
    $(".sponsor-ml").hide();
    $(".copyright-default").hide();
    $(".copyright-ml").hide();
  });
  $("#melbourne").mouseover(function(){
    $(".sponsor-ml").fadeIn();
    $(".sponsor-default").hide();
    $(".sponsor-br").hide();
    $(".copyright-default").hide();
    $(".copyright-br").hide();

  });


















}); // ready