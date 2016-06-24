var app = angular.module("satishApp", ['ngRoute']);

app.config(function($routeProvider){
	$routeProvider
	.when('/home', {
		templateUrl: 'views/home.html',
		controller: 'homeController'
	})
	.when('/iamadmin',{
		templateUrl: 'admin/iamadmin.html',
		controller: 'adminLogin'
	})
	.when('/adminpanel', {
		templateUrl: 'admin/adminPanel.html',
		controller: 'adminPanel'
	})
	.otherwise({
		redirectTo: '/home'
	});
});

app.controller('homeController', function ($scope){


});

app.controller('adminLogin', function ($scope, $http, $location){

	$scope.username = "iamsatishb@gmail.com";
	$scope.password = "satish";
	
	$scope.adminLogin = function(){

		var data = {
			username: $scope.login.email,
			password: $scope.login.password
		}

		$http.post("api/api.php", data).success(function(responce){
			console.log(responce);
			console.log("clear");
		}).error(function(error){
			console.error(error);
		});

		// if( $scope.username == data.username && $scope.password == data.password ){
		// 	console.log(data.username);
		// 	console.log("logged in");
		// 	$location.path("adminpanel");
		// }
	};

});