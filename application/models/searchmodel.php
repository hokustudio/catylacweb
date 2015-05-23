<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Searchmodel extends CI_Model {
	public function search($string)
	{
		// $word = explode(" ",$string);
		

		// $n = count($word);
		
		// $result = array();

		// for($i=0;$i<$n;$i++) {
		// 	$query = "SELECT * FROM post WHERE title LIKE '%".$word[$i]."%'";
		// 	$resultquery = $this->db->query($query);
		// 	$result[$i] = $resultquery->result_array();
		// }

		// for($i=0;$i<count($result);$i++) {
		// 	for($j=0;$i<count($result[$i]);$j++)
		// 	{
		// 		$data = $result[$i];
		// 		//foreach ($s[$i] as $key) {
		// 		//	$data = $key[0];
		// 		//}
		// 	}
		// }
		// echo $data;

		$query = "SELECT * FROM post WHERE title LIKE '%".$string."%'";
		$resultquery = $this->db->query($query);
		$result = $resultquery->result_array();
		return $result;
	}
}