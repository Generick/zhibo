(function(){
	var app = angular.module('personalCenter',[]);
	app.controller('center',function($scope,$http){
		$scope.news = [];
		$scope.pages= [] 
		$scope.curPage=1;
		$scope.userId=userId;

		function setCur(n){
			$scope.pages= [];
			for(var i=1;i<=n;i++){
				$scope.pages.push(i)
			}
		}
		getPage(1,$scope.userId);
		// 获取显示数据
		$scope.getPage=getPage;
		function getPage(p,userId){
			console.log(00)
			$scope.curPage=p;
			$http.get('rest/usersGiftDetails/alerts.mt',{
				params:{userId:userId,page:p,num:10}
			}).success(function(arr){
				$scope.news = arr.data;
				setCur(arr.count);
			}).error(function(){
				console.log('获取失败')
			})
		}

		//删除数据
		$scope.dele=function(id,p,userId){
			$http.post('rest/usersGiftDetails/delAlerts.mt',{
				params:{id:id}
			}).success(function(arr){
				console.log(arr)
				getPage(p,userId);
			}).error(function(){
				alert('删除失败');
			})
		}

	});

	
	app.filter("toJson",function(){
		return function(value){
			return angular.fromJson(value)
		}
	})

	app.filter("decode",function(){
	return function(value){
		return decodeURIComponent(value)
	}
})

})()