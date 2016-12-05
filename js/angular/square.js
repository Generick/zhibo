var squareApp=angular.module('squareApp',[]);
squareApp.controller('square',function($scope,$http){
	$scope.squAnchs=[];
	$scope.gameAnchs=[];

	$http.post("/rest/homeAnchors/allAnchors.mt",{
		headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
	}).success(function(json){
		for (var i = 0; i < json.data.length; i++) {
			//return decodeURIComponent($scope.squAnchs[i].nickName);
			console.log(decodeURIComponent(json.data[i].nickName))
			decodeURIComponent(json.data[i].nickName)
		}
		$scope.squAnchs=json.data;
		
	});

	$http.post("/rest/homeAnchors/gameAnchors.mt",{
		//params:{userId:6798,page:1,num:10}
	}).success(function(json){
		$scope.gameAnchs=json.data;
		//console.log($scope.gameAnchs)
	});

})	


