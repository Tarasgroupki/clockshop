<title>Головна</title>
<div id="sales">

<div id="things-menu"><p class="things-menu">Вироби</div>
<div id="leftclocks">
<?php if(isset($text)){?>
<? foreach($text as $item){?>
<?if(($item['id'] % 2 == 0)||(($item['id'] % 2 != 0))){?>
<div class="clock1"><img src="<?=$item['image'];?>" alt="123"/></div><div class="description1"><p class="title"><b><?=$item['title'];?></b>

<p class="text"><?=$item['description'];?>

<p class="price1">$<?=$item['price'];?>

<br/>

<a href="/index.php?id=<?=$item['id'];?>"><input class="button1" type="submit" name="submit" value=""/></a>
<a href="/index.php?clock=<?=$item['id'];?>"><input class="button2" type="submit" name="enter<?=$item['id'];?>" value=""/></a></div>
<?}}}?>
<div id="rightclocks">
<?php if(isset($text)){?>
<? foreach($text as $item){?>
<?if(($item['ip'] % 2 != 0)&&(count($text) % 2 == 0)){?>
<div class="clock1"><img src="<?=$item['image'];?>" alt="123"/></div><div class="description1"><p class="title"><b><?=$item['title'];?></b>

<p class="text"><?=$item['description'];?>

<p class="price1">$<?=$item['price'];?>

<br/>

<a href="/index.php?id=<?=$item['id'];?>"><input class="button1" type="submit" name="submit" value=""/></a>
<input class="button2" type="submit" name="enterr<?=$item['id'];?>" value=""/></div></div>
<?}}}?>
