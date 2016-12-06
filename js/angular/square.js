var squareApp=angular.module('squareApp',[]);
squareApp.controller('square',function($scope,$http){
	$scope.squAnchs=[];
	$scope.gameAnchs=[];

	$http.get("/files/allAnchors/1.json",{
		headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
	}).success(function(json){
		console.log(json.data)
		$scope.squAnchs=json.data;
	});

	$http.post("/files/allGameAnchors/1.json",{
		//params:{userId:6798,page:1,num:10}
	}).success(function(json){
		console.log(json)
		$scope.gameAnchs=json.data;
		//console.log($scope.gameAnchs)
	});

})	


