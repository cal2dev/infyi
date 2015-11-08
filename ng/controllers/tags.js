App.controller('tagsController', ['$scope','$rootScope','dataFactory','Notification','$uibModal', function($scope,$rootScope,dataFactory,Notification,$uibModal){
	$scope.pageClass = 'page-home';
	//$rootScope.rightmenu = [];
	/** Submitting login form */
	$scope.createTag = function(size) {
		//alert('create tag');
		 var modalInstance = $uibModal.open({
		      animation: $scope.animationsEnabled,
		      templateUrl: 'myModalContent.html',
		      controller: 'ModalInstanceCtrl',
		      size: size,
		      resolve: {
		        items: function () {
		          return $scope.items;
		        }
		      }
		    });
	}
	
	
	
	
}])


App.directive('pwCheck', [function () {
    return {
      require: 'ngModel',
      link: function (scope, elem, attrs, ctrl) {
        var firstPassword = '#' + attrs.pwCheck;
        elem.add(firstPassword).on('keyup', function () {
          scope.$apply(function () {
            var v = elem.val()===$(firstPassword).val();
            ctrl.$setValidity('pwmatch', v);
          });
        });
      }
    }
  }]);
