<title> Корзина </title>
<div id="page">

<div class="tr"> Корзина </div>

<table id="table">
<?//if(isset($_SESSION['cl'])){?>
<?for($i = 0;$i<count($g);$i++){?>
<tr>
<td><img src="<?=$g[$i][0]['image'];?>" alt=""/></td>
<?$titles[] = $g[$i][0]['title'];?>
<?$title_str = implode($titles,",");?>
<td><?=$g[$i][0]['title'];?></td>
<td><?=$g[$i][0]['description'];?></td>
<?$j = $g[$i][0]['id'] - 1;?>
<?=$j;?>
<td><form method="POST"><input type="text" name="count<?=$g[$i][0]['id'];?>" size="1" placeholder="<?=$_SESSION['counter'.$j];?>"><input type="submit" name="sub<?=$g[$i][0]['id'];?>" value=""></form></td>
<td>$<?=$g[$i][0]['price'];?></td>
<?if(isset($_POST['sub'.$g[$i][0]['id']])){?>
<?$_SESSION['sub'.$g[$i][0]['id']] = $_POST['sub'.$g[$i][0]['id']];
$g[$i][0]['price'] = $g[$i][0]['price'] * $_POST['count'.$g[$i][0]['id']];
$_SESSION['price'.$g[$i][0]['id']] = $g[$i][0]['price'];
?>
<?}
if($_SESSION['price'.$g[$i][0]['id']] != NULL){
$g[$i][0]['price'] = $_SESSION['price'.$g[$i][0]['id']];}?>
<td><a href="?cart&delete=<?=$g[$i][0]['id'];?>"><input class="delete_button" type="submit" name="delete" value=""></a></td>

<?php
$count = 1;
if(isset($_POST['sub'.$i])){
	$count[$i] = $_POST['count'.$i];
	$_SESSION['count'.$i] = $count[$i];
	$count[$i] = $_SESSION['count'.$i];
}
print_r($count);
$price += $g[$i][0]['price'];
?><?}?>
</tr>


<tr>
<td><img src="images/clock3.png" alt="123"/></td>
<td>Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor</td>

<td>$1,784</td>
<td><input class="delete_button" type="submit" name="delete" value=""></td>
</tr>
</table>
<?=$count;?>
<div class="tr"><input class="form" type="text" name="text"><input id="send" type="button" name="enter" value="Отримати знижку"></div>
<div ><p id="All">Всього:$<?=$price * $count;?><br><a href="index.php?sail"><input id="btn" type="button" name="sail" value="Оформити заказ"></a></div>
<?$_SESSION['price_short_cart'] = $price * $count;?>
<?=$g[0]['price'];?>
<?$price = $g[0]['price'] * $count?>
<?$_SESSION['pri'] = $price;?>
<?$_SESSION['name'] = $title_str;?>

</div>