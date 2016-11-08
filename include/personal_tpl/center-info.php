<script src="/js/sea.js"></script>
<script>

    seajs.config({
        base: "/js/",
        alias: {
            // "jquery": "jquery/jquery/1.10.1/jquery.js"
        }
    });
    seajs.use("ajax/username");
</script>
<div class="zhezhao"></div>

<div class="center-info">
    <div class="info-left">
        <div class="c-photo">
            <img src="<?php echo _IMAGES_DOMAIN_."/".$user[avatar];?>" alt="<?php echo $user['nickname'];?>" />
        </div>

        <div class="a-myname">
            <div class="m-name">
                <span class="center-name"><?php echo $user['nickname']?></span><span class="center-edit"></span>
            </div>
            <div class="uid">ID:<?php echo $user['userId']?></div>
        </div>
        <div class="c-myname" style="display: none">
            <div><input type="input" id="nickname" value="<?php echo $user['nickname']?>" maxlength="16"  /></div>
            <button id="sure" class="small-button" onclick="seajs.use('ajax/username', function(test){ test.check(); });">确定</button>
            <button id="cancel"  class="small-button">取消</button>
        </div>
    </div>
    <div class="info-middle">
        <div class="c-mylevel">我的爵位</div>
        <div class="c-level-bar">
            <div class="center-level sprite consumelevel-pic_consumelevel_<?php echo $user['spender']?>"></div>
            <div class="c-all-bars">
                <div class="c-i-bar" style="width:<?php echo $user['nextSpender']?>%"></div>
            </div>
            <div  class="center-level sprite consumelevel-pic_consumelevel_<?php echo $user['spender']+1?>"></div>
        </div>
        <div class="c-level-message">还差<?php echo $user['differ'];?>经验升级</div>
    </div>
    <div class="c-right">
        <div class="c-myfund">我的资产</div>
        <div class="c-funds">
            <div class="c-funds-jb"><?php echo (int)$user['coins']?> </div>
            <div class="c-funds-cz"><a href="/pay.php">充值</a></div>
        </div>
    </div>

</div>