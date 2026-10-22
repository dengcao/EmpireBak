<?php
if(!defined('InEmpireBak'))
{
	exit();
}
define('EmpireBakConfig',TRUE);

//Database
$phome_db_dbtype='';
$phome_db_ver='';
$phome_db_server='127.0.0.1';
$phome_db_port='';
$phome_db_username='root';
$phome_db_password='';
$phome_db_dbname='';
$baktbpre='';
$phome_db_char='';

//USER
$set_username='admin';
$set_password='14e1b600b1fd579f47433b88e8d85291';
$set_loginauth='';
$set_loginrnd='EmpireCMS-EmpireBak-EmpireDown';
$set_outtime='60';
$set_loginkey='1';
$ebak_set_keytime=60;
$ebak_set_ckuseragent='';
$ebak_set_loginurlcsvar='';
$ebak_set_loginurlcsval='';
$ebak_set_filerndtime=0;
$ebak_set_filerndctime=30;

//COOKIE
$phome_cookiedomain='';
$phome_cookiepath='/';
$phome_cookievarpre='ebak_';

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath='bdata';
$bakzippath='zip';
$baksetsavepath='setsave';
$filechmod='1';
$phpsafemod='';
$php_outtime='1000';
$limittype='';
$canlistdb='';
$ebak_set_moredbserver='';
$ebak_set_hidedbs='';
$ebak_set_escapetype='1';
$ebak_set_dbtbtype=2;

//EBMA
$ebak_ebma_open=1;
$ebak_ebma_path='phpmyadmin';
$ebak_ebma_cklogin=0;

//SYS
$ebak_set_ckrndvar='empirebakrnds';
$ebak_set_ckrndval='e-m-p-i-r-ebak';
$ebak_set_ckrndvaltwo='e-m-p-i-r-ebak2';
$ebak_set_ckrndvalthree='e-m-p-i-r-ebak3';
$ebak_set_ckrndvalfour='e-m-p-i-r-ebak4';
$ebak_set_ckrndvalfive='e-m-p-i-r-ebak5';
$ebak_set_ckrndvalsix='e-m-p-i-r-ebak6';
$ebak_set_hclosemods=',DoExecSql,DoTranExecSql,RepPathFiletext,';
$ebak_set_webdebug=0;
$ebak_set_ckstrtype=0;
$ebak_set_timezone='';

//------------ SYSTEM ------------
HeaderIeChar();
?>