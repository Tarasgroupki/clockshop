<div class="admin">
<?php if(isset($text1)){?>
<?if(!isset($_POST['insert1']) && !isset($_POST['update']) && !isset($_POST['delete'])){?>
<form method="POST">
<input type="submit" name="insert1" value="Занести">
</form>
<form method="POST">
<input type="submit" name="update" value="Змінити">
</form>
<form method="POST">
<input type="submit" name="delete" value="Видалити">
</form>
<?}?>

<?if(isset($_POST['insert1'])){?>
<form method="GET">
<input type="text" name="category">
<input type="submit" name="insert" value="Занести">
</form>
<?}?>
<?if(isset($_POST['update'])){?>
<form method="GET">
<ul>
<? foreach($text1 as $item){?>
	<li><a href="/admin.php?ad=<?=$item['id'];?>"><p id="links"><?=$item['name'];?></p></a></li>
	<?}?>

</ul>
<?}?></form>
<?if(isset($_POST['delete'])){?>
<form method="GET">
<?foreach($text1 as $item){?>
<input type="checkbox" name="<?=$item['id'];?>"><?=$item['name'];?>
<br />
<?}?>
<input type="submit" name="dellete" value="Видалити">
</form>

<?}?>
<?}?></div>