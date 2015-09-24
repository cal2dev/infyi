App.controller('onBoardController', ['$scope','$rootScope','$window','dataFactory','$location','$cookieStore','ipCookie','Notification', function($scope,$rootScope,$window,dataFactory,$location,$cookieStore,ipCookie,Notification){ // ,'cfpLoadingBar' ,cfpLoadingBar - for loading bar
	if(ipCookie('cookie_login')){
		$location.path("dashboard");
	}
	$scope.pageClass = 'page-home';
	
	/** Logout */
	$scope.logout = function() {
		//console.log(loginCredentials);
        dataFactory.logout()
            .success(function (response,status) {
            	
            	var msg=getHtmlMessage(response.message);
            	Notification.success({message: msg, title: '<i>Great!!  </i>', delay: 20000});
            	//$location.path("onBoard");
            	$window.location.reload();
            	$location.path("login");
            })
            .error(function(response,status) {
            	//console.log(response);
            	var msg=getHtmlMessage(response.message);
            	//Notification.error({message: 'Error notification 1s', delay: 5000});
            	Notification.error({message: msg, title: '<i>OOps!! Somethng Went Wrong </i>', delay: 10000});
            	console.log();
				//console.log(status);
            //	showMessage("msg","danger",response.error+" Error Code "+status+".");
            });
	}
	
}])

