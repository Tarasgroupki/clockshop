<?php
//session_start();
class Database {
	public $db;
	
	
	public function __construct($host,$user,$pass,$db){
		$this->db = mysql_connect($host,$user,$pass);
		if(!$this->db){
			exit('There is not connect to database');
		}
		if(!mysql_select_db($db,$this->db)){
			exit('No table');
		}
		mysql_query("SET NAMES 'utf8'");
		
		return $this->db;
	}
	
	/*public function get_all_db(){
		$sql = "SELECT id,title,image,news FROM news";
		
		$res = mysql_query($sql);
		if(!$res){
			return FALSE;
		}
		for($i = 0; $i < mysql_num_rows($res);$i++){
			$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}
		return $row;
	}
	public function get_one_db($id){
		
		$sql = "SELECT * FROM clocks WHERE id = '".intval($id)."'";
		$res = mysql_query($sql);
		
		if(!$res){
			return FALSE;
		}
		
	 $row = mysql_fetch_array($res,MYSQL_ASSOC);
	 
	 return $row;
	}*/
	public function get_menu_header(){
		$sql = "SELECT * FROM header_menu";
		$res = mysql_query($sql);
		
		if(!$res){
			return FALSE;
		}
		for($i = 0; $i<mysql_num_rows($res);$i++){
		$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		
		}
		return $row;
	}
	public function get_menu_sidebar(){
		$sql = "SELECT * FROM sidebar_menu";
		$res = mysql_query($sql);
		
		if(!$res){
			return FALSE;
		}
		for($i = 0; $i<mysql_num_rows($res);$i++){
		$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}
		return $row;
	}

public function get_clocks(){
		$sql = "SELECT * FROM clocks";
		$res = mysql_query($sql);
		
		if(!$res){
			return FALSE;
		}
		for($i = 0; $i<mysql_num_rows($res);$i++){
		$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}
		return $row;
	}	
public function hr($mark){
	$sql = "SELECT * FROM clocks WHERE mark = '".mysql_real_escape_string($mark)."'";
	$res = mysql_query($sql);
		
		if(!$res){
			return FALSE;
		}
		for($i = 0; $i<mysql_num_rows($res);$i++){
		$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}
		
		return $row;
}
public function get_users($login,$password){
	$sql = "SELECT * FROM users WHERE Login='$login' && Password='$password'";
	$res = mysql_query($sql);
	
	if(!$res){
		return FALSE;
	}
	for($i = 0; $i<mysql_num_rows($res);$i++){
	$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
}
return $row;
}
public function get_searches($srch){
	$sql = "SELECT * FROM clocks WHERE title LIKE '%".mysql_real_escape_string($srch)."%'";
	$res = mysql_query($sql);
	
	if(!$res){
		return FALSE;
	}
	for($i = 0; $i<mysql_num_rows($res);$i++){
	$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
}
return $row;
}
public function get_thing_to($reg){
	$sql = "SELECT * FROM clocks WHERE id = '".mysql_real_escape_string($reg)."'";
	$res = mysql_query($sql);
	if(!$res){
		return FALSE;
	}
	for($i = 0; $i<mysql_num_rows($res);$i++){
	$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
}
return $row;
}
/*public function get_thing_to1($reg1){
	$sql = "SELECT * FROM clocks WHERE id = '$reg1'";
	$res = mysql_query($sql);
	if(!$res){
		return FALSE;
	}
	for($i = 0; $i<mysql_num_rows($res);$i++){
	$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
}
return $row;
}*/
public function get_admin_menu(){
		$sql = "SELECT * FROM admin_menu";
		$res = mysql_query($sql);
		
		if(!$res){
			return FALSE;
		}
		for($i = 0; $i<mysql_num_rows($res);$i++){
		$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}
		return $row;
}
public function insert_order($nm,$e_mail,$address,$price,$name,$count){
	$sql = "Insert into orders values('','$nm','$e_mail','$address','$name','$price','$count')";
	$res = mysql_query($sql);
	if(!$res){
		return FALSE;
	}
}
public function get_data(){
    $timestamp = time() - 20*24*60*60;
    $rdate = date("d.m.Y H:i:s", $timestamp);
	$sql = "SELECT * FROM clocks WHERE data > '$rdate'";
    $res = mysql_query($sql);
	if(!$res){
		return FALSE;
	}
	for($i = 0;$i<mysql_num_rows($res);$i++){
		$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
	}

	return $row;
	}


}

?>