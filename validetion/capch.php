<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body onload="createCaptcha()">
  <form id="form1" onsubmit="validateCaptcha()" action="../../login/login.php">
    <div id="captcha">
    </div>
    <input type="text" placeholder="Captcha" id="cpatchaTextBox"/>
    <button type="submit" onclick="submitform();">Submit</button>
  </form>
</body>
<script src="js.capch.js"  type="text/javascript" ></script>
</html>
