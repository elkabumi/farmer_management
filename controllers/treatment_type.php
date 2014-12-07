<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/treatment_type_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Data Tipe Treatment");

$_SESSION['menu_active'] = 1;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "treatment_type.php?page=form";


		include '../views/treatment_type/list.php';
		get_footer();
	break;
	
	// Form input dan edit
	case 'form':
		get_header();

		$close_button = "treatment_type.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit Tipe Treatment");

			$row = read_id($id);
		
			$action = "treatment_type.php?page=edit&id=$id";
		} else{
			$title = ucfirst("Form Input Tipe Treatment");

			//inisialisasi
			$row = new stdClass();
	
			$row->treatment_type_name = false;
			$row->treatment_type_description = false;

			$action = "treatment_type.php?page=save";
		}

		include '../views/treatment_type/form.php';
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

		header('Location: treatment_type.php?page=list&did=1');
		
	break;

	// Edit data
	case 'edit':

		$id = get_isset($_GET['id']);	
		
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_description = get_isset($i_description);
	

		
					$data = " treatment_type_name = '$i_name', 
					treatment_type_description = '$i_description'

			";
			
		update($data, $id);
			
		header('Location: treatment_type.php?page=list&did=2');

	break;

	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: treatment_type.php?page=list&did=3');

	break;
}

?>