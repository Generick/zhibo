<?php
//如自己需要额外建立公共函数方法文件，请保持将common/function作为根目录；并将自己建的文件引入include.list.php

//echo '5654635163';

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

?>