<?php

function getFromTableById($id)
	{
		$sel='select * from users where id='.$id;
		$result=$this->db->query($sel); 
		$item=$result->result_array();
		return $item;
	}

	?>