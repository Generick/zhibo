<!--main-->
<div class="inmiddle" ng-controller="center">
    <?php
    $current_page="notice";
    include_once('./include/personal_tpl/center-info.php');
    include_once('./include/personal_tpl/menu_left.php');
    ?>

    <div class="center-right">

        <div class="cr-care" >
            <div class="cr-title">消息中心</div>

            <div class="none-message" style="display: none">暂无消息</div>
            <div class="cr-notice-main" style="">
                <div class="mlb-handlar">
                    <span class="systitle">系统消息</span>
                    <div class="right-h">
                        <input type="checkbox" name="select-all" class="select-all-box"/>
                        <span class="select-all-text">全选/反选</span>
                        <span class="del-m kbutton">删除</span>
                    </div>
                </div>
                <div class="has-message">
                    <div class="message-list-box" ng-repeat="new in news">
                        <div class="message-list-title">守护到期提醒 <span class="times">2016-11-16 20:20:08</span></div>
                        <div class="message-sf">
                           <div class="message-sf-cont">
                               您对 <a href="#" class="names">梁胖胖吃翔</a> 的守护期限即将到期,请及时守护
                           </div>
                            <div class="message-sf-control">
                                <span class="message-sf-fee lbutton">前往续费</span>
                                <span class="message-del-single kbutton">删除</span>
                            </div>
                        </div>

                    </div>
                    <div class="message-list-box">
                        <div class="message-list-title">管理设置提醒 <span class="times">2016-11-16 20:20:08</span></div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                您已成为 <a href="#" class="names">xx频道</a> 的管理员
                            </div>
                            <div class="message-sf-control">
                                <span class="message-sf-fee lbutton">管理房间</span>
                                <span class="message-del-single kbutton">删除</span>
                            </div>
                        </div>
                    </div>
                    <div class="message-list-box">
                        <div class="message-list-title">物品过期提醒 <span class="times">2016-11-16 20:20:08</span></div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                您的 xxx座驾 即将到期 请即使续费
                            </div>
                            <div class="message-sf-control">
                                <span class="message-sf-fee lbutton">管理房间</span>
                                <span class="message-del-single kbutton">删除</span>
                            </div>
                        </div>
                    </div>

                    <div class="message-list-box">
                        <div class="message-list-title">开播提醒 <span class="times">2016-11-16 20:20:08</span></div>
                        <div class="message-gl">
                            <div class="message-sf-cont">
                                您关注的主播 <a href="/1020" class="names">龙基基不搞基</a> 已经开播,赶紧去看看吧!
                            </div>
                            <div class="message-sf-control">
                                <span class="message-sf-fee lbutton">管理房间</span>
                                <span class="message-del-single kbutton">删除</span>
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
        <ul class="pagination">
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>



</div>
</div>


<!--main-->

<?php include('tpl_footer.php'); ?>

</body>
</html>