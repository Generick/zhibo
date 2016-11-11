<?php

include('include/header.inc.php');
$roomnumber=(int)$_GET['roomnumber'];

$showinfo=$db->CacheGetRow(10,"select u.userId as userId,u.avatar as avatar,u.nickname as nickname,u.city as city,a.roomNumber as roomNumber from bu_user_anchors a LEFT JOIN bu_user u on a.userId = u.userId WHERE a.roomNumber = $roomnumber and a.`status` =1 and u.`status` =1");

if(!!$showinfo){
  //  include($app_path."include/footer.inc.php");
   // header("Location:/blank.php");
 //   exit;
}

if ($showinfo['nickname'] == base64_encode(base64_decode($showinfo['nickname']))) {
    $b = base64_decode($showinfo['nickname']);
}else{
    $b = $showinfo['nickname'];
}
$showinfo['nickname'] =$b;
$showinfo['starlevel']=1;
//print_r($showinfo);
include($app_path."include/footer.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>视频播放</title>
    <style>
        html, body {
            background-repeat: no-repeat;
            min-width:1284px;
            font-family: "微软雅黑","宋体","Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size:14px;
            color: #5F544E;
            min-height: 883px;
            position: relative;
            height: 100%;
        }
        *{
            padding: 0;
            margin: 0;
        }
        *,*:before,*:after {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        header{margin-top: 10px;}
        .portrait{margin-left: 20px;  width: 70px;  height: 70px;border-radius: 35px;}
        .live-video{margin: 20px auto;width: 90%;height: 90%;overflow: hidden;}
        .live-video video{width: 100%;height: 100%}
    </style>
</head>
<body>
    <header>
        <div><img src="<?php echo _IMAGES_DOMAIN_."/".$showinfo['avatar']?>" class="portrait" alt="<?php echo $showinfo['nickname'];?>"/></div>
        <div></div>
    </header>
    <div class="main">
        <div class="live-video">
            <video width="" height="" controls>
                <source src="http://hls.181show.com/mutian-ucloud/1020/playlist.m3u8" type="video/ogg" />
            </video>
        </div>
    </div>
    <footer></footer>
</body>
</html>


