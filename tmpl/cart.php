<title> Корзина </title>
<div id="page">
<div class="tr"> Корзина </div>
<table id="table">
<?if(isset($_SESSION['cl'])){?>
<tr>
<td><img src="<?=$g[0]['image'];?>" alt=""/></td>
<td><?=$g[0]['description'];?></td>
<td><form method="POST"><input type="text" name="count" size="1" placeholder="<?=$count;?>"><input type="submit" name="sub" value=""></form></td>
<td>$<?=$g[0]['price'];?></td>
<td ><a href="?delete=<?=$g[0]['id'];?>"><input class="delete_button" type="submit" name="delete" value=""></a></td>
<?}?>
<?php
$count = 1;
if(isset($_POST['sub'])){
	$count = $_POST['count'];
	$_SESSION['count'] = $count;
	$count = $_SESSION['count'];
}
?>
</tr>
<?if(isset($_SESSION['cl1'])){?>
<?print $_SESSION['cl1'];?>
<?print_r($g);?>
<tr>
<td><img src="<?=$g[0]['image'];?>" alt=""/></td>
<td><?=$g[0]['description'];?></td>
<td><form method="POST"><input type="text" name="count" size="1" placeholder="<?=$count;?>"><input type="submit" name="sub" value=""></form></td>
<td>$<?=$g[0]['price'];?></td>
<td><form method="POST"><input class="delete_button" type="submit" name="delete" value=""></form></td>
<?if(isset($_POST['delete'])){?>
<?unset($_SESSION['cl1']);?>
<?}?>
</tr>
<?}?>
<tr>
<td><img src="images/clock3.png" alt="123"/></td>
<td>Lorem conseter eirmod tempor invidunt ut labore Dolor Lorem conseter eirmod tempor</td>

<td>$1,784</td>
<td><input class="delete_button" type="submit" name="delete" value=""></td>
</tr>
</table>
<div class="tr"><input class="form" type="text" name="text"><input id="send" type="button" name="enter" value="Отримати знижку"></div>
<div ><p id="All">Всього:$<?=$g[0]['price'] * $count;?><br><a href="index.php?sail"><input id="btn" type="button" name="sail" value="Оформити заказ"></a></div>
<?$price = $g[0]['price'] * $count?>
<?$_SESSION['pri'] = $price;?>
<?$_SESSION['name'] = $g[0]['title'];?>


</div>