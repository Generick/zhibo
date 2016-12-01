var app=angular.module('personalCenter',[]);
app.controller('center',function($scope,$http){
	$scope.news=[];
	$scope.replies=[{id:1,content:'试试'}]
	$http.post('rest/homeAnchors/livePhone.mt',{
		 params:{roomNumber:'1044'},
		 responseType:'json'
	}).success(function(arr){
		console.log(arr)
	}).error(function(){
		alert('读取失败，请稍后重试')
	})
})