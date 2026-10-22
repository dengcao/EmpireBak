<?php
require('class/connect.php');
require('class/functions.php');
$lur=islogin();
$loginin=$lur['username'];
$rnd=$lur['rnd'];
$hand=@opendir($baksetsavepath);
$mydbname=RepPostVar($_GET['mydbname']);
Ebak_DoCkStrType(4,$mydbname,1);
require LoadAdminTemp('eListSetbak.php');
?>