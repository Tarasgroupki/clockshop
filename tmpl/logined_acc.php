<title> Мій аккаунт </title>
<div id="space"></div>
<? if(($text[0]['Login'] == NULL) && $text[0]['Password'] == $_SESSION['password']){
	unset($_SESSION['login']);
	print "There is wrong login or password";
}
else{
	print "False";
}?>
<?php
if((isset($_GET['push']) && md5($_GET['Password']) == $text[0]['Password']) || isset($_SESSION['login']) && ($text[0]['Login'] != NULL) && ($text[0]['status'] != 'banned')){?>
<div id="page">
<div class="tr"> Мій аккаунт </div>
<div id="account">
<? if(isset($text)){?>
<div id="my_photo"><img src="<?=$text["image"];?>" alt="123" /></div>
<div id="description_account">

<p class="p1">Логін:<?=$text[0]["Login"];?>
<p class="p1">Ім`я:<?=$text[0]["name"];?>
<p class="p1">Візитна картка:<?=$text[0]["visit_cart"];?>
<p class="p1">Кількість куплених товарів:<?=$text[0]["sales"];?>
<p class="p1">На сумму:<?=$text[0]["price"];?>грн
<p class="p1">Коефіцієнт знижки:10%
</div>
</div>
<div><a href="/index.php?Exit"><input id="btn" type="button" name="exit" value="Вихід"></a></div>
</div>
<?}}
else{
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	echo "Your account is banned!";
}?>