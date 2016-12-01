var app=angular.module('personalCenter',[]);
app.controller('center',function($scope,$http){
	$scope.news=[];
	$scope.replies=[{id:1,content:'试试'}]
	/*$http.post('rest/homeAnchors/livePhone.mt?roomNumber=1044',{
		//params:{act:'get',page:1}
	}).success(function(arr){
		alert(arr)
	}).error(function(){
		alert('读取失败，请稍后重试')
	})*/
})