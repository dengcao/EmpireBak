<?php
require('class/connect.php');
require('class/functions.php');
$lur=islogin();
$loginin=$lur['username'];
$rnd=$lur['rnd'];
$p=ehtmlspecialchars($_GET['p']);
$f=ehtmlspecialchars($_GET['f']);
eCheckStrType(5,$p,1);
eCheckStrType(5,$f,1);
$file=$bakzippath."/".$f;
require LoadAdminTemp('eDownZip.php');
?>