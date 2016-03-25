<title>Реєстрація</title>
<div align="center" class="form">
<h1>Реєстрація</h1>
<form action="" method="POST">
<input type="file" name="pict">
<br />
<input type="text" name = "name" required placeholder="|Name">
<br />
<input type="text" name="login" required placeholder="|Login">
<br />
<input type="password" name="password" required placeholder="|Password">
<br />
<input type="text" name="visit_cart" required placeholder="|Visit Cart">
<br />
<input type="submit" name="Touch" value="Register">
</form>
</div>
<?$gh = 'admin12345';?>
<?echo md5($gh);?>

