<?php
$dir = "Mysqli";
session_start();
header('Content-type: text/html; charset=utf-8');
include 'config.php';
include 'classes/Page.php';
include 'classes/'.$dir.'/Database.php';
include 'classes/Cart.php';
//define('QUANTITY_NEWS',5);
try{
$page = new Page();
$cart = new Cart();	
    echo $page->get_body(NULL,'head');
	/*if(isset($_GET['clock']) && !isset($_SESSION['short_cart'])){
    $_SESSION['short_cart'] = $_GET['clock'];
   } */if(isset($_GET['delete'])){
		//echo "True";
	unset($_SESSION['cart']);
	unset($_SESSION['clock'.$_GET['delete']]);
	unset($_SESSION['price'.$_GET['delete']]);
	$b = $_GET['delete'] - 1;
	//$_SESSION['counter'.$b] = $_SESSION['counter'.$_GET['delete']];
	unset($_SESSION['counter'.$b]);
	//unset($_SESSION['short_cart']);

}		for($i=0;$i<14;$i++){
if(isset($_GET['clock'.$i])) {
	//&&!isset($_SESSION['cl'])&& !isset($_SESSION['cl1']

	if($_GET['clock'.$i] != $var['cl'.$i]){$var['cl'.$i] = $_GET['clock'.$i];}
	if($var['cl'.$i] != NULL ){$j = $i-1;$_SESSION['counter'.$j]++;$_SESSION['clock'.$i] = $var['cl'.$i];}
	}
	//$_SESSION['counter'.$i] = 0;
	
	//print_r($_SESSION);
	$_SESSION['short_cart'] = 'n';
if($_GET['clock'.$i] != $var1['cl'.$i]){$var1['cl'.$i] = $_GET['clock'.$i];}
	if($var1['cl'.$i] != NULL ){$i1.$i = $var1['cl'.$i];$st = 2;}
	$reg[0] = $_SESSION;
	//print_r($_SESSION);
	}//session_destroy();
   if(isset($_SESSION['short_cart'])){
   $text[0] = $page->get_header_menu();
   $reg[0] = $_SESSION;
   $text[1] = $cart->item($reg);}
	elseif(!isset($_GET['clock']) &&  !isset($_SESSION['short_cart'])){
		$text[0] =  $page->get_header_menu();
	}
	echo $page->get_body($text,'main');
	$text1 = $page->get_sidebar_menu();
	echo $page->get_menu($text1,'sidebar');
if(isset($_GET['id'])){
	$id = (int)$_GET['id'];
	if($id != 0){
		if(isset($_POST['sbm'])){
			$log = $_SESSION['login'];
			$txt = $_POST['comment'];
			$page->insert_com($txt,$id,$log);
		}
		$text = $page->get_one($id);
		echo $page->get_body($text,'view');
		
		//$text = $page->select_com($id);
		//echo $page->get_body($text,'comment');
		
	}
	else{
		exit('Wrong parameter!!!');
	}
	//$text = $page->get_one($id);
}

if(isset($_GET['mark'])){
	$mark = $_GET['mark'];
	$clocks = $page->get_product($mark);
	$count_clocks = count($clocks);
$nav = $page->navigation($count_clocks);
	$text = array($page->get_product($mark),$nav);
	echo $page->get_body($text,'things');
	
}
elseif((!isset($_GET['id'])) && (!isset($_GET['mark'])) && (!isset($_GET['account'])) && (!isset($_GET['registration'])) && (!isset($_GET['cart'])) && (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['search'])) && (!isset($_GET['new_products']))&& (!isset($_GET['account1'])) && (!isset($_GET['Login'])) && !isset($_GET['sail'])){
	//$text = $page->get_all();
	
	$clocks = $page->get_clock();
	$count_clocks = count($clocks);
	//$text1 = 
	//$count_clocks = count($text1);
	//$get_on_one_page = ceil($count_clocks / QUANTITY_NEWS);
	//echo $get_on_one_page;
	/*for($i = 1;$i<$get_on_one_page;$i++){
		$pages[] = $i;
	}*/
	//print_r($pages);
	$nav = $page->navigation($count_clocks);
	//$count_clocks = count($text[0][0]);
	
	$text = array($page->get_clock(),$nav);
	
	//echo count($text[0]);
	//print_r($text[0]);
	//array($text1,$get_on_one_page,$pages);
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
	//print_r($reg);
	//session_destroy();
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
//echo $_POST['name'];
if(isset($_GET['cart'])){
	echo $_SERVER['QUERY_STRING'];
	//$login = $_GET['Login'];
	//print_r($reg);
	$g = $cart->item($reg);
	//print_r($g);
	$_SESSION['cart'] = $g[0]['price'];
	echo $cart->get_cart($g,'cart');
	
	//echo $_SESSION['cart'];
	//$g1 = $cart->item1($reg1);
	//echo $cart->get_cart($g1,'cart');
}
$cart = $_SESSION['cart'];
if(isset($_GET['new_products'])){
	//$_SERVER['PHP_SELF'] = "/index";
	$_SERVER['REQUEST_URI'] = '/index';
	echo $_SERVER['QUERY_STRING'];
	echo $_SERVER['REQUEST_URI'];
	$clocks = $page->get_date();
	$count_clocks = count($clocks);
	$nav = $page->navigation($count_clocks );
	$text1 = array($page->get_date(),$nav);
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
	$clocks = $page->get_search($srch);
	$count_clocks = count($clocks);
	$nav = $page->navigation($count_clocks);
	$text = array($page->get_search($srch),$nav);
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