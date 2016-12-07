<!--main-->
<div class="inmiddle" ng-controller="center">
    <?php
    $current_page="notice";
    include_once('./include/personal_tpl/center-info.php');
    include_once('./include/personal_tpl/menu_left.php');
    ?>

    <div class="center-right">

        <div class="cr-care" >
        	<ul class="pagination">
                <li ng-repeat="item in pages" ng-class="item==curPage ?'active':''" ng-click="getPage(item)"><a href="javascript:;">{{item}}</a></li>
            </ul>
        
            <div class="cr-title">消息中心</div>

            <div class="none-message" ng-if="news.length==0">暂无消息</div>
            <div class="cr-notice-main" style="">
                <div class="mlb-handlar">
                    <span class="systitle">系统消息</span>
                    <div class="right-h">
                        <input type="checkbox" name="select-all" class="select-all-box"/>
                        <span class="select-all-text">全选（当页）</span>
                        <button type="button" class="btn btn-sm btn-danger">删除</button>
                    </div>
                </div>
                <div class="has-message">
                
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==0">
                        <div class="message-list-title">
                        {{new.title}}<span class="times">{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}</span></div>
                        <div class="message-sf">
                           <div class="message-sf-cont">
                               你关注的<a href="{{new.roomNumber}}" class="names">{{new.details.userName}}</a> 已经开始直播
                           </div>
                            <div class="message-sf-control">
                                <!--<a href="{{new.roomNumber}}" class="message-sf-fee lbutton">进入房间</a>-->
                                <a href="{{new.roomNumber}}" class="btn btn-sm btn-default">进入房间</a>
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>

                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==1">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                {{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}前再消费{{new.money}}才能继续点亮当前爵位，记得不要让尊贵的爵位暗淡咯
                            </div>
                            <div class="message-sf-control">
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==2">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                你和{new.userName}}的亲密度等级达到{{new.level}}级
                            </div>
                            <div class="message-sf-control">
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==3">
                        <div class="message-list-title">
                        {{new.title}}<span class="times">{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}</span></div>
                        <div class="message-sf">
                           <div class="message-sf-cont">
                               你对<a href="{{new.roomNumber}}" class="names">{{new.userName}}</a>的守护还有一天就要到期了，再多留点时间守护在TA身边吧
                           </div>
                            <div class="message-sf-control">
                                <a href="{{new.roomNumber}}" class="btn btn-sm btn-default">继续守护TA</a>
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>

                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==4">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                <a href="#" class="names">{{new.userName}}</a>{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}送给你{{new.amount}}个{{new.itemName}}，你的K豆增加了{{new.amount}}
                            </div>
                            <div class="message-sf-control">
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==5">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                频道号：<a href="new.number" class="names">{{new.userName}}</a>将你设为了TA的房间管理员，你在这里享有踢人、禁言权利哦，请帮助TA管理频道秩序吧
                            </div>
                            <div class="message-sf-control">
                            	<a href="{{new.roomNumber}}" class="btn btn-sm btn-default">前去管理房间</a>
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==6">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                亲爱的用户，你的背包里有{{new.amount}}个{{new.itemName}}即将在{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}失效，请记得在失效前赶紧用掉哦
                            </div>
                            <div class="message-sf-control">
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==7">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                亲爱的用户，你的背包里有{{new.amount}}个{{new.itemName}}超过有效期，系统已自动清理。如有疑问请联系客服
                            </div>
                            <div class="message-sf-control">
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==8">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                尊贵的用户恭喜你升级成为了{{new.nobility}}贵族
                            </div>
                            <div class="message-sf-control">
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="message-list-box" ng-repeat="new in news" ng-if="new.type==9">
                        <div class="message-list-title">
                            {{new.title}}
                            <span class="times">
                            	{{new.createDT|date:"yyyy-MM-dd HH:mm:ss"}}
                            </span>
                        </div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                你的活跃度等级达到了{{new.level}}级
                            </div>
                            <div class="message-sf-control">
                                <button type="button" class="btn btn-sm btn-danger">删除</button>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    

                </div>
                <div class="message-buy-box" style="display: none">
                    <div class="mbb-top">守护独享特权</div>
                    <div class="mbb-middle">
                        <div class="mbb-img-left"></div>
                        <div class="mbb-con-right">
                            <div class="mbb-con-title">年费会员特权</div>
                            <div class="mbb-con-content">专属进场特效、专属表情、每月两次专属道具、每天一次踢人权限    <a href="#">更多</a></div>
                        </div>
                    </div>
                    <div class="mbb-bottom">
                        <div class="mbb-bot-top">
                            <div class="mbb-bot-title">守护购买</div><div class="mbb-bot-ii">开通年会会员,用用排名考前红名等特权</div>
                        </div>
                        <div class="mbb-buu-table">
                            <table>
                                <tr>
                                    <td>购买方式</td>
                                    <td><span class="an-zf an-zf-select">按月支付</span></td>
                                    <td><span class="an-zf">按月支付</span></td>
                                </tr>
                                <tr>
                                    <td>购买时长</td>
                                    <td clospan="2"><span class="an-zf">按月支付</span></td>
                                </tr>
                                <tr>
                                    <td>总价格</td>
                                    <td clospan="2"><span class="zf-db">123114逗比</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="mbb-buu-but"><button type="button" >购买</button></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>



</div>
</div>


<!--main-->

<?php include('tpl_footer.php'); ?>

</body>
</html>