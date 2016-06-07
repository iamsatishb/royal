var app = angular.module("satishApp", ['ngRoute']);

app.config(function($routeProvider){
	$routeProvider
	.when('/home', {
		templateUrl: 'views/home.html',
		controller: 'homeController'
	})
	.when('/iamadmin',{
		templateUrl: 'admin/iamadmin.html',
		controller: 'adminPanel'
	})
	.otherwise({
		redirectTo: '/home'
	});
});

app.controller('homeController', function ($scope){

});

app.controller('adminPanel', function ($scope){

});