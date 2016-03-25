<html>
<body>
<div id="container">
 <div id="header">
   <div id="text">Магазин Годинників
   <?$cart = $_SESSION['cart'];?>
    <div id="text1">Картка покупця:<span><?=$cart;?></span>т</div>
	<a href="/index.php?cart"><div id="text2"></div></a>
	
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
<?php if(isset($text)){?>
<? foreach($text as $item1) {?>
<a class="header" href = "<?=$item1['href'];?>"><?=$item1['name'];?></a>
<?}?>
<?}?>


</div>


</body>
</html>