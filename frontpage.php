<!DOCTYPE html>
<html lang = "en">



<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

<style>
* {
  box-sizing: border-box;
}
html {
  font-size: -moz-calc(4px + 0.45vw);
  font-size: -webkit-calc(4px + 0.45vw);
  font-size: calc(4px + 0.45vw);
}
body {
  font-family: 'Montserrat', sans-serif;
  color: #000;
}
a {
  text-decoration: none;
  color: #000;
}
*:focus {
  outline: 0;
}
/* Primary Style
--------------------------------*/
.main {
  max-width: 110rem;
  margin: 0 auto;
  padding: 0 2rem;
}
header {
  line-height: 12rem;
  height: 12rem;
}
header h1 {
  font-size: 2.5rem;
  font-family: 'Oswald', sans-serif;
}
header ul::after {
  content: '';
  display: table;
  clear: both;
}
header li {
  float: left;
  width: 12.5%;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
  text-transform: uppercase;
}
header li:nth-child(4) {
  width: 25%;
}
header li a {
  font-weight: 900;
  font-size: 2.0rem;
  letter-spacing: 2px;
}
.text {
  font-size: 2rem;
  padding: 2rem 0;
  -moz-columns: 3;
  -webkit-columns: 3;
  columns: 3;
}
.text p {
  margin-bottom: 2rem;
}
@media screen and (max-width: 800px) {
  header ul li:not(:nth-child(4)) {
    display: none;
  }
  header ul li:nth-child(4) {
    width: 100%;
  }
}
/* Slider Style
--------------------------------------*/
.cd-slider {
  position: relative;
  width: 100%;
  height: 50rem;
  overflow: hidden;
  margin-bottom: 8rem;
}
.cd-slider li {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  visibility: hidden;
  transition: visibility 0s 1s;
  will-change: visibility;
}
.image {
  position: absolute;
  top: 0;
  left: 0;
  width: 70%;
  height: 100%;
  background-size: cover;
  background-position: 50% 50%;
  clip: rect(0, 80rem, 50rem, 80rem);
  transition: clip .5s cubic-bezier(0.99, 0.01, 0.45, 0.9) .5s;
  will-change: clip;
}
.content {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  padding: 2rem 0 0 2rem;
  font-size: 9rem;
  text-align: right;
}
.content h2 {
  text-overflow: ellipsis;
  overflow: hidden;
  font-size: xx-large;
  transform: translateY(-30%);
  opacity: 0;
  transition: transform .5s, opacity .5s;
  will-change: transform, opacity;
}
.content a {
  display: inline-block;
  font-size: 2rem;
  text-transform: lowercase;
  padding: 1.5rem;
  opacity: 0;
  transform: translateY(-100%);
  transition: transform .5s .1s, opacity .5s .1s;
  will-change: transform, opacity;
}
/* Current Slide 
-------------------------------------*/
li.current {
  visibility: visible;
  transition-delay: 0s;
}
li.current .image {
  clip: rect(0, 80rem, 50rem, 0);
}
li.current .content h2 {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 1s;
}
li.current .content a {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 1.1s;
}
/* Prev Slide 
------------------------------------*/
li.prev_slide .image {
  clip: rect(0, 0, 50rem, 0);
}
nav {
  position: absolute;
  bottom: 0;
  right: 0;
  background: #fff;
  z-index: 2;
}
.prev, .next, .counter {
  vertical-align: middle;
}
.prev, .next {
  position: relative;
  display: inline-block;
  height: 5rem;
  width: 5rem;
  border: 0;
  cursor: pointer;
  background: transparent;
}
.prev::before, .next::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  border: .8rem solid transparent;
  border-right-width: 1rem;
  border-right-color: #000;
  border-left-width: 0;
  width: 0;
  height: 0;
}
.prev::after, .next::after {
  content: '';
  position: absolute;
  top: 50%;
  transform: translateY(-50%) translateZ(0);
  left: .5rem;
  background: #000;
  height: .1rem;
  min-height: 1px;
  width: 2.5rem;
  transition: width .3s;
}
.next::before {
  right: 0;
  left: auto;
  border-left-width: 1rem;
  border-left-color: #000;
  border-right-width: 0;
}
.next::after {
  right: .5rem;
  left: auto;
}
.counter {
  display: inline-block;
  font-size: 4rem;
  font-family: serif;
  font-style: italic;
}
.counter span:last-child::before {
  content: '/';
  margin: 0 1rem;
}
.prev:hover::after, .next:hover::after {
  width: 3.5rem;
}
@media screen and ( max-width: 550px ) {
  .image { width: 100%; }
  .content { padding-right: 2rem; }
  nav { left: 0; right: auto; }
}

.topnavigation {
  overflow: hidden;
  background-color: #333;
  
  text-align: left;
  font-style: normal;
  font-family: "Lucida Console", Monaco, monospace;
  color : white;

}

</style>
</head>

&nbsp;&nbsp;


<div class="topnavigation">
  
 &nbsp;&nbsp;&nbsp; <h1><strong><font size = "200"> WasteBot</font></strong></h1>

</div>

