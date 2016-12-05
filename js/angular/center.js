var app=angular.module('personalCenter',[]);
app.controller('center',function($scope,$http){
	$scope.news=[];
	$scope.pages=[];
	$scope.curPages=1;
	function getPage(p){
		$http.get('rest/usersGiftDetails/alerts.mt',{
			 params:{userId:6798,page:p,num:10},
		}).success(function(arr){
			$scope.news=arr.data;
		}).error(function(){
			alert('读取失败，请稍后重试')
		})
	}
	getPage(1)
	$scope.getPage=getPage;
	$http.get("rest/usersGiftDetails/alerts.mt",{
		params:{userId:6798,page:1,num:10}
	}).success(function(json){
		for (var i = 0; i < json.length; i++) {
			console.log(json[i])
		}
	})

})