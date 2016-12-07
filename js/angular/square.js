var squareApp=angular.module('squareApp',[]);
squareApp.controller('square',function($scope,$http){
	$scope.squAnchs=[];
	$scope.gameAnchs=[];
	$scope.rankGames=[];

	$http.get("/files/allAnchors/1.json",{
		headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'}
	}).success(function(json){
		$scope.squAnchs=json.data;
		console.log($scope.squAnchs)
		for (var i = 0; i < $scope.squAnchs.length; i++) {
			console.log(decodeURIComponent($scope.squAnchs[i].nickName))
		}
	});

	$http.get("/rest/homeAnchors/pushAnchors.mt",{
		//params:{userId:6798,page:1,num:10}
	}).success(function(json){
		$scope.rankGames=json.data;
		//console.log($scope.gameAnchs)
	});

	$http.get("/files/allGameAnchors/1.json",{
		//params:{userId:6798,page:1,num:10}
	}).success(function(json){
		$scope.gameAnchs=json.data;
		//console.log($scope.gameAnchs)
	});

})	

squareApp.filter("decode",function(){
	return function(value){
		return decodeURIComponent(value)
	}
})


