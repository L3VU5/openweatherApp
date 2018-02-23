app.factory("weather", ["$http", function($http){
	return $http.get("http://api.openweathermap.org/data/2.5/weather?q="+ city +"&units=metric&appid=7e860535356de5440ba8f46a7c888e7c")
	.success(function(data){
		return data;
	})
	.error(function(data){
		return data;
	});
}]);