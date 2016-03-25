<?if(isset($_SESSION['login']) && isset($_GET['id'])){?>
<form method="GET">
<?$log = $_SESSION['login'];?>
	<div id="comment"><?echo $log;?>
	<br/>
	
	<textarea  name = "comment"></textarea>
	<br/>
	<input type="submit" name="sbm">
	</div>
<?}?>
</form>
<br />
<?if(isset($text)){?>
<?foreach($text as $item){?>
Користувач:<?=$item['nickname'];?>
<hr />
Коментарій:<?=$item['text'];?>
<hr />
<?}}?>