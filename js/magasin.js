<<<<<<< HEAD
//Direction aware image gallery effect
//created by http://8bit-code.com
//tutorial at http://www.8bit-code.com/tutorials/direction-aware-image-gallery-effect

$(function () {
    $(".gallery li").on("mouseenter mouseleave", function(e){

        /** the width and height of the current div **/
        var w = $(this).width();
        var h = $(this).height();

        /** calculate the x and y to get an angle to the center of the div from that x and y. **/
        /** gets the x value relative to the center of the DIV and "normalize" it **/
        var x = (e.pageX - this.offsetLeft - (w/2)) * ( w > h ? (h/w) : 1 );
        var y = (e.pageY - this.offsetTop  - (h/2)) * ( h > w ? (w/h) : 1 );

        /** the angle and the direction from where the mouse came in/went out clockwise (TRBL=0123);**/
        /** first calculate the angle of the point,
         add 180 deg to get rid of the negative values
         divide by 90 to get the quadrant
         add 3 and do a modulo by 4  to shift the quadrants to a proper clockwise TRBL (top/right/bottom/left) **/
        var direction = Math.round((((Math.atan2(y, x) * (180 / Math.PI)) + 180 ) / 90 ) + 3 )  % 4;



        /** check for direction **/
        switch(direction) {
            case 0:
                // direction top
                var slideFrom = {"top":"-100%", "right":"0"};
                var slideTo = {"top":0};

                var imgSlide = "0, 60";
                break;
            case 1: //
                // direction right
                var slideFrom = {"top":"0", "right":"-100%"};
                var slideTo = {"right":0};

                var imgSlide = "-60, 0";
                break;
            case 2:
                // direction bottom
                var slideFrom = {"top":"100%", "right":"0"};
                var slideTo = {"top":0};

                var imgSlide = "0, -60";
                break;
            case 3:
                // direction left
                var slideFrom = {"top":"0", "right":"100%"};
                var slideTo = {"right":0};

                var imgSlide = "60, 0";
                break;
        }



        if( e.type === 'mouseenter' ) {

            var element = $(this);

            element.find(".info").removeClass("transform").css(slideFrom);
            element.find("img").addClass("transform").css("transform","matrix(1, 0, 0, 1,"+imgSlide+")");

            setTimeout(function(){
                element.find(".info").addClass("transform").css(slideTo);
            },1);


        }else {

            var element = $(this);

            element.find(".info").addClass("transform").css(slideFrom);
            element.find("img").removeClass("transform").css("transform","matrix(1, 0, 0, 1,"+imgSlide+")");

            setTimeout(function(){
                element.find("img").addClass("transform").css("transform","matrix(1, 0, 0, 1,0,0)");
            },1);

        }

    });

});
=======
//Program created by Ryan Tarson Updated 6.15.16, under this is my pure JS Version
jQuery(document).ready(function($) {
  var wHeight = window.innerHeight;
  //search bar middle alignment
  $('#mk-fullscreen-searchform').css('top', wHeight / 2);
  //reform search bar
  jQuery(window).resize(function() {
    wHeight = window.innerHeight;
    $('#mk-fullscreen-searchform').css('top', wHeight / 2);
  });
  // Search
  $('#search-button').click(function() {
    console.log("Open Search, Search Centered");
    $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
  });
  $("a.mk-fullscreen-close").click(function() {
    console.log("Closed Search");
    $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
  });
});

/* Don't Like jQuery or have a custom jQuery that's conflicting? Then you can use my Pure JS program Below. Runs exactly the same and so is the preformance just Pure JS*/
//Program made by Ryan Tarson
/*
 var wHeight = window.innerHeight;
 var sb = document.getElementById("search-button");
 var closeSB = document.getElementById("mk-fullscreen-close-button");
 var SearchOverlay = document.getElementById("mk-search-overlay");
 var searchBar = document.getElementById("mk-fullscreen-searchform");
 searchBar.style.top=wHeight/2 +'px';
  console.log(wHeight);
  window.addEventListener("resize", function(){
	  console.log(wHeight);
	   wHeight = window.innerHeight;
	   searchBar.style.top=wHeight/2 + 'px';
  }, true);
  document.addEventListener("click", function(){
  sb.onclick = function(){
	console.log("Opened Search for Element: ");
	SearchOverlay.classList.add("mk-fullscreen-search-overlay-show");
  };
  closeSB.onclick = function(){
	  console.log("Closed Search for Element: " + closeSB);
	  SearchOverlay.classList.remove("mk-fullscreen-search-overlay-show");
  };
  }, true);
  */
>>>>>>> antoine
