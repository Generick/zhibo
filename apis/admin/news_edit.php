<?php 
include('head.php');
//$db->debug = true;
$id=(int)$_REQUEST['id'];
if($_REQUEST['active']=='save'){
	if(empty($_REQUEST[title])){
		$info = "标题不能为空";
	}else if(empty($_REQUEST[content])){
		$info = "新闻内容不能为空";
	}else{
		if($id){
			$db->Execute("update news set title='$_REQUEST[title]',`content`='$_REQUEST[content]' where id='$id'");
			operational_log(4,"修改新闻id{$id}",$_REQUEST);
		}else{
			$db->Execute("INSERT INTO `news`(title,`content`,strdate) VALUES ('$_REQUEST[title]', '$_REQUEST[content]', '".date("Y-m-d H:i:s")."');");
			operational_log(3,("添加新闻id".$db->Insert_ID()),$_REQUEST);
		}
		header('Location: news.php');
	}
}
if(!empty($id)){
	$row = $db->GetRow("select * from news where id=$id");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="/js/jquery.1.7.1.min.js" type="text/javascript"></script>
<script>
$(function(){
	$.getScript('../javascript/kindeditor/kindeditor-min.js', function() {
		KindEditor.basePath = '../javascript/kindeditor/';
		editor = KindEditor.create('#content', {
		    allowPreviewEmoticons : false,
		    uploadJson : 'red5_api.php?action=uploadfile',
		    items : [
			'source','fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
			'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
			'insertunorderedlist', '|', 'emoticons', 'link', 'table', 'image']
		});
	});
});
</script>
</head>
<body>

<table width="99%" align=center cellspacing=1 cellpadding=3 border=0>
	<tr class=head>
		<td width='30%' align=center>
			
			PlatForm Administrator</td>
	</tr>
</table>
<br />
<form action="?active=save" method="post">
<table width=99% align=center cellspacing=1 cellpadding=3 class=i_table>
	
	<tr class="b">
	<td>
	     <b>新闻标题&nbsp;&nbsp;</b>
		 <input type="hidden" name="id" id="id" value="<?php echo $row["id"]?>"/>
		 <input type="text" name="title" id="title" value="<?php echo $row["title"]?>"/><em style="color: red;">标题长度小于250个字符</em>
	</td>
	</tr>
	<tr class="b">
	<td>
	    <b>新闻内容</b><br/>
		<textarea id="content" name="content" style="height:400px;width:100%"><?php echo $row["content"]?></textarea>
	</td>
	</tr>
	<tr>
	<td>
	    <input type="submit" class="input_k" value="-保存-" onclick="return confirm('确定要添加记录吗?')" />
	    <input type="hidden" name="act" value="add" />
	</td>
	</tr>
</table>
</form>
<?php if(!empty($info)):?>
<script>
alert('<?php echo $info?>');
</script>
<?php endif;?>
</body>
</html>
<?php include('../../include/footer.inc.php');?>