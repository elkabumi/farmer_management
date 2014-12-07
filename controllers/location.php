<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/location_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Data Lokasi");

$_SESSION['menu_active'] = 1;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "location.php?page=form";


		include '../views/location/list.php';
		get_footer();
	break;
	
	// Form input dan edit
	case 'form':
		get_header();

		$close_button = "location.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			
			$title = ucfirst("Form Edit Lokasi");


			$row = read_id($id);
		
			$action = "location.php?page=edit&id=$id";
		} else{
			$title = ucfirst("Form Input Lokasi");
			
			//inisialisasi
			$row = new stdClass();
	
			$row->location_name = false;
			$row->location_description = false;

			$action = "location.php?page=save";
		}

		include '../views/location/form.php';
		get_footer();
	break;

	// simpan data
	case 'save':
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_description = get_isset($i_description);

		$data = "'',
				'$i_name', 
				'$i_description'
				";
		create($data);

		header('Location: location.php?page=list&did=1');
		
	break;

	// Edit data
	case 'edit':

		$id = get_isset($_GET['id']);	
		
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_description = get_isset($i_description);
	

		
					$data = " location_name = '$i_name', 
					location_description = '$i_description'

			";
			
		update($data, $id);
			
		header('Location: location.php?page=list&did=2');

	break;

	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: location.php?page=list&did=3');

	break;
}

?>