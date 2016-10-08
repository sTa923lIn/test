<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Start_Upload extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();

		$this->load->model('picture_model'); // загрузили модель 
	}

	 public function index()
	{
		$this->load->view('upload_view'); // загрузили вЪюшку
	}




function Uploaderror()
	{

  if (isset($_POST['add']) && ($_POST['nameimage']!='') && ($_POST['username']!='')) // Проверяем заполнения форм и нажатие кнопки
  {
		  	if ($_FILES['userfile']['size']>0) // Проверка на наличие файла и размера файла
		  	{	
		  		if( substr($_FILES['userfile']['type'], 0, 5)=='image' )// проверка типа файла
			  	{
			  		$this->UploadImage(); 			// Передаем ПОСТ другой функции 
					$this->load->view('upload_view');
				}
				else
				{
					echo "Файл не является картинкой, выбери картинку.";
					$this->load->view('upload_view');
				}
		  	}
		  	else
		  	{
			  	echo "Файл не выбран или перевышает 2МБ, попробуй выбрать другой файл!";
				$this->load->view('upload_view');
		  	}

  	}
	else
	{	echo "Будь любезен, заполни ВСЕ формы...".'<br>';
		$this->load->view('upload_view');
	}

}


		  function UploadImage()
	{
		$format = 'Y-m-d H:i:s';
		$now=date($format, time());
		
		$path="image/"; //присваеваем переменной путь к каталогу с картинками
		$mim=$_POST['nameimage'].'.'.substr($_FILES['userfile']['type'], 6, 9); // загоняем в переменную новое название и расширение файла
		$image=$path.$mim; //записываем путь к файлу
		if(is_uploaded_file($_FILES['userfile']['tmp_name']) )
		{
			move_uploaded_file($_FILES['userfile']['tmp_name'],$image); //записываем файл в заданный каталог с присвоением ему имени, указанным пользователем
		}

		$requested=0; //запрос пользователя к картинке
		

					// создадим уменьшенную копию картинки

									$thumb= array(
												'image_library'	=>'gd2',
												'source_image' =>$image,
												'new_image' =>APPPATH.'../image/thumbs',
												'create_thumb' =>TRUE,
												'maintain_ratio'=>TRUE,
												'width'=>200,
												'height'=>200
												);

									$this->load->library('image_lib', $thumb); // загружаем библиотеку 
									$this->image_lib->resize(); // и вызываем функцию

									$mimthumb=$_POST['nameimage'].'_thumb'.'.'.substr($_FILES['userfile']['type'], 6, 9);

									$paththumb="image/thumds/"; 
									$imagethumb=$paththumb.$mimthumb; //находим путь к копиям

		
					// собираем массив для передачи в БД				

		$data=array( 
			'nameimage'=>$_POST['nameimage'],
			'nameuser'=>$_POST['username'],
			'sizeimage'=>$_FILES['userfile']['size'],
			'datetime'=>$now,
			'image'=>$image,
			'requested'=>$requested,
			'thumb'=>$imagethumb
			); 	
										 
		$this->picture_model->InsertDb($data);

			echo "Отлично!Загрузи еще!".'<br>';
			
	}

function DownloadImage()
{
	$result['picturies']=$this->picture_model->SelectDb();
	$this->load->view('download_view',$result);

}

function SortImage()
{
	if (isset($_POST['sort'])) 
	{
		$size=$_POST['sel'];
		$result['picturies']=$this->picture_model->SortImageDb($size);
		$this->load->view('download_view',$result);
	}

	if ($result->num_rows() > 0)
{
   $row = $result->row(); 

   echo $row->sizeimage;
  
}

}
		
}
?>