# One Day to Conquer Cancer Australia Splash Page
## 2017
*Australia-wide Event Page*

### Desktop
* Hovering over the city's `<div>` will change the respective logo:

```javascript

$("#brisbane").mouseover(function(){
    $(".sponsor-br").fadeIn('fast');
    $(".sponsor-default").hide();
    $(".sponsor-ml").hide();
  });

```
* `background-image` set on `<html>` and positioned `no-repeat top left fixed`
* Using `.svg` for logos
* Using SVGeezy.js to fallback to `.png` if browser does not support `.svg`

### Mobile
* Using Boostrap Accordion for mobile menu
