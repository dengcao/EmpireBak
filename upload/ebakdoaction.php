<?php
require('class/connect.php');
require('class/functions.php');
require LoadLang('f.php');
$phome=$_GET['phome'];
if(empty($phome))
{$phome=$_POST['phome'];}
//ตวยฝ
if($phome=="ChangeLanguage")
{}
else
{
	$lur=islogin();
	$loginin=$lur['username'];
	$rnd=$lur['rnd'];
}

if($phome=="ChangeLanguage")//ักิ๑ำ๏ัิ
{
	Ebak_ChangeLanguage($_GET);
}
else
{
	printerror("ErrorUrl","history.go(-1)");
}
?>