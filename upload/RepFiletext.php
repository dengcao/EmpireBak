<?php
require('class/connect.php');
require('class/functions.php');
$lur=islogin();
$loginin=$lur['username'];
$rnd=$lur['rnd'];
$mypath=ehtmlspecialchars($_GET['mypath']);
eCheckStrType(5,$mypath,1);
require LoadAdminTemp('eRepFiletext.php');
?>