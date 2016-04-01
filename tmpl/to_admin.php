<title> Вхід в адмін панель </title>
<?php //if(!isset($_SESSION['hash']) && $_GET['Admin_login'] != NULL){?>
<?if(!isset($_GET['adm']) && !isset($_POST['Admin_login']) && !isset($_POST['mark']) && !isset($_SESSION['adm'])){?>
<form method="POST">
<input type="text" name="Admin_login">
<input type="text" name="Admin_Pass">
<input type="submit" name="Login">
</form>
<?}?>