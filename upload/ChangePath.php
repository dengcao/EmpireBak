<?php
require('class/connect.php');
require('class/functions.php');
$lur=islogin();
$loginin=$lur['username'];
$rnd=$lur['rnd'];
$hand=@opendir($bakpath);
$form='ebakredata';
if($_GET['toform'])
{
	$form=RepPostVar($_GET['toform']);
}
eCheckStrType(5,$form,1);
require LoadAdminTemp('eChangePath.php');
?>