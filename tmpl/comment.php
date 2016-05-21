<?if(isset($_SESSION['login']) && isset($_GET['id'])){?>
<form method="POST">
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
<?print_r($text);?>
<?foreach($text as $item){?>

Користувач:<?=$item['nickname'];?> 
<h6><?=$item['data'];?></h6>
<hr />
Коментарій:<?=$item['text'];?>
<hr />
<?}}?>