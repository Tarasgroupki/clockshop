<?
class Adm{
	public $text;
	public function to_Admm(){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->to_Adm();
		
		return $result;
	}
	public function insert_cat($insert){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->insert_categories($insert);
		
	}
	public function update_cat($update,$ad){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->update_categories($update,$ad);
		
		return $result;
	}
	public function delete_cat($delete){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->delete_categories($delete);
		
		return $result;
	}
	public function delete_thing($delete){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->delete_things($delete);
		
		return $result;
	}
	public function insert_thing($image,$title,$mark,$country,$description,$short_description,$price,$year){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->insert_things($image,$title,$mark,$country,$description,$short_description,$price,$year);
	
	}
	public function own(){
     $db_adm = new Admin(HOST,USER,PASS,DB);
     $result = $db_adm->own_1();
     //print_r($result);
     return $result;
	}
	public function com($id_com){
     $db_adm = new Admin(HOST,USER,PASS,DB);
     $result = $db_adm->comment($id_com);
     return $result;
	}
	public function delete_comments($delete_com){
        $db_adm = new Admin(HOST,USER,PASS,DB);
        $result  = $db_adm->del_comment($delete_com);
        return $result;
	}
	public function get_orders(){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->orders();
		return $result;
	}
	public function get_one_order($order){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->one_order($order);
		return $result;
	}
	public function delete_orders($del_order){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->delete_order($del_order);
		return $result;
	}
	public function user_status($login,$status){
		$db_adm = new Admin(HOST,USER,PASS,DB);
		$result = $db_adm->user_status($login,$status);
		return $result;
	}
}
?>