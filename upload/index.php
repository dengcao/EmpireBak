<?php
require('class/connect.php');
require('class/functions.php');

//urlcs
$ckidcsvar=$ebak_set_loginurlcsvar?$ebak_set_loginurlcsvar:'id';
$ckid=CkPostStrIsArray($_GET[$ckidcsvar]);
$ckid=ehtmlspecialchars($ckid,ENT_QUOTES);
$aloginurlcs='';
$aloginurlcs2='';
$aloginurlcs3='';
$aloginurlcs4='';
if($ckid&&$ckid!='array')
{
	$aloginurlcs='?'.$ckidcsvar.'='.urlencode($ckid);
	$aloginurlcs2='&'.$ckidcsvar.'='.urlencode($ckid);
	$aloginurlcs3='?'.$ckidcsvar.'='.$ckid;
	$aloginurlcs4='&'.$ckidcsvar.'='.$ckid;
}

//loginfilename
$ebakdologinfile='ebakdologin.php';

require LoadAdminTemp('eindex.php');
?>