<?php 
	exit('fail');
}
$ip=$_GET['ip'];
$opt=$_GET['opt'];
exec("/usr/local/sbin/ipdrop $ip $opt");
?>