var app=angular.module('personalCenter',[]);
app.controller('center',function($scope,$http){
	$scope.news=[];
	$http.get('',{
		params:{act:'get',page:1}
	}).success(function(arr){
		//alert(arr)
	}).error(function(){
		alert('读取失败，请稍后重试')
	})
})