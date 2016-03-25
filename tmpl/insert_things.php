<div class="admin">
<?php if(isset($text1)){?>
<?if(!isset($_POST['insert2']) && !isset($_POST['update1']) && !isset($_POST['delete1'])){?>
<form method="POST">
<input type="submit" name="insert2" value="Занести">
</form>
<form method="POST">
<input type="submit" name="update1" value="Змінити">
</form>
<form method="POST">
<input type="submit" name="delete1" value="Видалити">
</form>
<?}?>
<div>
<?if(isset($_POST['insert2'])){?>
<form method="GET">
<input type="file" name="img">
<br />
Назва:<input type="text" name="title">
<br />
Марка:<input type="text" name="mark">
<br />
Країна:<input type="text" name="country">
<br />
Короткий опис:<textarea name="description"></textarea>
<br />
Повний опис:<textarea name="short_description"></textarea>
<br />
Ціна:<input type="text" name="price">
<br />
Рік випуску:<input type="text" name="year">
<br />
<a href="admin.php?ins"><input type="submit" name="ins" value = "Занести">
</form>


</div>
<?}?>
<?if(isset($_POST['delete1'])){?>
<form method="GET">
<?foreach($text1 as $item){?>
<input type="checkbox" name="<?=$item['id'];?>"><?=$item['title'];?>
<br />
<?}?>
<input type="submit" name="dellete1" value="Видалити">
</form></div>
<?}?>

<?}?>