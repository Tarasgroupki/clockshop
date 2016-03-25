<?$connect = mysql_connect('localhost','root','');?>
<?mysql_select_db('my_database');?>
<?php
if(isset($_POST['push']) || isset($_SESSION['login'])){?>
<?print $_SESSION['login'];?>
<?print $_GET['account'];?>
<?$login = $_POST['Login'];?>
<?$password = md5($_POST['Password']);?>
<?$text1 = mysql_query("SELECT * FROM users WHERE Login='$login'");?>
<?$text = mysql_fetch_array($text1);?>
<?if($password != $text['Password']){print "Wrong password";}?>
<?if($password == $text['Password']) {?>
<div id="page">
<div class="tr"> Мій аккаунт </div>
<div id="account">
<? if(isset($text)){?>
<div id="my_photo"><img src="<?=$text["image"];?>" alt="123" /></div>
<div id="description_account">

<p class="p1">Логін:<?=$text["Login"];?>
<p class="p1">Ім`я:<?=$text["name"];?>
<p class="p1">Візитна картка:<?=$text["visit_cart"];?>
<p class="p1">Кількість куплених товарів:<?=$text["sales"];?>
<p class="p1">На сумму:<?=$text["price"];?>грн
<p class="p1">Коефіцієнт знижки:10%
</div>
</div>
<div><a href="/index.php?account=<?=$text['Login'];?>"><input id="btn" type="button" name="exit" value="Вихід"></a></div>
</div>
<?}}?>
	
<?}
?>