<?php
//session_start();
class Cart {
	public function item($reg){
		//print_r($reg);
		$db = new Database(HOST,USER,PASS,DB);
		//if(isset($_SESSION['cl'])){
		$result = $db->get_thing_to($reg);
		//}
		
		return $result;
	}
		/*public function item1($reg1){
		$db = new Database(HOST,USER,PASS,DB);
		if(isset($_SESSION['cl1'])){
		$result = $db->get_thing_to1($_SESSION['cl1']);}
		
		return $result;
	}*/
		public function get_cart($g,$file){
		
		ob_start();
		include 'tmpl/'.$file.'.php';
		return ob_get_clean();
		
	}
}
?>