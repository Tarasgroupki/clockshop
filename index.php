<?php
$dir = "Mysqli";
session_start();
header('Content-type: text/html; charset=utf-8');
include 'config.php';
include 'classes/Page.php';
include 'classes/'.$dir.'/Database.php';
include 'classes/Cart.php';
try{
$page = new Page();
$cart = new Cart();	
    echo $page->get_body(NULL,'head');
    $text = $page->get_header_menu();
	echo $page->get_body($text,'main');
	$text1 = $page->get_sidebar_menu();
	echo $page->get_menu($text1,'sidebar');
if(isset($_GET['id'])){
	$id = (int)$_GET['id'];
	if($id != 0){
		$text = $page->get_one($id);
		echo $page->get_body($text,'view');
		/*$text = $page->select_com($id);
		echo $page->get_body($text,'comment');
		if(isset($_GET['sbm'])){
			$log = $_SESSION['login'];
			$page->insert_com($txt,$id,$log);
		}*/
	}
	else{
		exit('Wrong parameter!!!');
	}
	//$text = $page->get_one($id);
}

if(isset($_GET['mark'])){

	$mark = $_GET['mark'];
	$text = $page->get_product($mark);
	echo $page->get_body($text,'things');
	
}
elseif((!isset($_GET['id'])) && (!isset($_GET['mark'])) && (!isset($_GET['account'])) && (!isset($_GET['registration'])) && (!isset($_GET['cart'])) && (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['account1'])) && (!isset($_GET['Login'])) && !isset($_GET['sail'])){
	$text = $page->get_all();
	$text = $page->get_clock();
	echo $page->get_body($text,'things');
}

if(isset($_GET['Login']) && !isset($_SESSION['login'])){
	//$text = $page->get_user();
	
	
	echo $page->get_body(NULL,'account');
}
if(isset($_POST['Login'])){
	if(!empty($_POST['Login']) && !empty($_POST['Password'])){
	$_SESSION['login'] = $_POST['Login'];
	$_SESSION['Password'] = md5($_POST['Password']);
	}
	echo $text[0]['Login'];
	
	//print_r($text);
}
if(isset($_GET['Login']) && isset($_SESSION['login'])){
	print $_SESSION['login'];
	$login = $_SESSION['login'];
	$password = $_SESSION['Password'];
	print $password;
	$text = $page->get_user($login,$password);
	echo $page->get_body($text,'logined_acc');
}

if(isset($_GET['Exit'])){
	unset($_SESSION['login']);
	unset($_SESSION['password']);
}
/*if(isset($_GET['push'])){
	$text = $page->get_user();
	echo $page->get_body($text,'account1');
}*/
if(isset($_GET['registration'])){
	
	echo $page->get_body($text,'registration');
}
if(isset($_POST['Touch'])){
		$picture=$_POST['pict'];
		$name = $_POST['name'];
		$login = $_POST['login'];
		$password = md5($_POST['password']);
		$visit_cart = $_POST['visit_cart'];
		$page->ins_data($login,$password,$name,$visit_cart,$picture);
	}
if(isset($_GET['clock'])&&!isset($_SESSION['cl'])&& !isset($_SESSION['cl1']) ){
	
	$_SESSION['cl'] = $_GET['clock'];
	$reg[0] = $_SESSION['cl'];}
	/*if(isset($_SESSION['cl']) && !isset($_SESSION['cl1'])){
		$_SESSION['cl1'] = $_SESSION['cl'];
		$reg[1] = $_SESSION['cl1'];
		print $reg[0];
		print $reg[1];
		unset($_SESSION['cl']);
		
	}*/
/*if(isset($_GET['clock']) && !isset($_SESSION['cl1'])&&(isset($_SESSION['cl']))){

    $_SESSION['cl1'] = $_GET['clock'];
	$reg1 = $_SESSION['cl1'];
	echo $_GET['clock'];
	
}*/
if(isset($_GET['delete'])){
	unset($_SESSION['cart']);
	unset($_SESSION['cl']);
	
}
if(isset($_GET['cart'])){
	//$login = $_GET['Login'];
	$g = $cart->item($reg);
	$_SESSION['cart'] = $g[0]['price'];
	echo $cart->get_cart($g,'cart');
	
	//echo $_SESSION['cart'];
	//$g1 = $cart->item1($reg1);
	//echo $cart->get_cart($g1,'cart');
}
$cart = $_SESSION['cart'];
if(isset($_GET['new_products'])){
	$text1 = $page->get_date();
	echo $page->get_body($text1,'things');
}
if(isset($_GET['sail'])){
	echo $page->get_body(NULL,'insert_order');
}
if(isset($_GET['inser'])){
	$nm = $_GET['nm'];
	$e_mail = $_GET['e-mail'];
	$address = $_GET['address'];
	$price = $_SESSION['pri'];
	$name = $_SESSION['name'];
	$count = $_SESSION['count'];
	//echo $count;
	$page->ins_order($nm,$e_mail,$address,$price,$name,$count);
	//$page->get_body();
}
if(isset($_GET['search'])){
	$srch = $_GET['search1'];
	$text = $page->get_search($srch);
	echo $page->get_body($text,'things');
}
ob_end_clean();
echo $page->get_body(NULL,'footer');
if(!is_object($page) && !is_object($cart)){
	throw new Exception();
}
}
catch(Exception $e){
	exit('There is modified object!');
}
?>