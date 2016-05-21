<html>
<body>
<div id="container">
 <div id="header">
   <div id="text">Магазин Годинників
   <div class="panel">
	<?if(isset($text[1])):?>
	<table><th>Зображення:</th><th>Назва товару:</th><th>Ціна:</th><th>Кількість:</th><th>Кількість:</th>
	<?for($i = 0;$i<count($text[1]);$i++){?>
	<?//$text[1][$i+1][0] = $text[1][]?>
	<tr><td><img src="<?=$text[1][$i][0]['image'];?>"/></td><td><h6><div id="name-data"></div><?=$_POST['number'];?><?=$text[1][$i][0]['title'];?></h6></td><td><h6><?=$text[1][$i][0]['price'];?></h6></td><td><?$j = $text[1][$i][0]['id'] - 1;?><?=$_SESSION['counter'.$j];?></td><td><form method="POST"><input type="text" name="count<?=$text[1][$i][0]['id'];?>" size="1" placeholder="<?=$_SESSION['counter'.$i];?>"><input type="submit" name="sub<?=$text[1][$i][0]['id'];?>" value=""></form></td><td><?if(!isset($_GET['nav_id'])):?><a href="?delete=<?=$_SESSION['clock'.$text[1][$i][0]['id']];?>">+</a><?endif;?>
	<?if(isset($_GET['nav_id'])):?><a href="?nav_id=<?=$_GET['nav_id'];?>&delete=<?=$_SESSION['clock'.$text[1][$i][0]['id']];?>">+</a><?endif;?></td></tr>
	<?if(isset($_POST['sub'.$text[1][$i][0]['id']])){?>
<?$_SESSION['sub'.$text[1][$i][0]['id']] = $_POST['sub'.$text[1][$i][0]['id']];
$text[1][$i][0]['price'] = $text[1][$i][0]['price'] * $_POST['count'.$text[1][$i][0]['id']];
$_SESSION['price'.$text[1][$i][0]['id']] = $text[1][$i][0]['price'];
?>

<?}
if($_SESSION['price'.$text[1][$i][0]['id']] != NULL){
$text[1][$i][0]['price'] = $_SESSION['price'.$text[1][$i][0]['id']];}?>
	
	<?php
$count = 1;
//echo count($text[1]);
//for($i = 0;$i<count($text[1]);$i++){
if(isset($_POST['sub'.$i])){
	$count[$i] = $_POST['count'.$i];
	$_SESSION['count'.$i] = $count[$i];
	$count[$i] = $_SESSION['count'.$i];
	//$j = $i - 1;
	$_SESSION['count'.$i] = $_SESSION['counter'.$i];
}//}
//print_r($count);
$price += $text[1][$i][0]['price'];
$_SESSION['price_short_cart'] = $price * $count;
//print_r($text[1]);
//echo $_SESSION['price_short_cart'];
?><??><?}?>
	<?endif;?>
	<?if(!isset($text[1])){?>
	<?
	echo "Ваша корзина порожня!!!";
	}?>
	</table>
	<a href="/index.php?cart"><input id="cart_btn" type="submit" name="send" value=""></a>
<input id="cart_order_btn" type="submit" name="send" value="">
</div>
   <?$cart = $_SESSION['price_short_cart'];?>
   <?if(!isset($text[1])){
	 $cart = 0;
   }?>
    <div id="text1">Картка покупця:<span><?=$cart;?></span>$</div>
	<div class="btn"><div id="text2"></div></div>
	
	
	<div id="text3">
	<p>Валюта:
<select name=type><option selected name = "dol" value="d">US dollar
<option name="grn" value="g">UKR gгривня
<option name="rub" value="r">RUS рубль</select>
</p>
	</div>
</div>  

   
 </div>
  <div id="head"></div>
 <div id="text4">
 Make a gift
 <br/><div align = "right">to</div>
</div>
<div id="text5">Remember
<br /><div class = "text5">CHOOSE ONE OF OUR LUXURY WATCHES</div></div>

<div id="menu-gorizontal">
<br />
<?php if(isset($text[0])){?>
<? foreach($text[0] as $item1) {?>
<a class="header" href = "<?=$item1['href'];?>"><?=$item1['name'];?></a>
<?}?>
<?}?>

</div>

</body>
</html>