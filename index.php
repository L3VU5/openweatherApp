<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css" rel="stylesheet" />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
<script type="text/javascript" src="angular.min.js"></script>
<script src="https://code.angularjs.org/1.2.28/angular-route.min.js"></script>
<link href="style.css" type="text/css" rel="stylesheet"/>
<title>sample</title>
</head>
<body ng-app="myApp">
		<div class="ng-view"></div>
		
	
	<!-- Modules -->
    <script src="js/myApp.js"></script>

    <!-- Controllers -->
    <script src="js/controllers/MainController.js"></script>
	<script src="js/controllers/ForecastController.js"></script>
   
    <!-- Services -->
    <script src="js/services/weather.js"></script>
	<script src="js/services/forecast.js"></script>
</body>
</html>