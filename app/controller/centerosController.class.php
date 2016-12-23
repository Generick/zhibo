<?php
class centerosController{
     public $db;
     public $page_var;
     public $view;
     public $user;

function index(){
    //global $page_var;
    //global $view;
    //global $db;
    $user = $this->user;
    $page_var = $this->page_var;
    
//notice state
    $states = $this->db->Execute("select state from bu_station_message where userId = {$user['userId']} and (state = 0 or state is null)");
    if ($states) {
        $stateNum = $states->RecordCount();
    }else{
        $stateNum = 0;
    }
//var_dump($states);exit;
//over
    

    
        //shouhu
        $datas = curl_post(_INTERFACE_."/rest/personCenter/myGuard.mt","userid={$user['userId']}");
        $acceptData=json_decode($datas, true);
        $this->view->assign('acceptData',$acceptData);
        //over
        // 进场特效 m_index.html
        $flage = false;
        $rs=$this->db->Execute("select g.giftid,g.giftimage,g.giftname,g.giftprice,
(SELECT if(Count(1) = 1,1,0) FROM  bu_user_cars c WHERE  g.giftid = c.giftId AND c.userId = {$user['userId']} AND c.`status`=1) as ts,
(SELECT c.active FROM  bu_user_cars c WHERE  g.giftid = c.giftId AND c.userId = {$user['userId']} AND c.`status`=1) as active,
(SELECT c.valiDT FROM  bu_user_cars c WHERE  g.giftid = c.giftId AND c.userId = {$user['userId']} AND c.`status`=1) as valiDT,
(SELECT c.id FROM  bu_user_cars c WHERE  g.giftid = c.giftId AND c.userId = {$user['userId']} AND c.`status`=1) as id
FROM gift g where g.giftcateid = 8 ORDER BY g.giftid ASC");
        $arrs = array();
        while($arr=$rs->FetchRow()){
                    $flage = true;
                    $arr=safe_output($arr,true);
                    if($arr['ts']==0){
                        $tss='?g=1';
                        $use="尚未拥有";
                        $arr['tss'] = $tss;
                        $arr['use'] = $use;
                    }else{
                        $tss ='';
                        $day = floor((strtotime($arr['valiDT']) - time())/3600/24);
                        if($arr['active']==1){
                            $use="<span class='use-car'>正在使用</span>";
                        }else{
                            $use="<span class='no-use-car'>使用</span>";
                        }
                        $arr['tss'] = '';
                        $arr['day'] = $day;
                        $arr['use'] = $use;
                    }
                    $arrs[] = $arr;
                }
                $this->view->assign('arrs',$arrs);
                //over          
//
switch ($_GET['ptype']) {
    case "index";
        $current_page = 'index';
        $view->display('m_index.html');
        break;
    case "history";
        $view->display('m_care.html');
        break;
    case "info";
        $view->display('m_self.html');
        break;
    case "mpass";
        $view->display('m_pass.html');
        break;
    case "mphone";
        $view->display('m_phone.html');
        break;
    case "mportrait";
        $view->display('m_portrait.html');
        break;
    case "recharge";
        $view->display('m_recharge.html');
        break;
    case "record";
        $view->display('m_record.html');
        break;
    case "recive";
        $view->display('m_recive.html');
        break;
    case "notice";
        $view->display('m_notice.html');
        break;
    case "treasure";
        $view->display('m_treasure.html');
        break;
    default :
        $this->view->display('m_index.html');
        break;
    }
  }

  function history(){
    $user = $this->user;
    $current_page = "care";
    $this->view->assign('current_page',$current_page);
    // get data
    $rs=$this->db->Execute("select b.roomNumber,
(SELECT o.online from bu_user_online o where o.roomnumber = b.roomNumber and o.anchors=1) online,
u.nickname,u.userId,u.avatar,
a.followeds
from  bu_user_studio b,bu_user u,bu_user_anchors a
where b.userId='{$user['userId']}'
and a.roomNumber = b.roomNumber
and u.userId = a.userId
and b.isFollow =1
");
    $arrs = array();
    while($arr=$rs->FetchRow()){
                $arr=safe_output($arr,true);
                $arr['starlevel']=point2star($arr['totalpoint']);
                $arr['nickname'] = urldecode($arr['nickname']);
                $arrs[] = $arr;
            }
            $this->view->assign('arrs',$arrs);
    //over
    $this->view->display('m_care.html');
  }

  function info(){
    $user = $this->user;
    $current_page = "info";

    $tmp_b = explode('-', $user['birthday']);
    if (is_array($tmp_b)) {
    $birthday_year = $tmp_b[0];
    $birthday_month = $tmp_b[1];
    $birthday_day = $tmp_b[2];
    }
    if ($user['gender'] == '') {

    } else if ($user['gender'] == 0) {
        $femalechecked = 'checked';
    } else {
        $malechecked = 'checked';
    }

    $this->view->assign('birthday_year',$birthday_year);
    $this->view->assign('birthday_month',$birthday_month);
    $this->view->assign('birthday_day',$birthday_day);
    $this->view->assign('femalechecked',$femalechecked);
    $this->view->assign('malechecked',$malechecked);
    $this->view->assign('current_page',$current_page);
    $this->view->display('m_self.html');
  }

  function mpass(){
    $current_page = "mpass";
    $this->view->assign('current_page',$current_page);
    $this->view->display('m_pass.html');
  }

  function mphone(){
    $current_page = "mphone";
    $user = $this->user;
    $sql = "select mobile from bu_user where userId = {$user['userId']}";
    $mobile = $this->db->GetOne($sql);
    //$mobile = '18255001881';
    $this->view->assign('mobile',$mobile);
    $this->view->assign('current_page',$current_page);
    $this->view->display('m_phone.html');
  }

  function mportrait(){
    $current_page = "mportrait";
    $this->view->assign('current_page',$current_page);
    $this->view->display('m_portrait.html');
  }

  function recharge(){
    $current_page = "recharge";
   
    $this->view->assign('monlist',$this->monlist());
    $this->view->assign('current_page',$current_page);
    $this->view->display('m_recharge.html');
  }

  function record(){
    $current_page = "record";

    $this->view->assign('current_page',$current_page);
    $this->view->assign('monlist',$this->monlist());
    $this->view->display('m_record.html');

  }

  function recive(){
    $current_page = "recive";
    $this->view->assign('current_page',$current_page);
    $this->view->assign('monlist',$this->monlist());
    $this->view->display('m_recive.html');
  }

  function notice(){
    $current_page = "notice";
    $this->view->assign('current_page',$current_page);
    $this->view->display('m_notice.html');
  }

  function treasure(){
    //
  }

  function __construct(){
    global $db;
    global $view;
    global $page_var;
    $this->db = $db;
    $this->view = $view;
    $this->page_var = $page_var;

    $this->view->left_delimiter = "<{";
    $this->view->right_delimiter = "}>";

    $current_page = "index";
    if (isset($_GET['ptype']) && $_GET['ptype'] == 'pay') {
        $current_page = "pay";
    }

    $user = checklogin();
    if (!$user) {
        include("include/footer.inc.php");
        header("location:index.php");
        exit();
    }

    $userinfo=search_save_user($user['userId']);
    set_login_info($userinfo);
    $user=$userinfo;
    $this->user = $user;

    $_GET = safe_output($_GET);
    $_POST = safe_output($_POST);
    // assign data
    foreach ($user as $key => $value) {
        $this->view->assign($key,$value);
    }
    //over
    $this->view->assign('cdn_domain',$page_var['cdn_domain']);
    $this->view->display('common.html');
    // include tpl_header.php
    $page_var['current_page']=$current_page;
    foreach($page_var as $key=>$val){
    $this->view->assign($key,$val);
    }
    $this->view->assign("user",$user);
    $this->view->display('header_desert.html');
    //over
    //footer
    $site_skin = isset($page_var['site_skin'])?$page_var['site_skin']:'desert';
    $footer = 'footer-'.$site_skin.".html";
    $this->view->assign('site_skin',$site_skin);
    $this->view->assign('footer',$footer);
  }

  function __destruct(){
    $this->db->close();
  }

  function monlist(){
    $monlist="";
    $time = time();
    $month = date('m',$time);
    for($m=1;$m<13;$m++){
        if($m==$month){
            $monlist.="<option selected = 'selected'>".$m."</option>";
        }else{
            $monlist.="<option>".$m."</option>";
        }
    }
    return $monlist;
  }
}
?>

