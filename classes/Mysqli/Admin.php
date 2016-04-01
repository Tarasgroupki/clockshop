<?
class Admin {
	public $db_adm;
	
	public function __construct($host,$user,$pass,$db_adm){
		$this->db_adm = mysqli_connect($host,$user,$pass,$db_adm);
		if(!$this->db_adm){
			exit('There is not connect to database');
		}
		/*if(!mysql_select_db($db_adm,$this->db_adm)){
			exit('No table');
		}*/
		mysqli_query($this->db_adm,"SET NAMES 'utf8'");
		
		return $this->db_adm;
	}
	public function insert_categories($insert){
		$sql = "INSERT into `sidebar_menu` values('','$insert','')";
		$res = mysqli_query($this->db_adm,$sql);
		if(!$res){
			return FALSE;
		}
	}
	public function update_categories($update,$ad){
		$sql = "UPDATE `sidebar_menu` SET name = '$update' WHERE `id` = '$ad'";
		$res = mysqli_query($this->db_adm,$sql);
		if(!$res){
			return FALSE;
		}
		return $res;
	}
	public function get_ad($ad){
		return $ad;
	}
	public function to_Adm(){
		$sql = "SELECT * FROM `admin`";
		$res = mysqli_query($this->db_adm,$sql);
		if(!$res){
			return FALSE;
		}
		//for($i = 0;$i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		//}
		//print_r($result);
		return $row;
	}
	public function insert_things($image,$title,$mark,$country,$description,$short_description,$price,$year){
		$timestamp = time();
        $rdate = date("Y.m.d H:i:s", $timestamp);
		$sql = "Insert into clocks values('','images/$image','$title','$mark','$country','$description','$short_description','$price','$year','$rdate')";
		$res = mysqli_query($this->db_adm,$sql);
		if(!$res){
			return FALSE;
		}
		/*for($i = 0;$i<mysql_num_rows($res);$i++){
			$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}*/
	}
	public function delete_categories($delete){
		//print_r($delete);
		foreach($delete as $del=>$key){
		//$del1 = str_replace('del','',$del);
		//echo $del1;
		echo $del;
		$sql = "DELETE FROM sidebar_menu WHERE id = '$del'";
		$res = mysqli_query($this->db_adm,$sql);}
		if(!$res){
			return FALSE;
		}
		//return $res;
	}
	public function delete_things($delete){
		print_r($delete);
		foreach($delete as $del=>$key){
		//$del1 = str_replace('del','',$del);
		//echo $del1;
		print_r($del);
		$sql = "DELETE FROM clocks WHERE id = '$del'";
		$res = mysqli_query($this->db_adm,$sql);}
		if(!$res){
			return FALSE;
		}
		//return $res;
	}
	public function own_1(){
        $sql = "SELECT * FROM clocks ";
        $res = mysqli_query($this->db_adm,$sql);
        if(!$res){
			return FALSE;
		}
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		//print_r($row);
		return $row;
	}
	public function comment($id_com){
        $sql = "SELECT * FROM comment WHERE category_id = '$id_com'";
        $res = mysqli_query($this->db_adm,$sql);
        if(!$res){
			return FALSE;
		}
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $row;
	}
	public function del_comment($delete_com){
		print_r($delete_com);
        foreach ($delete_com as $key => $value) {
        	echo $key;
        	$sql = "DELETE FROM comment WHERE id = '$key'";
        	$res = mysqli_query($this->db_adm,$sql);
        }
        if(!$res){
			return FALSE;
		}
	}
	public function orders(){
		$sql = "SELECT * FROM `orders`";
		$res = mysqli_query($this->db_adm,$sql);
		if(!$res){
			return FALSE;
		}
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $row;
	}
	public function one_order($order){
		$sql = "SELECT * FROM `orders` WHERE id = '$order'";
		$res = mysqli_query($this->db_adm,$sql);
		if(!$res){
			return FALSE;
		}
		$row = mysqli_fetch_all($res,MYSQLI_ASSOC);
		return $row;
	}
	public function delete_order($del_order){
		print_r($del_order);
		foreach ($del_order as $key => $value) {
	    echo $key;
		$sql = "DELETE FROM `orders` WHERE id = '$key'";
		$res = mysqli_query($this->db_adm,$sql);}
		if(!$res){
			return FALSE;
		}
	}
	public function user_status($login,$status){
		$sql = "UPDATE `users` SET status = '$status' WHERE Login = '$login'";
		$res = mysqli_query($this->db_adm,$sql);
		if(!$res){
			return FALSE;
		}
	}
	
}

?>