<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="./css/style2.css" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- Login form -->
<div class="w-form form-wrapper squeezed">
<form id="form1" name="form1" method="post" action="index.php">

  <div>
 	<input type="text" class="w-input form-field" name="login" placeholder="Login" id="ilogin" />
  </div>
  <div>
  	<input type="password" class="w-input form-field" name="password" placeholder="Password"  id="ipassword">
  </div>
  <div>
   	<input type="email" class="w-input form-field" name="mail" placeholder="Email" id="mail" id="imail" >
  </div>
  <div>
	<input type="submit" class="w-button button full-width" name="Login" id="Login" value="Log in" formaction="index.php" />
   </div>
    <div>
        <input type="submit" class="w-button button full-width" formaction="register.php" name="Register" value="Register Now!" />
    </div>
</form>
</div>

</body>
</html>
