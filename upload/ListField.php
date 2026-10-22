<?php
require('class/connect.php');
require('class/functions.php');
$lur=islogin();
$loginin=$lur['username'];
$rnd=$lur['rnd'];
$link=db_connect();
$empire=new mysqlquery();
//Ъ§ОнПт
$mydbname=RepPostVar($_GET['mydbname']);
$mytbname=RepPostVar($_GET['mytbname']);
if(empty($mydbname)||empty($mytbname))
{
	printerror("ErrorUrl","history.go(-1)");
}
$form=RepPostVar($_GET['form']);
if(empty($form))
{
	$form='ebakchangetb';
}
Ebak_DoCkStrType(4,$mydbname,1);
Ebak_DoCkStrType(4,$mytbname,1);
eCheckStrType(5,$form,1);
$usql=$empire->query("use `$mydbname`");
$sql=$empire->query("SHOW FIELDS FROM `".$mytbname."`");
require LoadAdminTemp('eListField.php');
db_close();
$empire=null;
?>