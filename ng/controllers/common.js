App.controller('authController', ['$scope','$rootScope','dataFactory','$location','$cookieStore','ipCookie', function($scope,$rootScope,dataFactory,$location,$cookieStore,ipCookie){
	if(ipCookie('cookie_login')){
		$location.path("dashboard");
	}
	$scope.pageClass = 'page-home';
	

}])
