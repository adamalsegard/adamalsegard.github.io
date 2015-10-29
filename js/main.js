// Angular functions
var myApp = angular.module('myApp', []);

myApp.controller('portfolio', function($scope, $http) {
    $http({ method: 'GET', url: 'https://adamalsegard.github.io/listor/portfolio.php'})
    .then(function successCallback(response){ 
    	console.log(response.data); 
    	$scope.project = response.data.records; }, 
    	function errorCallback(response){ 
    		console.log(response); });
});

myApp.controller('commitments', function($scope, $http) {
    $http({ method: 'GET', url: 'https://adamalsegard.github.io/listor/engagemang.php'})
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
