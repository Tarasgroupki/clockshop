<?php
class Database {
	public $db;
	
	
	public function __construct($host,$user,$pass,$db){
		$this->db = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
		if(!$this->db){
			exit('There is not connect to database');
		}
		//if(!mysql_select_db($db,$this->db)){
			//exit('No table');
		//}
		$this->db->exec("SET CHARACTER SET utf8");
		
		return $this->db;
	}
	
	public function get_all_db(){
		$sql = "SELECT id,title,image,news FROM news";
		
		$res = $this->db->query($sql);
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i < mysqli_num_rows($res);$i++){
			$row[] = $res->fetchAll(PDO::FETCH_ASSOC);
			//print_r($row);
		//}
		return $row;
	}
	public function get_one_db($id){
		
		$sql = "SELECT * FROM clocks WHERE id = '$id'";
		$res = $this->db->query($sql);
		echo $id;
		if(!$res){
			return FALSE;
		}
		
	 $row = $res->fetchAll(PDO::FETCH_ASSOC);
	 $row = $row[0];
	 return $row;
	}
	public function get_menu_header(){
		$sql = "SELECT * FROM header_menu";
		$res = $this->db->query($sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = $res->fetchAll(PDO::FETCH_ASSOC);
		
		//}
		return $row;
	}
	public function get_menu_sidebar(){
		$sql = "SELECT * FROM sidebar_menu";
		$res = $this->db->query($sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = $res->fetchAll(PDO::FETCH_ASSOC);
		
		//}
		return $row;
	}

public function get_clocks(){
		$sql = "SELECT * FROM clocks";
		$res = $this->db->query($sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = $res->fetchAll(PDO::FETCH_ASSOC);
		//print_r($row);//}
		return $row;
	}	
public function hr($mark){
	$sql = "SELECT * FROM clocks WHERE mark = '$mark'";
	$res = $this->db->query($sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = $res->fetchAll(PDO::FETCH_ASSOC);
		//}
		
		return $row;
}
public function get_users($login,$password){
	$sql = "SELECT * FROM users WHERE Login='$login' && Password='$password'";
	$res = $this->db->query($sql);
	
	if(!$res){
		return FALSE;
	}
	//for($i = 0; $i<mysql_num_rows($res);$i++){
	$row = $res->fetchALL(PDO::FETCH_ASSOC);
//}
return $row;
}
public function get_searches($srch){
	$sql = "SELECT * FROM clocks WHERE title LIKE '%".$srch."%'";
	$res = $this->db->query($sql);
	
	if(!$res){
		return FALSE;
	}
	//for($i = 0; $i<mysql_num_rows($res);$i++){
	$row = $res->fetchAll(PDO::FETCH_ASSOC);
//}
return $row;
}
public function get_thing_to($reg){
	$sql = "SELECT * FROM clocks WHERE id = '".$reg."'";
	$res = $this->db->query($sql);
	if(!$res){
		return FALSE;
	}
	//for($i = 0; $i<mysql_num_rows($res);$i++){
	$row = $res->fetchAll(PDO::FETCH_ASSOC);
//}
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
		$res = $this->db->query($sql);
		
		if(!$res){
			return FALSE;
		}
		//for($i = 0; $i<mysql_num_rows($res);$i++){
		$row = $res->fetchAll(PDO::FETCH_ASSOC);
		//}
		return $row;
}
public function insert_data($login,$password,$name,$visit_cart,$picture){
	$sql = "Insert into `users` values('','$login','$password','$name','$visit_cart','active','images/$picture','','')";
	$res = $this->db->query($sql);
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
}
public function insert_comment($txt,$id,$log){
	$sql = "Insert into comment values('','$id','$log','$txt')";
	$res = mysqli_query($this->db,$sql);
	if(!$res){
			return FALSE;
		}	
}*/
public function insert_order($nm,$e_mail,$address,$price,$name,$count){
	$sql = "Insert into orders values('','$nm','$e_mail','$address','$name','$price','$count')";
	$res = $this->db->query($sql);
	if(!$res){
		return FALSE;
	}
}
public function get_data(){
	$timestamp = time() - 20*24*60*60;
    $rdate = date("d.m.Y H:i:s", $timestamp);
	$sql = "SELECT * FROM clocks WHERE data > '$rdate'";
    $res = $this->db->query($sql);
	if(!$res){
		return FALSE;
	}
	//for($i = 0;$i<mysql_num_rows($res);$i++){
		$row = $res->fetchAll(PDO::FETCH_ASSOC);
	//}
//mysqli_close($this->db);
	return $row;
	}

}

?>