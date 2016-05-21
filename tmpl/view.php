<title>Інформація про товар</title>
<?$connect = mysqli_connect('localhost','root','','my_database');?>
<html>
<head>
<title>Інформація про товар</title>
<meta name="description" content="Інтернет-магазин">
<meta name="keywords" content="Інтернет магазин годинників">
<link rel="stylesheet" href = "css/main.css" type = "text/css">
</head>
<body>
<div id = "wrapper1">
<div id="page">
<div class="tr"> Опис годинника </div>
<table >
<? if(isset($text)){?>
<tr><td><div align="center"><img src="<?=$text['image'];?>" alt="123"/></div></td></tr>
<tr>
<td>
<hr />Назва годинника:<?=$text['title'];?>
<hr />Короткий опис:<?=$text['short_description'];?>
<hr />Країна випуску:<?=$text['country'];?>
<hr />Рік випуску:<?=$text['year'];?>
<hr />Дата:<?=$text['data'];?>
<hr />Ціна:$<?=$text['price'];?>
</td>
</tr>
<?}?>
</table>
<div ><a href="/index.php?clock=<?=$text['id'];?>"><input id="btn" type="button" name="sail" value="В корзину"></a></div>
</div>
<br/>
<?$_POST['id'] = $_GET['id'];?>
<?$id = $_POST['id'];?>
<?if(isset($_SESSION['login']) && isset($_GET['id'])){?>
<form method="POST">
<?$log = $_SESSION['login'];?>
	<div id="comment"><?echo $log;?>
	<br/>
	
	<textarea id="comments" name="comment" ></textarea>
	<br/>
	<input id="sbm" type="submit" name="sbm">
	</div>
<?}?>
</form>
<div id="information"></div>
<?//if(isset($_POST['sbm'])){?>
<?//$txt = $_POST['comment'];?>
<?//mysqli_query($connect,"Insert into comment values('','$id','$log','$txt')");?>
<?//}?>
<?$com = mysqli_query($connect,"SELECT * FROM comment");?>
<?//for($t = 0;$t<mysqli_num_rows($connect,$com);$t++){?>
<?$com1 = mysqli_fetch_all($com,MYSQLI_ASSOC);//}?>
<br/>
<?//for($t1 = 0;$t1<mysqli_num_rows($connect,$com);$t1++){?>
<?foreach($com1 as $item){?>
<?if($_GET['id'] == $item['category_id']){?>
Користувач:<?=$item['nickname'];?>
<div class="comment_date"><h6><?=$item['data'];?></h6></div>
<hr />
Коментарій:<?=$item['text'];?>
<hr />
<?}}?>
</body>
</html>
