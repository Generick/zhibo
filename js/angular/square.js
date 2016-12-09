var squareApp=angular.module('squareApp',[]);
squareApp.controller('square',function($scope,$http){
	$scope.squAnchs=[];
	$scope.gameAnchs=[];
	$scope.rankGames=[];

	$http.get("/files/allAnchors/1.json",{
		headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
	}).success(function(json){
		$scope.squAnchs=json.data;
	});

	$http.get("/rest/homeAnchors/pushAnchors.mt",{
	}).success(function(json){
		$scope.rankGames=json.data;
	});

	$http.get("/files/allGameAnchors/1.json",{
	}).success(function(json){
		$scope.gameAnchs=json.data;
	});

})	

squareApp.filter("decode",function(){
	return function(value){
		return decodeURIComponent(value)
	}
})


