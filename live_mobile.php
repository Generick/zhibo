<?php
$roomnumber = (int)$_GET['roomnumber'];

$showinfo = $db->CacheGetRow(10, "select u.userId as userId,u.avatar as avatar,u.nickname as nickname,u.city as city,a.roomNumber as roomNumber from bu_user_anchors a LEFT JOIN bu_user u on a.userId = u.userId WHERE a.roomNumber = $roomnumber and a.`status` =1 and u.`status` =1");

if (!!$showinfo) {
    //  include($app_path."include/footer.inc.php");
    // header("Location:/blank.php");
    //   exit;
}

if ($showinfo['nickname'] == base64_encode(base64_decode($showinfo['nickname']))) {
    $b = base64_decode($showinfo['nickname']);
} else {
    $b = $showinfo['nickname'];
}
$showinfo['nickname'] = $b;
$showinfo['starlevel'] = 1;
//print_r($showinfo);
include($app_path . "include/footer.inc.php");
?>
<!DOCTYPE html>
<html ng-app="personalCenter">
<head>
    <title>视频播放</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/templates/livePhone/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/templates/livePhone/css/style.css">
    <script type="text/javascript" src="js/angular/angular.min.js"></script>
    <script type="text/javascript" src="js/angular/center.js"></script>
</head>
<body class="body" ng-controller="center">
    <div class="header">
    <header>
      <div class="row">
            <div class="anchLive firAnch col-xs-2 clearfix bgff">
                <div class="anchImg pull-left">
                  <img src="/templates/livePhone/img/934a3f4e9c8bac9e9b99d7ac0a8da00a.jpg"/>
                     <div class="degree bgff colorR">主</div> 
                </div>
                <!--<div class="firAnchR pull-left">
                  <p class="colorR">LIVE</p> 
                    <p class="color99">34567</p>
                </div>-->
            </div>
            <div class="anchLive col-xs-2">
                <div class="anchImg pull-left">
                  <img src="/templates/livePhone/img/934a3f4e9c8bac9e9b99d7ac0a8da00a.jpg"/>
                     <div class="degree bgff colorY">守</div> 
                </div>
            </div>
            <div class="anchLive col-xs-2">
                <div class="anchImg pull-left">
                  <img src="/templates/livePhone/img/934a3f4e9c8bac9e9b99d7ac0a8da00a.jpg"/>
                     <div class="degree bgff colorY">守</div> 
                </div>
            </div>
            <div class="anchLive col-xs-2">
                <div class="anchImg pull-left">
                  <img src="/templates/livePhone/img/934a3f4e9c8bac9e9b99d7ac0a8da00a.jpg"/>
                     <div class="degree bgff colorBlue">管</div> 
                </div>
            </div>
            <div class="anchLive col-xs-2">
                  <img src="/templates/livePhone/img/934a3f4e9c8bac9e9b99d7ac0a8da00a.jpg"/>
            </div>
            <div class="anchLive col-xs-2">
                  <img src="/templates/livePhone/img/934a3f4e9c8bac9e9b99d7ac0a8da00a.jpg"/>
            </div>
        </div>
    </header>

    <section class="jumbotron banner row">
      <div class="col-xs-12">
          <video src="1.mp4" id="000.mp4"
                   x-webkit-airplay="true" webkit-playsinline="true" controls="controls" muted="true"></video>

            <!--<img src="img/live_girl.png" width="100%" height="100%" alt="" />-->
            <div class="txt clearfix">
                <div class="txtL pull-left">
                    <p class="tit colorR f3_4">女人如歌节目</p>
                    <p class="color99 f2_8">
                      <span class="glyphicon glyphicon-eye-open f3_3"></span>
                        5644654</p>
                </div>
                <div class="txtR pull-right f3">
                    关注她
                    <span class="glyphicon glyphicon-heart colorR"></span>
                </div>
            </div>
      </div>
    </section>
