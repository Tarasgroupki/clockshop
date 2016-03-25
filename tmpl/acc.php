<title> Мій аккаунт </title>
<div id="page">
<div class="tr"> Мій аккаунт </div>
<div id="account">
<? if(isset($text)){?>
<div id="my_photo"><img src="<?=$text['image'];?>" alt="123" /></div>
<div id="description_account">

<p class="p1">Логін:<?=$text['Login'];?>
<p class="p1">Ім'я:<?=$text['name'];?>
<p class="p1">Візитна картка:<?=$text['visit_cart'];?>
<p class="p1">Кількість куплених товарів:<?=$text['sales'];?>
<p class="p1">На сумму:<?=$text['price'];?>грн
<p class="p1">Коефіцієнт знижки:10%
</div>
</div>
<div ><input id="btn" type="button" name="exit" value="Вихід"></div>
</div>
<?}?>