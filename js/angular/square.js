var squareApp=angular.module('squareApp',[]);
squareApp.controller('square',function($scope,$http){
	$scope.squareAnch=[];
	$http.post("/rest/homeAnchors/allAnchors.mt",{
		//params:{userId:6798,page:1,num:10}
	}).success(function(json){
		$scope.squareAnchs=json.data;
		console.log(json.data)
	})

})