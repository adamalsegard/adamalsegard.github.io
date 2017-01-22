// Angular functions
var myApp = angular.module('myApp', []);

myApp.controller('portfolio', function($scope, $http) {
    $http({ method: 'GET', url: 'https://adamalsegard.github.io/lists/portfolio.php'})
    .then(function successCallback(response){ 
    	console.log(response.data); 
    	$scope.project = response.data.records; }, 
    	function errorCallback(response){ 
    		console.log(response); });
});

myApp.controller('commitments', function($scope, $http) {
    $http({ method: 'GET', url: 'https://adamalsegard.github.io/lists/engagemang.php'})
    .then(function successCallback(response){ 
    	console.log(response.data); 
    	$scope.project = response.data.records; }, 
    	function errorCallback(response){ 
    		console.log(response); });
});

myApp.filter('rawHtml', ['$sce', function($sce){
  return function(val) {
    return $sce.trustAsHtml(val);
  };
}]);



$("#bs-js-navbar-scrollspy a[href^='#']").on('click', function(event) {
  var target;
  target = this.hash;

  event.preventDefault();

  var navOffset;
  navOffset = $('#navbar').height();

  return $('html, body').animate({
    scrollTop: $(this.hash).offset().top - navOffset
  }, 500);
});