<div class="main">
  <header>

    <ul>

      <a href="#"></a>


      <a href="#"></a>
    
      <li><a href="cust.html">Register</a></li>

      <li><a href="mainpage.html">Employee</a></li>
      <li><a href="#">About Us</a></li>
      
      <li><a href="#">Contact</a></li>
    </ul>
  </header>
  
  <div class="cd-slider">
    <ul>
      <li>
        <div class="image" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyzc32j1udiXlhft3jmTJRr9ORoV49jbobVm3A6NKhEWOvQB-Z);"></div>
        <div class="content">
          <h2><font size = "50">Waste Management, Isn't it FUN?</font></h2>
                    
        </div>
      </li>
      <li>
        <div class="image" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT77isQPseG3vfvLz_eoxR22XzKv2NMEcONucptjo1m0eoK4lLi);"></div>
        <div class="content">
         <h2><font size = "50">Get on demand Service at your doorstep!</font></h2>
          
        </div>
      </li>
      <li>
        <div class="image" style="background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZwCEqTwD00Yk5_hvxeQZPrzdvpUI1Yvg6iZjCiGRACGO2wo0c5A);"></div>
        <div class="content">
          <h2><font size ="50" >Seggregate waste and get a cashback!</font></h2>
          
        </div>
      </li>
         
    </ul>
  </div> <!--/.cd-slider-->
  
  <div class="text">
    <p>We, at WASTEBOT, aims to create a platform to cater all the waste management issues of the customers and simultaneously, a platform to provide employment to the needy ones.</p>
    <p>Waste Management Services include regular or emergency waste disposal services, know your scrap, sell your scrap at reasonable rates, and register your complaints.</p>
    <p>Immediate services to all the stakeholders at best prices and various perks on doing the tasks well, customers get CASHBACK on seggregationg waste well, checked by the sweeper. </p>
    <p>Employees get proper incentives and facilities if they provide timely services.</p>
    
  </div>
  
</div>


<script>

(function() {

  function init(item) {
    var items = item.querySelectorAll('li'),
        current = 0,
        autoUpdate = true,
        timeTrans = 4000;
        
    //create nav
    var nav = document.createElement('nav');
    nav.className = 'nav_arrows';

    //create button prev
    var prevbtn = document.createElement('button');
    prevbtn.className = 'prev';
    prevbtn.setAttribute('aria-label', 'Prev');

    //create button next
    var nextbtn = document.createElement('button');
    nextbtn.className = 'next';
    nextbtn.setAttribute('aria-label', 'Next');

    //create counter
    var counter = document.createElement('div');
    counter.className = 'counter';
    counter.innerHTML = "<span>1</span><span>"+items.length+"</span>";

    if (items.length > 1) {
      nav.appendChild(prevbtn);
      nav.appendChild(counter);
      nav.appendChild(nextbtn);
      item.appendChild(nav);
    }

    items[current].className = "current";
    if (items.length > 1) items[items.length-1].className = "prev_slide";

    var navigate = function(dir) {
      items[current].className = "";

      if (dir === 'right') {
        current = current < items.length-1 ? current + 1 : 0;
      } else {
        current = current > 0 ? current - 1 : items.length-1;
      }

      var nextCurrent = current < items.length-1 ? current + 1 : 0,
        prevCurrent = current > 0 ? current - 1 : items.length-1;

      items[current].className = "current";
      items[prevCurrent].className = "prev_slide";
      items[nextCurrent].className = "";

      //update counter
      counter.firstChild.textContent = current + 1;
    }
    
    item.addEventListener('mouseenter', function() {
      autoUpdate = false;
    });

    item.addEventListener('mouseleave', function() {
      autoUpdate = true;
    });

    setInterval(function() {
      if (autoUpdate) navigate('right');
    },timeTrans);
    
    prevbtn.addEventListener('click', function() {
      navigate('left');
    });

    nextbtn.addEventListener('click', function() {
      navigate('right');
    });

    //keyboard navigation
    document.addEventListener('keydown', function(ev) {
      var keyCode = ev.keyCode || ev.which;
      switch (keyCode) {
        case 37:
          navigate('left');
          break;
        case 39:
          navigate('right');
          break;
      }
    });

    // swipe navigation
    // from http://stackoverflow.com/a/23230280
    item.addEventListener('touchstart', handleTouchStart, false);        
    item.addEventListener('touchmove', handleTouchMove, false);
    var xDown = null;
    var yDown = null;
    function handleTouchStart(evt) {
      xDown = evt.touches[0].clientX;
      yDown = evt.touches[0].clientY;
    };
    function handleTouchMove(evt) {
      if ( ! xDown || ! yDown ) {
        return;
      }

      var xUp = evt.touches[0].clientX;
      var yUp = evt.touches[0].clientY;

      var xDiff = xDown - xUp;
      var yDiff = yDown - yUp;

      if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
        if ( xDiff > 0 ) {
          /* left swipe */
          navigate('right');
        } else {
          navigate('left');
        }
      } 
      /* reset values */
      xDown = null;
      yDown = null;
    };


  }

  [].slice.call(document.querySelectorAll('.cd-slider')).forEach( function(item) {
    init(item);
  });

})();

</script>

</html>