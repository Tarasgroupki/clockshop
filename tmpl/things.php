<title>Головна</title>
<div id="sales">
<div id="things-menu"><p class="things-menu">Вироби</div>
<div id="leftclocks">
<?php if(isset($text[0])){?>
<?//=$text[1];?>
<?//=$text[2][1];?>
<?
echo $search;
//print_r($text);?>
<? foreach($text[0] as $key => $item){?>
<?if(($item['id'] % 2 == 0)||(($item['id'] % 2 != 0))){?>
<?
$start = QUANTITY_NEWS * ($_GET['nav_id'] - 1);
$end = QUANTITY_NEWS * $_GET['nav_id'];
?>
<?if(($key>=$start)&&($key < $end)&&($_GET['nav_id'])  || ($key>=0)&&($key < 3)&&!isset($_GET['nav_id'])){?>
<?//=$key;?>
<div class="clock1"><img src="<?=$item['image'];?>" alt="123"/></div><div class="description1"><p class="title"><b><?=$item['title'];?></b>

<p class="text"><?=$item['description'];?>

<p class="price1">$<?=$item['price'];?>

<br/>

<a href="/index.php?id=<?=$item['id'];?>"><input class="button1" type="submit" name="submit" value=""/></a>
<?if(!isset($_GET['nav_id'])):?>
<a href="/index.php?clock<?=$item['id'];?>=<?=$item['id'];?>"><input class="button2" type="submit" name="enter<?=$item['id'];?>" value=""/></a></div>
<?endif;?>
<?if(isset($_GET['nav_id'])):?>
<a href="/index.php?nav_id=<?=$_GET['nav_id'];?>&clock<?=$item['id'];?>=<?=$item['id'];?>"><input class="button2" type="submit" name="enter<?=$item['id'];?>" value=""/></a></div>
<?endif;?>
<?/*?><div id="information"></div><?*/?>
<?}}}}?>
<div id="rightclocks">
<?php if(isset($text[0])){?>
<? foreach($text[0] as $key => $item){?>
<?if(($item['ip'] % 2 != 0)&&(count($text[0]) % 2 == 0)){?>

<div class="clock1"><img src="<?=$item['image'];?>" alt="123"/></div><div class="description1"><p class="title"><b><?=$item['title'];?></b>

<p class="text"><?=$item['description'];?>

<p class="price1">$<?=$item['price'];?>

<br/>

<a href="/index.php?id=<?=$item['id'];?>"><input class="button1" type="submit" name="submit" value=""/></a>
<input id="<?=$item['id'];?>" class="button2" type="submit" name="enterr<?=$item['id'];?>" value=""/></div></div>
<?}}}?><div id="navigation">
<?if($text[1] == ""){
	echo "True";
}?>
<?//print_r($text);?>
<?if(($text[1] != "")){?>
<?if(!isset($_GET['new_products']) && !isset($_GET['mark']) && !isset($_GET['search'])&&($_GET['nav_id']>1)){?>
<a href="index.php?nav_id=<?=$_GET['nav_id']-1;?>">&lt;</a>
<?}?>
<?if(isset($_GET['new_products']) && !isset($_GET['mark']) && !isset($_GET['search'])&&($_GET['nav_id']>1)){
?>
<a href="index.php?new_products&nav_id=<?=$_GET['nav_id']-1;?>">&lt;</a>
<?}?>
<?if(isset($_GET['mark']) && !isset($_GET['new_products']) && ($_GET['nav_id']>1) || !isset($_GET['nav_id']) && !isset($_GET['new_products']) && isset($_GET['mark'])){
?>
<a href="index.php?mark=<?=$_GET['mark'];?>&nav_id=<?=$_GET['nav_id']-1;?>">&lt;</a>
<?}?>
<?if(isset($_GET['search1']) && !isset($_GET['new_products']) && ($_GET['nav_id']>1) || !isset($_GET['nav_id']) && !isset($_GET['new_products']) && isset($_GET['search1'])){?>
<a href="index.php?search1=<?=$_GET['search1'];?>&search&nav_id=<?=$_GET['nav_id']-1;?>">&lt;</a>
<?}?>
<?foreach($text[1] as $item1){?>

<?//foreach($text[0] as $item){?>
<?if(!isset($_GET['new_products']) && !isset($_GET['mark']) && !isset($_GET['search'])){?>
<a href="index.php?nav_id=<?=$item1;?>"><?=$item1;?></a>
<?}?>
<?if(isset($_GET['new_products']) && !isset($_GET['mark']) && !isset($_GET['search'])){
?>
<a href="index.php?new_products&nav_id=<?=$item1;?>"><?=$item1;?></a>
<?}?>
<?if(isset($_GET['mark']) && !isset($_GET['new_products']) || !isset($_GET['nav_id']) && !isset($_GET['new_products']) && isset($_GET['mark'])){
?>
<a href="index.php?mark=<?=$_GET['mark'];?>&nav_id=<?=$item1;?>"><?=$item1;?></a>
<?}?>
<?if(isset($_GET['search1']) && !isset($_GET['new_products']) || !isset($_GET['nav_id']) && !isset($_GET['new_products']) && isset($_GET['search1'])){?>
<a href="index.php?search1=<?=$_GET['search1'];?>&search&nav_id=<?=$item1;?>"><?=$item1;?></a>
<?}?>
<?}?>
<?if(!isset($_GET['new_products']) && !isset($_GET['mark']) && !isset($_GET['search']) && ($_GET['nav_id']<count($text[1]))){?>
<a href="index.php?nav_id=<?=$_GET['nav_id']+1;?>">&gt;</a>
<?}?>
<?if(isset($_GET['new_products']) && !isset($_GET['mark']) && !isset($_GET['search']) && ($_GET['nav_id']<count($text[1]))){
?>
<a href="index.php?new_products&nav_id=<?=$_GET['nav_id']+1;?>">&gt;</a>
<?}?>
<?if(isset($_GET['mark']) && !isset($_GET['new_products']) && ($_GET['nav_id']<count($text[1])) || !isset($_GET['nav_id']) && !isset($_GET['new_products']) && isset($_GET['mark']) ){
?>
<a href="index.php?mark=<?=$_GET['mark'];?>&nav_id=<?=$_GET['nav_id']+1;?>">&gt;</a>
<?}?>
<?if(isset($_GET['search1']) && !isset($_GET['new_products']) && ($_GET['nav_id']<count($text[1])) || !isset($_GET['nav_id']) && !isset($_GET['new_products']) && isset($_GET['search1'])){?>
<a href="index.php?search1=<?=$_GET['search1'];?>&search&nav_id=<?=$_GET['nav_id']+1;?>">&gt;</a>
<?}}?>
</div>
<p id="load" style="cursor:pointer">Download data</p>
<?for($i = 0;$i<14;$i++):?>
<?if(isset($_GET['clock'.$i])):?>

<script>
var ad = <?=$i;?>
</script>

<?endif;?>
<?endfor;?>
<?$vb = '<div id="information"></div>';?>
<?//echo $vb;?>
<?if(($_SESSION['qw'] == NULL) && ($vb != NULL)){?>
<?echo "True";?>
<?$_SESSION['qw'] = $vb;?>

<?}?>
<?=$_SESSION['qw'];?>

<div id="name-data"></div>
