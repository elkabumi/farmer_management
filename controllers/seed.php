<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/seed_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Bibit");

$_SESSION['menu_active'] = 1;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "seed.php?page=form";


		include '../views/seed/list.php';
		get_footer();
	break;
	
	// Form input dan edit
	case 'form':
		get_header();

		$close_button = "seed.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
		
			$action = "seed.php?page=edit&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();
	
			$row->seed_name = false;
			$row->seed_description = false;

			$action = "seed.php?page=save";
		}

		include '../views/seed/form.php';
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

		header('Location: seed.php?page=list&did=1');
		
	break;

	// Edit data
	case 'edit':

		$id = get_isset($_GET['id']);	
		
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_description = get_isset($i_description);
	

		
					$data = " seed_name = '$i_name', 
					seed_description = '$i_description'

			";
			
		update($data, $id);
			
		header('Location: seed.php?page=list&did=2');

	break;

	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: seed.php?page=list&did=3');

	break;
}

?>