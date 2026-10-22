<?php
if(!defined('InEmpireBak'))
{
	exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>帝国备份王后台登录</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
if(self!=top)
{
	parent.location.href='index.php';
}
</script>
<script>
function ebakshowkey(){
	document.getElementById("eshowkeyarea").innerHTML='<img src="ShowKey.php?'+Math.random()+'" name="KeyImg" id="KeyImg" align="bottom" onclick="ebakshowkey();" title="看不清楚,点击刷新">';
}
</script>
</head>

<body onLoad="document.form1.lusername.focus();">
<br>
<table width="100%" border="0" cellspacing="8" cellpadding="3">
  <tr>
      <td><div align="center"><a href="http://www.phome.net" target="_blank"><img src="images/logo.jpg" alt="Empire Soft" width="180" height="65" border="0"></a></div></td>
    </tr>
    <tr>
      <td><div align="center"><strong><font size="5">欢迎使用开源、免费的&nbsp;EmpireBak</font></strong></div></td>
    </tr>
    <tr>
      
    <td> 
      <table width="430" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td> 
            <div style="padding:6px" align="center" width="300" height="80"><fieldset>
              <legend><font size="4">Language</font></legend>
              <table cellpadding=0 cellspacing=0 border=0><tr><td height="30"><select name="select" onChange="parent.location.href='ebakdoaction.php?phome=ChangeLanguage&from=<?=urlencode('index.php'.$aloginurlcs3)?>&l='+this.value;" style="width=300">
                      <?=Ebak_ReturnLang()?>
                    </select></td></tr></table></fieldset></div>
		  </td>
        </tr>
      </table> 
	 </td>
    </tr>
    <tr>
      <td><table width="420" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <form name="form1" method="post" action="<?php echo $ebakdologinfile.$aloginurlcs;?>">
          <input type="hidden" name="phome" value="login">
          <tr class="header"> 
            <td height="27" colspan="2"><div align="center">管理员登录</div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td width="32%" height="27">用户名：</td>
            <td width="68%" height="27"><input name="lusername" type="text" id="lusername" size="30"></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td height="27">密码：</td>
            <td height="27"><input name="lpassword" type="password" id="lpassword" size="30"></td>
          </tr>
		  <?php
		  if($set_loginauth)
		  {
			?>
          <tr bgcolor="#FFFFFF"> 
            <td height="27">认证码：</td>
            <td height="27"><input name="loginauth" type="password" size="30"></td>
          </tr>
			<?php
		  }
		  ?>
          <?php
		if(!$set_loginkey)
		{
		?>
          <tr bgcolor="#FFFFFF"> 
            <td height="27">验证码：</td>
            <td height="27"> <table width="100%" border="0" cellspacing="3" cellpadding="1">
                <tr> 
                  <td width="52"> <input name="key" type="text" id="key" size="6"> 
                  </td>
                  <td id="eshowkeyarea"><a href="#EmpireBak" onClick="ebakshowkey();">点击显示验证码</a></td>
                </tr>
              </table></td>
          </tr>
          <?php
		}
		?>
          <tr bgcolor="#FFFFFF"> 
            <td height="27">&nbsp;</td>
            <td height="27"><input type="submit" name="Submit" value=" 登 录 ">&nbsp; &nbsp; <input type="reset" name="Submit2" value="重置"></td>
          </tr>
        </form>
      </table>
	    <table width="420" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
          <tr>
            <td height="27" bgcolor="#DBEAF5"><div align="center">(<a href="doc.html" target="_blank">查看帝国备份王说明文档</a>)</div></td>
          </tr>
        </table>
	    <table width="100%" border="0" cellspacing="1" cellpadding="3">
          <tr>
            <td height="75" valign="bottom"><div align="center"><a href="http://www.phome.net" title="超高安全、超高稳定的开源CMS" target="_blank"><img src="images/bannercms.gif" width="420" height="49" border=1></a></div></td>
          </tr>
        </table>
        <table width="420" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr>
            <td height="38"><div align="center">Powered by <a href="http://www.phome.net" target="_blank"><strong>EmpireBak</strong></a> <font color="#FF9900"><strong>6.0</strong></font> &copy; 2002-2027 <a href="http://www.phome.net" target="_blank">EmpireSoft</a> Inc.</div></td>
          </tr>
        </table></td>
    </tr>
  </table>
  </body>
</html>