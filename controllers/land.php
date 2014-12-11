<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/land_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Data Tanah");

$_SESSION['menu_active'] = 3;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "land.php?page=form";


		include '../views/land/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "land.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			
			$title = ucfirst("Form Edit Tanah");


			$row = read_id($id);
			$action = "land.php?page=edit&id=$id";
			
		} else{

			$title = ucfirst("Form Input Tanah");
			
			//inisialisasi
			$row = new stdClass();

			$row->land_id = false;
			$row->location_id = false;
			$row->land_area = 0;
		

			$action = "land.php?page=save";
		}

		include '../views/land/form.php';
		get_footer();
	break;
	
	case 'form_farmer_land':
		get_header();
		
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		$f_id = (isset($_GET['f_id'])) ? $_GET['f_id'] : null;
		
		$close_button = "land.php?page=form&id=$id";

		
		if($f_id){
			$title = ucfirst("Form Edit Tanah Petani");

			$row = read_farmer_land_id($f_id);
		
			$action = "land.php?page=edit_farmer_land&id=$id&f_id=$f_id";
		} else{
			$title = ucfirst("Form Input Tanah Petani");

			//inisialisasi
			$row = new stdClass();
			
			$row->farmer_id = false;
			$row->farmer_land_area 	 = 0;
			
			$action = "land.php?page=save_farmer_land&id=$id";
		}

		include '../views/land/form_farmer_land.php';
		get_footer();
	break;
	
	case 'save':
	
		extract($_POST);

		$i_location_id = get_isset($i_location_id);
		$i_area = get_isset($i_area);
		
		$data = "'',
				'$i_area',
				'$i_location_id'
			
			";

		create("lands", $data);
		$new_id = mysql_insert_id();
		header("Location: land.php?page=form&did=1&id=$new_id");
		
	break;
	
	case 'save_farmer_land':
	
		extract($_POST);

		$i_farmer_id = get_isset($i_farmer_id);
		$i_luas = get_isset($i_luas);
		
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		
		$data = "'',
				'$id',
				'$i_farmer_id',
				'$i_luas'
			";
			echo $data;
		//$update = 	"land_area = land_area  + ".$i_luas."";
		create("farmer_lands", $data);
		//update("lands", $update,"land_id",$id);
		
		header("Location: land.php?page=form&did=1&id=$id");
		
		
	break;
	
	
	
	case 'edit':

		extract($_POST);
		
		$id = get_isset($_GET['id']);	
		
		$i_location_id = get_isset($i_location_id);
		$i_area = get_isset($i_area);
		
		$data = "
				land_area = '$i_area',
				location_id  = '$i_location_id'
			
			";

	
		update("lands",$data,"land_id",$id);
		header('Location: land.php?page=list&did=2');

		

	break;
	case 'edit_farmer_land':

		extract($_POST);
		$id = get_isset($_GET['id']);
		//$i_number = get_isset($i_number);
		$i_farmer_id = get_isset($i_farmer_id);
		$i_luas = get_isset($i_luas);
		
		$f_id = (isset($_GET['f_id'])) ? $_GET['f_id'] : null;
		$get_luas = get_luas($f_id);
		
		$update = 	"land_area = land_area  - ".$get_luas."";
		
		update("lands", $update,"land_id",$id);
	
		$data = " 
				  farmer_id 	 = '$i_farmer_id',
				  farmer_land_area  = '$i_luas'
			";
		//$update2 = 	"land_area = land_area  + ".$i_luas."";
		update("farmer_lands", $data,"farmer_land_id", $f_id);
		
		//update("lands", $update2,"land_id",$id);	
		header("Location: land.php?page=form&did=2&id=$id");

	break;
	
	case 'delete':

		$id = get_isset($_GET['id']);	
	
		delete("lands","land_id", $id);
		delete("farmer_lands","land_id", $id);
		header('Location: land.php?page=list&did=3');

	break;
	
	case 'delete_farm_land':

		$id = get_isset($_GET['id']);	
		$f_id = (isset($_GET['f_id'])) ? $_GET['f_id'] : null;
		
		$get_luas = get_luas($f_id);
		
		$update = 	"land_area = land_area  - ".$get_luas."";
		
		update("lands", $update,"land_id",$id);
		
		delete("farmer_lands","farmer_land_id", $f_id);

			
		header("Location: land.php?page=form&did=2&id=$id");

	break;
}

?>