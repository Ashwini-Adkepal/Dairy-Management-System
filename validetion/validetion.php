<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php include('val.php'); ?>
<form action="" method="post" enctype="multipart/form-data" name="formID" id="formID">
  <table width="200" border="1">
    <tr>
      <td colspan="2">Form Validtion </td>
    </tr>
    <tr>
      <td>name </td>
      <td><label>
        <input type="text" name="textfield" class="validate[required,custom[onlyLetter]]" />
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label>
        <textarea name="textarea" class="validate[required]"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><label>
        <input name="gender" type="radio" value="radiobutton" class="validate[required]" />
        male
      </label>
        <label>
        <input name="gender" type="radio" value="radiobutton" class="validate[required]" />
      female</label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input type="email" name="textfield2" class="validate[required,custom[email]]" />
      </label></td>
    </tr>
    <tr>
      <td>Mobile Number </td>
      <td><label>
        <input type="text" name="textfield3"    class="validate[required,custom[mobile]]" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input type="text" name="textfield4" class="validate[required,custom[passw]]" />
      </label></td>
    </tr>
   
    <tr>
      <td>Pin Code </td>
      <td><label>
        <input type="text" name="textfield6" class="validate[required,custom[pinCode]]" />
      </label></td>
    </tr>
    <tr>
      <td>date</td>
      <td><label>
        <input type="text" name="textfield7" class="validate[required,custom[date]]" />
      </label></td>
    </tr>
    <tr>
      <td>time</td>
      <td><label>
        <input type="text" name="textfield8" class="validate[required,custom[date]]" />
      </label></td>
    </tr>
    <tr>
      <td>Only Number </td>
      <td><label>
        <input type="text" name="textfield9" class="validate[required,custom[onlyNumber]]" />
      </label></td>
    </tr>
    <tr>
      <td>Gst </td>
      <td><label>
        <input type="text" name="textfield10" class="validate[required,custom[gst]]" />
      </label></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input type="file" name="file" class="validate[required]" /></td>
    </tr>
    <tr>
      <td>Bick Number </td>
      <td><label>
        <input type="text" name="textfield11" pattern="^[A-Z]{2}\s[0-9]{2}\s[A-Z]{2}\s[0-9]{4}$" />
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
