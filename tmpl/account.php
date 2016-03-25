<title>Авторизація</title>
<div align="center" class="form">
<?if(!isset($_POST['push'])){?>
<h1>Авторизація</h1>
<form action="" method="POST">
<input type="text" name="Login" required placeholder ="Login">
<br />
<input type="text" name="Password" required placeholder ="Password">
<br />
<a href="/index.php?account&Login=<?=$text['Login'];?>"><input type="submit" name="push" value ="send"></a>
</form>
<a href="/index.php?registration"><input type="submit" name="turn" value="registration"></a>
<?}?>
</div>