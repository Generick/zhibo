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
squareApp.filter("images",function(){
	return function(value){
		if (value==null) {
			return value="http://images.181show.com/46a920d47a9c287e627693554180598a?p=0";
		}
		return value;
	}
})



