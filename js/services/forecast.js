app.factory("forecast", ["$http", function($http){
	return $http.get("http://api.openweathermap.org/data/2.5/forecast?q="+ city +"&units=metric&appid=7e860535356de5440ba8f46a7c888e7c")
	.success(function(data){
			 return data;
			 })
	.error(function(data){
			 alert("nie udało się pobrać danych " + data);
	});
}]);