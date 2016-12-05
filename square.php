<!doctype html>
<html ng-app="squareApp">
<head>
    <meta charset="utf-8">
    <title>广场-蝌蚪直播</title>
    <meta property="qc:admins" content="105415766763547646" />
    <meta name="description" content="超人气视频直播互动娱乐社区，在这里你可以展示自己的才艺，也可以跟众多优秀的美女主播在线互动聊天、视频交友" />
    <!--<link data-fixed="true" href="/templates/square.css" rel="stylesheet">-->
    <link href="/css/kedo/style.css?vsn={$svn}" rel="stylesheet">
    <link href="/css/kedo/anchorLevel.css?vsn={$vsn}" rel="stylesheet">
    <script src="/skin/desert/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/login.js??{$vsn}"></script>
    <script type="text/javascript" src="/js/angular/angular.min.js"></script>
    <script type="text/javascript" src="/js/angular/square.js"></script>
    <script>
    $(function(){
		function SwapTab(name, title, content, Sub, cur) {
			$(name + ' ' + title).click(function () {
				$(this).addClass(cur).siblings().removeClass(cur);
				$(content + " > " + Sub).eq($(name + ' ' + title).index(this)).show().siblings().hide();
	
			})
		}
		
		SwapTab(".square .squareTit", "div", ".squareCon", ".squareDe", "active");
	})
    </script>
</head>
<body style="padding-top:60px;" ng-controller="square">
<?php
include("include/header.inc.php");
$user = checklogin();
include_once('tpl_header.php');
?>
	<div class="hotCon square container">
        <div class="squareTit text-center clearfix">
            <div class="showHd pull-left active"></div>
           	<div class="gameHd pull-left"></div>
        </div>
        <div class="row squareCon">
        	<div class="squareDe" style="display:block; ">
            	<div class="col-lg-1 col-md-2 col-sm-3 col-xs-4" ng-repeat="squAnch in squAnchs">
                <a href="" class="hotItem thumbnail" >
                  <img src="{{squAnch.image}}&w=97&h=146" alt="{{squAnch.nickName}}"/>
                  <div class="{{squAnch.levelImg}}"></div>
                  <span ng-if="squAnch.totalpoint==1" class="glyphicon glyphicon-stats"></span>
                  <div class="hotT thumbnail">
                    <p class="text-center color33">人数：<span>{{squAnch.numbers}}</span></p>
                    
                  </div>
                  <div class="hotB">
                    <span class="colorPin f14 f14">{{squAnch.nickName}}</span>  
                    <p class="f12 color99" ng-if="squAnch.onlineTime>0">
                        <span>{{squAnch.onlineTime}}</span>
                        <span>分钟之前</span>
                    </p>
                    <p class="f12" ng-if="squAnch.onlineTime==0">
                        <span>未开播</span>
                    </p>
                 </div>
              </a>
            
            </div>
            </div>
          	
            <div class="squareDe gameAnch">
            	<div class="page-header">
                	<h4><span class="glyphicon glyphicon-fire bgPin colorff"></span> 排行推荐</h4>
                </div>
            	<div class="col-lg-2 col-sm-3 col-xs-4" ng-repeat="gameAnch in gameAnchs">                    
                <a href="" target="_blank" class="thumbnail bgf4">            
                    <div class="recommImg">                        
                        <img class="lazy" src="{{gameAnch.image}}&w=221&h=146" alt="{{gameAnch.nickName}}">                        
                        <div class="thumb-bar"></div>                        
                        <div class="shadow"></div>                        
                        <div class="playBtn"></div>                    
                    </div>                    
                    <div class="recommB">                        
                        <div class="clearfix">                            
                            <span class="color33 pull-left ellipsis">{{gameAnch.nickName}}</span>
                            <div class="color99 pull-right">                                
                            <span class="glyphicon glyphicon-eye-open"></span>            
                            <span>{{gameAnch.numbers}}</span>                            
                        </div>                        
                	</div>                        
                	<p class="color99 ellipsis f12">{{gameAnch.title}}</p>                    
                </div>
                </a>                    
            </div>
            </div>      
            
            
            
        
                    
          
          
          
        </div>
        
    </div>

<?php include('tpl_footer.php'); ?>


</body>
</html>