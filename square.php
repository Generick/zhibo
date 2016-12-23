<!doctype html>
<html ng-app="squareApp">
<head>
    <meta charset="utf-8">
    <title>广场-蝌蚪直播</title>
    <meta property="qc:admins" content="105415766763547646" />
    <meta name="description" content="超人气视频直播互动娱乐社区，在这里你可以展示自己的才艺，也可以跟众多优秀的美女主播在线互动聊天、视频交友" />
    <!--<link data-fixed="true" href="/templates/square.css" rel="stylesheet">-->
    <link href="{$cdn}/public/index/css/style.css?vsn={$vsn}" rel="stylesheet">
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
<body style="padding-top:100px;" ng-controller="square">
<?php
$current_page="square";
include("include/header.inc.php");
$user = checklogin();
include_once('tpl_header.php');
?>
    <div class="hotCon square container">
        <div class="squareTit text-center clearfix">
            <div class="gameHd pull-left active"></div>
            <div class="showHd pull-left"></div>
        </div>
        <div class="row squareCon"> 
            <div class="squareDe gameAnch" style="display:block; ">
                <div class="secTit text-center clearfix color99">
                    <span class="allG colorPin"><a href="javascript:;">全部</a></span>
                    <span class="tits" ng-repeat="sort in sorts" ng-class="sort==curSort ?'colorPin':''" ng-click="getSort(sort)"><a href="javascript:;" >{{sort}}</a></span>
                </div>
                <div class="page-header">
                    <h4><span class="glyphicon glyphicon-fire bgPin colorff"></span> 排行推荐</h4>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" ng-repeat="rankGame in rankGames">                    
                    <a href="{{rankGame.roomNumber}}" target="_blank" class="thumbnail bgf4">            
                        <div class="recommImg">                        
                            <img class="lazy" ng-src="{{rankGame.image}}&w=220&h=146" alt="{{gameAnch.nickName|decode}}">                        
                            <div class="thumb-bar"></div>                        
                            <div class="shadow"></div>                        
                            <div class="playBtn"></div>                    
                        </div>                    
                        <div class="recommB clearfix">  
                            <img class="pull-left recommBL img-circle" ng-src="{{rankGame.imagePrivate}}"/>                         
                            <div class="recommBR pull-right">
                                <div class="clearfix">                            
                                    <span class="color33 pull-left ellipsis">{{rankGame.nickName|decode}}</span>
                                    <div class="color99 pull-right" ng-if="rankGame.numbers>0">                                
                                        <span class="glyphicon glyphicon-eye-open"></span>            
                                        <span>{{rankGame.numbers}}</span>                            
                                    </div>                        
                            </div>                        
                                <p class="color99 ellipsis f12">{{rankGame.title}}</p>
                            </div>
                                                
                        </div>
                    </a>                    
                </div>
                
                <div class="page-header">
                    <h4 id="sortTit">
                    	<span class="glyphicon glyphicon-fire bgPin colorff"></span>
                    	全部游戏</h4>
                </div>

                <div class="allGaD"  id="allGaD">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" ng-repeat="gameAnch in gameAnchs">                    
                    <a href="{{gameAnch.roomNumber}}" target="_blank" class="thumbnail bgf4">            
                        <div class="recommImg">                        
                            <img class="lazy" ng-src="{{gameAnch.image}}&w=220&h=146" alt="{{gameAnch.nickName|decode}}">                        
                            <div class="thumb-bar"></div>                        
                            <div class="shadow"></div>                        
                            <div class="playBtn"></div>                    
                        </div>                  
                        <div class="recommB clearfix">  
                            <img class="pull-left recommBL img-circle" ng-src="{{gameAnch.imagePrivate}}"/>                         
                            <div class="recommBR pull-right">
                                <div class="clearfix">                            
                                    <span class="color33 pull-left ellipsis">{{gameAnch.nickName|decode}}</span>
                                    <div class="color99 pull-right" ng-if="rankGame.numbers>0">                                
                                        <span class="glyphicon glyphicon-eye-open"></span>            
                                        <span>{{gameAnch.numbers}}</span>                            
                                    </div>                        
                            </div>                        
                                <p class="color99 ellipsis f12">{{gameAnch.title}}</p>
                            </div>
                                                
                        </div>
                    </a>                    
                </div>
                </div>
                
                <div id="gameItems">
                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6" ng-repeat="gameItem in gameItems">                    
                    <a href="{{gameItem.roomNumber}}" target="_blank" class="thumbnail bgf4">            
                        <div class="recommImg">                        
                            <img class="lazy" ng-src="{{gameItem.image}}&w=220&h=146" alt="{{gameItem.nickName|decode}}">                        
                            <div class="thumb-bar"></div>                        
                            <div class="shadow"></div>                        
                            <div class="playBtn"></div>                    
                        </div>                  
                        <div class="recommB clearfix">  
                            <img class="pull-left recommBL img-circle" ng-src="{{gameItem.imagePrivate}}"/>                         
                            <div class="recommBR pull-right">
                                <div class="clearfix">                            
                                    <span class="color33 pull-left ellipsis">{{gameItem.nickName|decode}}</span>
                                    <div class="color99 pull-right" ng-if="rankGame.numbers>0">                                
                                        <span class="glyphicon glyphicon-eye-open"></span>            
                                        <span>{{gameItem.numbers}}</span>                            
                                    </div>                        
                            </div>                        
                                <p class="color99 ellipsis f12">{{gameItem.title}}</p>
                            </div>
                                                
                        </div>
                    </a>                    
                </div>
                </div>
            </div>  
            <div class="squareDe">
                <div class="secTit text-center clearfix color99">
                    <span>全部</span>
                    <span class="colorPin">最新入驻</span>
                    <span>户外</span>
                    <span>音乐</span>
                    <span>蠢萌</span>
                    <span>搞怪</span>
                    <span>段子</span>
                </div>
                <div class="col-pc-1 col-md-2 col-sm-3 col-xs-4" ng-repeat="squAnch in squAnchs">
                <a href="{{squAnch.roomNumber}}" target="_blank" class="hotItem thumbnail" >
                  <img ng-src="{{squAnch.image}}&w=97&h=146" alt="{{squAnch.nickName|decode}}"/>
                  <div class="{{squAnch.levelImg}}"></div>
                  <span ng-if="squAnch.online==1" class="glyphicon glyphicon-stats"></span>
                  <div class="hotT thumbnail">
                    <p class="text-center color33">人数：<span>{{squAnch.numbers}}</span></p>
                    
                  </div>
                  <div class="hotB">
                    <span class="colorPin f14">{{squAnch.nickName|decode}}</span>  
                    <p class="f12 color99" ng-if="squAnch.onlineTime>0">
                        <span>{{squAnch.onlineTime|time}}</span>
                        <span>分钟之前</span>
                    </p>
                    <p class="f12" ng-if="squAnch.onlineTime==0">
                        <span>未开播</span>
                    </p>
                 </div>
                 <div class="shadow thumbnail"></div>
                 <div class="playBtn"></div>
              </a>
            
            </div>
            </div>    
        </div>
        
    </div>

<?php include('tpl_footer.php'); ?>


</body>
</html>