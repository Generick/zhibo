<?php
$roomnumber = (int)$_GET['roomnumber'];

//$showinfo = $db->CacheGetRow(10, "select u.userId as userId,u.avatar as avatar,u.nickname as nickname,u.city as city,a.roomNumber as roomNumber from bu_user_anchors a LEFT JOIN bu_user u on a.userId = u.userId WHERE a.roomNumber = $roomnumber and a.`status` =1 and u.`status` =1");

// if (!!$showinfo) {
//     //  include($app_path."include/footer.inc.php");
//     // header("Location:/blank.php");
//     //   exit;
// }

// if ($showinfo['nickname'] == base64_encode(base64_decode($showinfo['nickname']))) {
//     $b = base64_decode($showinfo['nickname']);
// } else {
//     $b = $showinfo['nickname'];
// }
// $showinfo['nickname'] = $b;
// $showinfo['starlevel'] = 1;
// //print_r($showinfo);
// include($app_path . "include/footer.inc.php");
//...
function curl_post_data($url,$post){
  $options = array(
    CURLOPT_RETURNTRANSFER=>true,
    CURLOPT_HEADER=>false,
    CURLOPT_POST=>true,
    CURLOPT_POSTFIELDS=>$post,
    );
  $ch = curl_init($url);
  curl_setopt_array($ch,$options);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}
$post = array('roomnumber'=>$roomnumber);
$interface = _INTERFACE_."/rest/homeAnchors/livePhone.mt?roomNumber=".$roomnumber;
$datas = curl_post_data($interface,$post);
$data = json_decode($datas,true);
//print_r($data);
$zhuboinfo = $data['data'];
$roomUsers = $zhuboinfo['roomUsers'];
//print_r($data['data']);
?>
<!DOCTYPE html>
<html>
<head>
    <title>视频播放</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/templates/livePhone/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/templates/livePhone/css/style.css">
    <style type="text/css">
      .downgame{
        width: 250px;
        height: 80px;
        margin-left: 67%;
        margin-top: 6%;
        border-radius: 8px;
        border: solid 0px gray;
        /*background: transparent;*/
        z-index: 10000;
        position: absolute;
        font-family: Microsoft Yahei;
        color: white;
        font-size: 34px;
        font-weight: 400;
        letter-spacing: 3px;
        background-color: #ec4356;
      }
    </style>
</head>
<body class="body">
    <div class="header">
    <header>
      <div class="row">
            <div class="anchLive firAnch col-xs-2 clearfix bgff">
                <div class="anchImg pull-left">
                  <img src="<?php echo $zhuboinfo['ava'];?>"/>
                     <div class="degree bgff colorR"><?php echo urldecode($zhuboinfo['nickName']);?></div> 
                </div>
                <!--<div class="firAnchR pull-left">
                  <p class="colorR">LIVE</p> 
                    <p class="color99">34567</p>
                </div>-->
            </div>
            <?php
                $usernum = count($roomUsers);
                if ($usernum<=0) {
                  // nothing to do
                }else{
                  for ($i=0; $i <$usernum ; $i++) { 
                  echo '<div class="anchLive col-xs-2">
                      <div class="anchImg pull-left">
                        <img src="'.$roomUsers[$i]['ava'].'"/>
                     <div class="degree bgff colorY">'.urldecode($roomUsers[$i]['nickName']).'</div> 
                </div>
            </div>';
                }
              }
                
            ?>
            <!-- <div class="anchLive col-xs-2">
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
            </div> -->

        </div>
    </header>

    <section class="jumbotron banner row">
      <div class="col-xs-12" style="">
          <video src="http://hls.181show.com/mutian-ucloud/<?php echo $roomnumber;?>/playlist.m3u8" id="player"
                   x-webkit-airplay="true" webkit-playsinline="true" playsinline="true" controls="controls" muted="false" poster="<?php echo $zhuboinfo['image']."?p=0&w=640&h=360";?>"></video>

            <!--<img src="img/live_girl.png" width="100%" height="100%" alt="" />-->
            <div><a href="<?php echo $zhuboinfo['uploadAdd'];?>"><button class="downgame">下载游戏</button></a></div>
            <div class="txt clearfix">
                <div class="txtL pull-left" style="margin-top: 30px;">
                    <p class="tit colorR f3_4"><?php echo urldecode($zhuboinfo['nickName']);?></p>
                    <p class="color99 f2_8">
                      <span class="glyphicon glyphicon-eye-open f3_3"></span>
                        <span style="color:#999;"><?php echo $zhuboinfo['personNum'];?></span></p>
                </div>
                <div class="txtR pull-right f3" style="margin-top: 30px;clear: both;margin-top: -6.5%;margin-right: 40%;color:#999;">
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
              <span class="glyphicon glyphicon-fire" style="margin-top: 30px;"></span>
                精彩推荐
            </h4>     
        </div>
       <div class="row">
       <?php 
            
            $hotAnchors = $data['data']['hotAnchors'];
            $hotNum = count($hotAnchors)<6?count($hotAnchors):6;
            $imgsize = '&w=330&h=181';
            //$imgsize = '';
            //$hotNum = 0;
            for ($i=0; $i <$hotNum ; $i++) { 
              if($hotNum<=0) break;
              if ($i == 0) {
                echo '<div class="col-xs-6" ng-repeat="reply in replies">
                <a href="'.$hotAnchors[$i]['roomNumber'].'" class="thumbnail">
                  <div class="recommImg thumbnail">
                    <img src="'.$hotAnchors[$i]['image'].$imgsize.'" alt=""/>
                    <div class="thumb-bar"></div>
                  </div>
                  <div class="recommB">
                    <div class="clearfix">
                      <span class="color00 pull-left f3">'.$hotAnchors[$i]['title'].'</span>
                      <div class="color99 pull-right f2_8">
                        <span class="glyphicon glyphicon-eye-open"></span>
                        <span>'.$hotAnchors[$i]['numbers'].'</span>
                      </div>
                    </div>
                    <p class="color99 ellipsis f3">'.$hotAnchors[$i]['descri'].'</p>
                  </div>

                </a>
              </div>';
              }else{
                echo '<div class="col-xs-6">
            <a href="'.$hotAnchors[$i]['roomNumber'].'" class="thumbnail">
              <div class="recommImg thumbnail">
                <img src="'.$hotAnchors[$i]['image'].$imgsize.'" alt=""/>
                <div class="thumb-bar"></div>
              </div>
              <div class="recommB">
                <div class="clearfix">
                  <span class="color00 pull-left f3">'.$hotAnchors[$i]['title'].'</span>
                  <div class="color99 pull-right f2_8">
                    <span class="glyphicon glyphicon-eye-open"></span>
                    <span>'.$hotAnchors[$i]['numbers'].'</span>
                  </div>
                </div>
                <p class="color99 ellipsis f3">'.$hotAnchors[$i]['descri'].'</p>
              </div>

            </a>
          </div>';
              }
            }
       ?>
          <!-- <div class="col-xs-6" ng-repeat="reply in replies">
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
              </div> -->
          <!-- <div class="col-xs-6">
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
          </div> -->
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


