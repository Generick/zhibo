/*var app=angular.module('personalCenter',[]);
app.controller('center',function($scope,$http){
	$scope.news=[];
	
	function getPage(p){
		alert(p)
		//显示
		$http.get('rest/usersGiftDetails/alerts.mt',{
			 params:{userId:6949,page:p,num:10},
		}).success(function(arr){
			console.log(arr)
			$scope.news=arr.data;
			if ($scope.news.length>10) {
				$scope.news.pop();
			}
		}).error(function(){
			alert('读取失败，请稍后重试')
		})
	}
	getPage(1)
	$scope.getPage=getPage;
	//页码
	$scope.pages=[];
	$scope.curPage=1;
	$http.get("rest/usersGiftDetails/alerts.mt",{
	}).success(function(json){
		console.log(json.count)
	}).error(function(){
		alert('页码获取失败');
	})

})*/

(function(){
	var app = angular.module('personalCenter',[]);
	app.controller('center',function($scope,$http){
		$scope.news = [];
		$scope.pages= []  //{number:1},...,...
		$scope.curPage=1;

		function setCur(n){
			$scope.pages= [];
			for(var i=1;i<=n;i++){
				$scope.pages.push(i)
			}
		}

		// 获取显示数据
		$scope.getPage=getPage;
		getPage(1);
		
		function getPage(p){
			$scope.curPage=p;
			$http.get('rest/usersGiftDetails/alerts.mt',{
				params:{userId:6798,page:p,num:10}
			}).success(function(arr){
				$scope.news = arr.data;
				//console.log($scope.news[0].details.userName)
				alert(angular.isArray($scope.news))
				setCur(arr.count);
			}).error(function(){
				console.log('获取失败')
			})
		}
	});

})()