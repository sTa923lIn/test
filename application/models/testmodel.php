<?php

class Testmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

		function getRecords1()
		{	
			$this->db->select('prodact, price, country');
			$res=$this->db->get('prodacts');
			$items=$res->result_array();
			return $items;

		}

				function getRecords2($id)
			{
				//$this->db->where(array('price >' => 1000));
				//$res=$this->db->get_where('prodacts',array('id'=>$id));
				$this->db->where('id > 1 or price > 100');
				$res=$this->db->get('prodacts');
				$items=$res->result_array();
				return $items;

			}



}

?>