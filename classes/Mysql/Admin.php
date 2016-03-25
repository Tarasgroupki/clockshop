<?
class Admin {
	public $db_adm;
	
	public function __construct($host,$user,$pass,$db_adm){
		$this->db_adm = mysql_connect($host,$user,$pass);
		if(!$this->db_adm){
			exit('There is not connect to database');
		}
		if(!mysql_select_db($db_adm,$this->db_adm)){
			exit('No table');
		}
		mysql_query("SET NAMES 'utf8'");
		
		return $this->db_adm;
	}
	public function insert_categories($insert){
		$sql = "INSERT into `sidebar_menu` values('','$insert','')";
		$res = mysql_query($sql);
		if(!$res){
			return FALSE;
		}
		return $res;
	}
	public function update_categories($update,$ad){
		$sql = "UPDATE `sidebar_menu` SET name = '$update' WHERE `id` = '$ad'";
		$res = mysql_query($sql);
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
		$res = mysql_query($sql);
		if(!$res){
			return FALSE;
		}
		for($i = 0;$i<mysql_num_rows($res);$i++){
		$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}
		//print_r($result);
		return $row;
	}
	public function insert_things($image,$title,$mark,$country,$description,$short_description,$price,$year){
		$sql = "Insert into clocks values('','images/$image','$title','$mark','$country','$description','$short_description','$price','$year','')";
		$res = mysql_query($sql);
		if(!$res){
			return FALSE;
		}
		/*for($i = 0;$i<mysql_num_rows($res);$i++){
			$row[] = mysql_fetch_array($res,MYSQL_ASSOC);
		}*/
		return $res;
	}
	public function delete_categories($delete){
		//print_r($delete);
		foreach($delete as $del=>$key){
		//$del1 = str_replace('del','',$del);
		//echo $del1;
		//echo $del;
		$sql = "DELETE FROM sidebar_menu WHERE id = '$del'";
		$res = mysql_query($sql);}
		if(!$res){
			return FALSE;
		}
		//return $res;
	}
	public function delete_things($delete){
		//print_r($delete);
		foreach($delete as $del=>$key){
		//$del1 = str_replace('del','',$del);
		//echo $del1;
		echo $del;
		$sql = "DELETE FROM clocks WHERE id = '$del'";
		$res = mysql_query($sql);}
		if(!$res){
			return FALSE;
		}
		//return $res;
	}
	public function orders(){
		$sql = "SELECT * FROM `orders`";
		$res = mysql_query($sql);
		if(!$res){
			return FALSE;
		}
		for($i = 0;$i<mysql_num_rows($res);$i++){
		$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
		}
		return $row;
	}
	public function one_order($order){
		$sql = "SELECT * FROM `orders` WHERE id = '$order'";
		$res = mysql_query($sql);
		if(!$res){
			return FALSE;
		}
		$row = mysql_fetch_array($res,MYSQLI_ASSOC);
		return $row;
	}
	
}

?>