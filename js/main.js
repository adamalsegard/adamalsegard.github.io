// Angular functions
var myApp = angular.module('myApp', []);

myApp.controller('portfolio', function($scope) {
    $scope.project = [
      {title:'Trygga', 
      description: 'A project for the hackathon "East Sweden Hack" for which we won a price',
  	  duration: 'Autumn 2015', 
  	  links: '<a href="http://eastswedenhack.se/">East Sweden Hack - Presentation</a>', 
  	  video: ''},

      {title:'Reverbify', 
      description: 'A project in sound physics. (Course TFYA65). We did some reverb',
  	  duration: 'Sept-Okt 2015', 
  	  links: '<a href="http://reverbify.meteor.com/">Website</a>',
  	  video: ''},

  	  {title:'Domescape', 
      description: "A simple 3D-landscape for domes created with SGCT and cspice (which calculates the sun's correct position relative Norrköping, Sweden). The user can walk around in the landscape and speed up/down time or set a specific time to change the sun's position. Created as a group-project in the course 3D- Computer Graphics.",
  	  duration: 'Spring 2015', 
  	  links: '<a href="https://github.com/Danielbook/3D_Projekt">Source code</a>', 
  	  video: ''},

  	  {title:'InterHelios', 
      description: 'An Android game developed during a course in user interface design and usability. It is a top-down 2D space shooter. The game is written in Java using the AndEngine framework.',
  	  duration: 'Nov-Dec 2014', 
  	  links: "<a href='https://github.com/Danielbook/TNM040-KOMA-Projekt'>Source code</a>", 
  	  video: "<div class='embed-responsive embed-responsive-16by9'><iframe class='embed-responsive-item' src='https://www.youtube.com/embed/crZpxgsYBw8' width='420' height='315' frameborder='0' allowfullscreen></iframe></div>"},

  	  {title:'Growth', 
      description: '"In a future where all vegetation has died, a company succeeds in producing a synthetic substitute for food. What could have been the dawn of a new era of science turns out to only be a different sort of extinction... <br> A sci-fi short film done with a couple of classmates in the course Digital Media. Big thanks to all actors who contributed without payment.',
  	  duration: 'Autumn 2013', 
  	  links: '<a href="growth/old/index.html">Website 1</a><br><a href="growth/index.html">Website 2 (by Benjamin Wiberg)</a>', 
  	  video: "<div class='embed-responsive embed-responsive-16by9'><iframe width='420' height='315' class='embed-responsive-item' src='https://player.vimeo.com/video/85702031'  frameborder='0' allowfullscreen></iframe></div>"}, 
  	  
  	  {title:'Legomania', 
      description: 'A website about Lego! A group-project in electronic publishing where we search for specifik lego bits in a database.',
  	  duration: 'Autumn 2013', 
  	  links: '<a href="http://www.student.itn.liu.se/~adaal265/TNMK30/Projekt/Legomania-master/Legomania-master/main.php">Check it out!</a>', 
  	  video: ''} 
  	  ];
  });
/*
myApp.controller('portfolio', function($scope, $http) {
    $http({ method: 'GET', url: 'https://adamalsegard.github.io/listor/portfolio.php'})
    .then(function successCallback(response){ 
    	console.log(response); 
    	var json = JSON.parse(response.records);
    	console.log(json);
    	$scope.project = json.records;
    	console.log($scope.project) }, 
    	function errorCallback(response){ 
    		console.log(response); });
});*/

myApp.filter('rawHtml', ['$sce', function($sce){
  return function(val) {
    return $sce.trustAsHtml(val);
  };
}]);


/*! viewportSize | Author: Tyson Matanich, 2013 | License: MIT */
(function(n){n.viewportSize={},n.viewportSize.getHeight=function(){return t("Height")},n.viewportSize.getWidth=function(){return t("Width")};var t=function(t){var f,o=t.toLowerCase(),e=n.document,i=e.documentElement,r,u;return n["inner"+t]===undefined?f=i["client"+t]:n["inner"+t]!=i["client"+t]?(r=e.createElement("body"),r.id="vpw-test-b",r.style.cssText="overflow:scroll",u=e.createElement("div"),u.id="vpw-test-d",u.style.cssText="position:absolute;top:-1000px",u.innerHTML="<style>@media("+o+":"+i["client"+t]+"px){body#vpw-test-b div#vpw-test-d{"+o+":7px!important}}<\/style>",r.appendChild(u),i.insertBefore(r,e.head),f=u["offset"+t]==7?i["client"+t]:n["inner"+t],i.removeChild(r)):f=n["inner"+t],f}})(this);

 /**
 * This demo was prepared for you by Petr Tichy - Ihatetomatoes.net
 * Want to see more similar demos and tutorials?
 * Help by spreading the word about Ihatetomatoes blog.
 * Facebook - https://www.facebook.com/ihatetomatoesblog
 * Twitter - https://twitter.com/ihatetomatoes
 * Google+ - https://plus.google.com/u/0/109859280204979591787/about
 * Article URL: http://ihatetomatoes.net/how-to-create-a-parallax-scrolling-website/
 */

( function( $ ) {
	
	// Setup variables
	$window = $(window);
	$slide = $('.homeSlide');
	$slideTall = $('.homeSlideTall');
	$slideTall2 = $('.homeSlideTall2');
	$body = $('body');
	
    //FadeIn all sections   
	$body.imagesLoaded( function() {
		setTimeout(function() {
		      
		      // Resize sections
		      adjustWindow();
		      
		      // Fade in sections
			  $body.removeClass('loading').addClass('loaded');
			  
		}, 800);
	});
	
	function adjustWindow(){
		
		// Init Skrollr
		var s = skrollr.init({
		    render: function(data) {
		    
		        //Debugging - Log the current scroll position.
		        //console.log(data.curTop);
		    }
		});
		
		// Get window size
	    winH = $window.height();
	    
	    // Keep minimum height 550
	    if(winH <= 550) {
			winH = 550;
		} 
	    
	    // Resize our slides
	    $slide.height(winH);
	    $slideTall.height(winH*2);
	    $slideTall2.height(winH*3);
	    
	    // Refresh Skrollr after resizing our sections
	    s.refresh($('.homeSlide'));
	}
} );

