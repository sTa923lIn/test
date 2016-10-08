<?php
$this->load->view('header');

echo'<h2>'.$title.'</h2>';
echo '<ul>';
//echo count($items);
	foreach ($items as $i )
	 {
		echo'<li> Имя: '.$i['prodact'].'| Прайс :'.$i['price'].'| Страна :'.$i['country'].'</li>';
	}

echo '</ul>';






$this->load->view('footer');
?>