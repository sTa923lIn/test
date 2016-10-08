<?php

/**
* Создаем класс для записи файла и инфо о файле в базу данных
*/

class Picture_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}
 

	function InsertDb($data)
	{
		
		$this->db->insert('picturies', $data); 

	}

	function SelectDb()

	{	
		$this->db->select('nameimage, nameuser, sizeimage, datetime, image, requested, thumb');
		$query = $this->db->get('picturies');
		return $query->result_array();

	}

	function SortImageDb($size)
	{
		$this->db->where(array('sizeimage <' => $size));
		$query = $this->db->get('picturies');
		return $query->result_array();


	}
		





}


?>