<div id="sidebar">

<div id = "menu-header"><p class="menu-header">Знайти за брендом</div>
<ul>
<?php if(isset($text1)){?>
	<? foreach($text1 as $item){?>
	<li><a href="/index.php?mark=<?=$item['name'];?>"><?=$item['name'];?></a></li>
<hr />
	<?}?>
<?}?>
</ul>
<div id="Lowprice"><p class="Lowprice">New Year's price sale <br /><p class="procents">40% </div>
</div>