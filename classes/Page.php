<?php
class Page{
    
	public $text;

    public function get_all(){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_all_db();
		
		return $result;
	}	
	
	public function get_one($id){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_one_db($id);
		
		return $result;
	}
	public function get_header_menu(){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_menu_header();
		
		return $result;
	}
	public function get_sidebar_menu(){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_menu_sidebar();
		
		return $result;
	}
	public function get_clock(){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_clocks();
		//$count_clocks = count($result);
		return $result;
	}
	public function get_product($mark){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->hr($mark);
		
		return $result;
	}
	public function get_user($login,$password){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_users($login,$password);
	 
	    return $result;
	}
	public function get_search($srch){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_searches($srch);
	 
	    return $result;
	}
	public function get_date(){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_data();
		
		return $result;
	}
		public function get_admin(){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->get_admin_menu();
		
		return $result;
	}
	public function ins_data($login,$password,$name,$visit_cart,$picture){
		$db = new Database(HOST,USER,PASS,DB);
	    $db->insert_data($login,$password,$name,$visit_cart,$picture);
		}
	public function ins_order($nm,$e_mail,$address,$price,$name,$count){
			$db = new Database(HOST,USER,PASS,DB);
			$db->insert_order($nm,$e_mail,$address,$price,$name,$count);
	}
  /* public function select_com($id){
		$db = new Database(HOST,USER,PASS,DB);
		$result = $db->select_comment($id);
		
		return $result;
	} */
	public function insert_com($txt,$id,$log){
		$db = new Database(HOST,USER,PASS,DB);
		$db->insert_comment($txt,$id,$log);
	}
	public function navigation($count_clocks){
	//$count_clocks = 8;
	$get_on_one_page = ceil($count_clocks / QUANTITY_NEWS);
	//echo $get_on_one_page;
	for($i = 1;$i<=$get_on_one_page;$i++){
		$pages[] = $i;
	}
	return $pages;
	} 
	public function get_body($text,$file){
		ob_start();
		include 'tmpl/'.$file.'.php';
		return ob_get_clean();
	
	}
	public function get_menu($text1,$file){
		
		ob_start();
		include 'tmpl/'.$file.'.php';
		return ob_get_clean();
		
	}

}
?>