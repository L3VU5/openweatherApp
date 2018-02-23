var app = angular.module("myApp", ["ngRoute"]);
city='krakow';
app.config(function($routeProvider){
	$routeProvider.when("/",{
		controller: "MainController",
		templateUrl:"views/search.html"
	}).when("/weather",{
		controller: "MainController",
		templateUrl:"views/weather.html"
	}).otherwise({
		redirectTo:"/"
	});
});