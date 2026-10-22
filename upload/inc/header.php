<?php
error_reporting(0);
require(substr(dirname(__FILE__),0,-3).'class/connect.php');
if(!defined('InEmpireBak'))
{
	exit();
}
@require('config.php');
if(defined('InEmpireBAKErrorPath'))
{
	exit();
}
require(EBAK_PATH.'class/functions.php');
require EBAK_PATH.LoadLang('f.php');
$editor=2;
$lur=islogin();
$loginin=$lur['username'];
$rnd=$lur['rnd'];
$link=db_connect();
$empire=new mysqlquery();
$mydbname=RepPostVar($_GET['mydbname']);
$mypath=ehtmlspecialchars($_GET['mypath']);
if(empty($mydbname)||empty($mypath))
{
	printerror("ErrorUrl","history.go(-1)");
}
Ebak_DoCkStrType(4,$mydbname,1);
eCheckStrType(5,$mypath,1);
//БрТы
DoSetDbChar($b_dbchar);
$usql=$empire->query("use `$mydbname`");
?>