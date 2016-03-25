<?php
if(isset($text)){
?>

<table>
<tr>
<th>id</th>
<th>ПІБ замовника</th>
<th>E-mail</th>
<th>адреса</th>
<th>замовлені речі</th>
<th>На суму</th>
</tr>
<?foreach($text as $item):?>
<tr>
<th><?=$item['id'];?></th>
<th><a href="?order_id=<?=$item['id'];?>"><?=$item['name'];?></a></th>
<th><?=$item['E-mail'];?></th>
<th><?=$item['address'];?></th>
<th><?=$item['things'];?></th>
<th><?=$item['price_of_order'];?></th>
<form action="" method="POST">
<th><input type="checkbox" name="<?=$item['id'];?>"></th>
</tr>
<?endforeach;?>
</table>
<br />
<input type="submit" name="delete_orders" value="Видалити замовлення">
</form>
<?}?>