# 2017 One Day to Conquer Cancer Australia Splash Page
## Bootstrap Full-Width Image Landing Page
### Mobile Bootstrap Accordion
#### jQuery logo fade-in on hover
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
* Currently a `<footer>` hidden in comments. The Australia team opted to forgo the copyright text this time around - usually this will change with hovering over the city's `<div>`

### Mobile
* Using Boostrap Accordion for mobile menu
