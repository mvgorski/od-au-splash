/*

Dec. 2016
Matt Gorski

This needs:

1. SVGs for logos / PNGs for fallback logos
2. Including SVGeezy script for SVG > PNG fallback.

svgeezy.init(false, 'png');

The first parameter is a class to tell the code not to check. 
Feel free to pass in 'false' if you want SVGeezy to check all images. 

The second is a filetype, this can be anything you want, 
just make sure the file path resolves to an image. ie. '/images/logo.svg', will be replaced with '/images/logo.png'.


*/

$(document).ready(function() {

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