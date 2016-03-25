<html>
<body>
<?if(isset($text)){?>
<form method="GET">
<?foreach($text as $item){?>
<input type="checkbox" name="<?=$item['id'];?>"><?=$item['nickname'];?>:<?=$item['text'];?>
<br/>
<?}}?>
<input type="submit" name="dellete_comment" value="Видалити">
</form>
</body>
</html>