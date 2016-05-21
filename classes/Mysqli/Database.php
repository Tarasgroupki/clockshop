<?php
//session_start();
class Database {
	public $db;
	
	
	public function __construct($host,$user,$pass,$db){
		$this->db = mysqli_connect($host,$user,$pass,$db);
		if(!$this->db){
			exit('There is not connect to database');
		}
		//if(!mysql_select_db($db,$this->db)){
			//exit('No table');
		//}
		mysqli_query($this->db,"SET NAMES 'utf8'");
		
		return $this->db;
	}
	
	public function get_all_db(){
		$sql = "SELECT id,title,image,news FROM news";
		
		$res = mysqli_query($this->db,$sql);
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i < mysqli_num_rows($res);$i++){
			$row[] = mysqli_fetch_all($res,MYSQLI_ASSOC);
			//print_r($row);
		//}
		return $row;
	}
	public function get_one_db($id){
		
		$sql = "SELECT * FROM clocks WHERE id = '".intval($id)."'";
		$res = mysqli_query($this->db,$sql);
	
		if(!$res){
			return FALSE;
		}
		
	 $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
	 
	 return $row;
	}
	public function get_menu_header(){
		$sql = "SELECT * FROM header_menu";
		$res = mysqli_query($this->db,$sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		
		//}
		return $row;
	}
	public function get_menu_sidebar(){
		$sql = "SELECT * FROM sidebar_menu";
		$res = mysqli_query($this->db,$sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		
		//}
		return $row;
	}

public function get_clocks(){
		$sql = "SELECT * FROM clocks";
		$res = mysqli_query($this->db,$sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		//print_r($row);//}
		return $row;
	}	
public function hr($mark){
	$sql = "SELECT * FROM clocks WHERE mark = '".mysqli_real_escape_string($this->db,$mark)."'";
	$res = mysqli_query($this->db,$sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		//}
		
		return $row;
}
public function get_users($login,$password){
	$sql = "SELECT * FROM users WHERE Login='$login' && Password='$password'";
	$res = mysqli_query($this->db,$sql);
	
	if(!$res){
		return FALSE;
	}
	//for($i = 0; $i<mysql_num_rows($res);$i++){
	$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
//}
return $row;
}
public function get_searches($srch){
	$sql = "SELECT * FROM clocks WHERE title LIKE '%".mysqli_real_escape_string($this->db,$srch)."%'";
	$res = mysqli_query($this->db,$sql);
	
	if(!$res){
		return FALSE;
	}
	//for($i = 0; $i<mysql_num_rows($res);$i++){
	$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
//}
return $row;
}
public function get_thing_to($reg){
	//print_r($reg[0]);
	for($i = 0;$i<14;$i++){
		$reg[0]['counter'.$i] = NULL;
	}
	//print_r($reg);
	foreach($reg[0] as $key => $value){
		for($i = 0;$i<14;$i++){
	
    if($value != NULL && $value != 0){
		//echo $value;
	$sql = "SELECT * FROM clocks WHERE id = '".mysqli_real_escape_string($this->db,$value)."'";
	$res = mysqli_query($this->db,$sql);
	if(!$res){
		return FALSE;
	}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
	$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
	if($value == $i){
	$escape[] = $row;
		}}}}
	//print_r($escape);
	//print_r($row);
//}
return $escape;
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
		$res = mysqli_query($this->db,$sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		//}
		return $row;
}
public function insert_data($login,$password,$name,$visit_cart,$picture){
	$sql = "Insert into `users` values('','$login','$password','$name','$visit_cart','active','images/$picture','','')";
	$res = mysqli_query($this->db,$sql);
	if(!$res){
			return FALSE;
		}
}
/*public function select_comment($id){
	$sql = "SELECT * FROM comment WHERE category_id = '$id'";
	$res = mysqli_query($this->db,$sql);
	if(!$res){
			return FALSE;
		}
	$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
	return $row;
}*/
public function insert_comment($txt,$id,$log){
	$timestamp = time() - 20*24*60*60;
    $rdate = date("Y.m.d", $timestamp);
	$sql = "Insert into comment values('','$id','$log','$txt','$rdate')";
	$res = mysqli_query($this->db,$sql);
	if(!$res){
			return FALSE;
		}	
}
public function insert_order($nm,$e_mail,$address,$price,$name,$count){
	$sql = "Insert into orders values('','$nm','$e_mail','$address','$name','$price','$count')";
	$res = mysqli_query($this->db,$sql);
	if(!$res){
		return FALSE;
	}
}
public function get_data(){
	$timestamp = time() - 20*24*60*60;
    $rdate = date("Y.m.d H:i:s", $timestamp);
	$sql = "SELECT * FROM clocks WHERE data > '$rdate'";
    $res = mysqli_query($this->db,$sql);
	if(!$res){
		return FALSE;
	}
	//for($i = 0;$i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
	//}
mysqli_close($this->db);
	return $row;
	}

}

?>