</div>
<section class="recommend">   
       <div class="page-header clearfix">
            <h4 class="pull-left f3_4">
              <span class="glyphicon glyphicon-fire"></span>
                精彩推荐
            </h4>     
        </div>
       <div class="row">
          <div class="col-xs-6" ng-repeat="reply in replies">
                <a href="#" class="thumbnail">
                  <div class="recommImg thumbnail">
                    <img src="/templates/livePhone/img/pic_01.png" alt=""/>
                    <div class="thumb-bar"></div>
                  </div>
                  <div class="recommB">
                    <div class="clearfix">
                      <span class="color00 pull-left f3">{{reply.id}}</span>
                      <div class="color99 pull-right f2_8">
                        <span class="glyphicon glyphicon-eye-open"></span>
                        <span>2143324</span>
                      </div>
                    </div>
                    <p class="color99 ellipsis f3">谢霆锋百科知识 舒淇变迷妹点赞</p>
                  </div>

                </a>
              </div>
          <div class="col-xs-6">
            <a href="#" class="thumbnail">
              <div class="recommImg thumbnail">
                <img src="/templates/livePhone/img/pic_01.png" alt=""/>
                <div class="thumb-bar"></div>
              </div>
              <div class="recommB">
                <div class="clearfix">
                  <span class="color00 pull-left f3">女人如歌节目</span>
                  <div class="color99 pull-right f2_8">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span>2143324</span>
                  </div>
                </div>
                <p class="color99 ellipsis f3">谢霆锋百科知识 舒淇变迷妹点赞</p>
              </div>

            </a>
          </div>
          <div class="col-xs-6">
            <a href="#" class="thumbnail">
              <div class="recommImg thumbnail">
                <img src="/templates/livePhone/img/pic_01.png" alt=""/>
                <div class="thumb-bar"></div>
              </div>
              <div class="recommB">
                <div class="clearfix">
                  <span class="color00 pull-left f3">女人如歌节目</span>
                  <div class="color99 pull-right f2_8">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span>2143324</span>
                  </div>
                </div>
                <p class="color99 ellipsis f3">谢霆锋百科知识 舒淇变迷妹点赞</p>
              </div>

            </a>
          </div>
          <div class="col-xs-6">
            <a href="#" class="thumbnail">
              <div class="recommImg thumbnail">
                <img src="/templates/livePhone/img/pic_01.png" alt=""/>
                <div class="thumb-bar"></div>
              </div>
              <div class="recommB">
                <div class="clearfix">
                  <span class="color00 pull-left f3">女人如歌节目</span>
                  <div class="color99 pull-right f2_8">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span>2143324</span>
                  </div>
                </div>
                <p class="color99 ellipsis f3">谢霆锋百科知识 舒淇变迷妹点赞</p>
              </div>

            </a>
          </div>
          <div class="col-xs-6">
            <a href="#" class="thumbnail">
              <div class="recommImg thumbnail">
                <img src="/templates/livePhone/img/pic_01.png" alt=""/>
                <div class="thumb-bar"></div>
              </div>
              <div class="recommB">
                <div class="clearfix">
                  <span class="color00 pull-left f3">女人如歌节目</span>
                  <div class="color99 pull-right f2_8">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span>2143324</span>
                  </div>
                </div>
                <p class="color99 ellipsis f3">谢霆锋百科知识 舒淇变迷妹点赞</p>
              </div>

            </a>
          </div>
          <div class="col-xs-6">
            <a href="#" class="thumbnail">
              <div class="recommImg thumbnail">
                <img src="/templates/livePhone/img/pic_01.png" alt=""/>
                <div class="thumb-bar"></div>
              </div>
              <div class="recommB">
                <div class="clearfix">
                  <span class="color00 pull-left f3">女人如歌节目</span>
                  <div class="color99 pull-right f2_8">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span>2143324</span>
                  </div>
                </div>
                <p class="color99 ellipsis f3">谢霆锋百科知识 舒淇变迷妹点赞</p>
              </div>

            </a>
          </div>
       </div>
    </section>




<!-- <header>
    <div><img src="<?php echo _IMAGES_DOMAIN_ . "/" . $showinfo['avatar'] ?>" class="portrait"
              alt="<?php echo $showinfo['nickname']; ?>"/></div>
    <div></div>
</header>
<div class="main">
    <div class="live-video">
        <video src="http://hls.181show.com/mutian-ucloud/<?php echo $roomnumber;?>/playlist.m3u8" id="000.mp4" width="500" height="500" autoplay="autoplay"
               x-webkit-airplay="true" controls="controls" muted="true"></video>
    </div>
</div>
<footer></footer> -->

</body>
</html>


