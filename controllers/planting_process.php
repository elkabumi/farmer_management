<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/planting_process_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Data Proses Tanam");

$_SESSION['menu_active'] = 4;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "planting_process.php?page=form";


		include '../views/planting_process/list.php';
		get_footer();
	break;
	
	// Form input dan edit
	case 'form':
		get_header();

		$close_button = "planting_process.php?page=list";
		$query_land = select_land();
		$query_varieties = select_varieties();
		$query_planting_distance_model = select_planting_distance_model();
		$query_seed = select_seed();

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			
			$title = ucfirst("Form Edit Proses Tanam");


			$row = read_id($id);
		
			$action = "planting_process.php?page=edit&id=$id";
		} else{
			$title = ucfirst("Form Input Proses Tanam");

			
			//inisialisasi
			$row = new stdClass();
	
			$row->land_id = false;
			$row->varieties_id = false;
			$row->planting_process_date = date("Y-m-d");
			$row->planting_distance_model_id = false;
			$row->planting_process_planting_distance = false;
			$row->planting_process_seedling_stage = false;
			$row->seed_id = false;

			$action = "planting_process.php?page=save";
		}

		include '../views/planting_process/form.php';
		get_footer();
	break;

	// simpan data
	case 'save':
		extract($_POST);

		$i_land_id = get_isset($i_land_id);
		$i_varieties_id = get_isset($i_varieties_id);
		$i_date = format_back_date(get_isset($i_date));
		$i_planting_distance_model_id = get_isset($i_planting_distance_model_id);
		$i_planting_distance = get_isset($i_planting_distance);
		$i_seedling_stage = get_isset($i_seedling_stage);
		$i_seed_id = get_isset($i_seed_id);

		$data = "'',
				'$i_land_id', 
				'$i_varieties_id',
				'$i_date',
				'$i_planting_distance_model_id',
				'$i_planting_distance',
				'$i_seedling_stage',
				'$i_seed_id',
				'',
				'',
				'',
				''
				";
		
		create($data);

		header('Location: planting_process.php?page=list&did=1');
		
	break;

	// Edit data
	case 'edit':

		$id = get_isset($_GET['id']);	
		
		extract($_POST);

		$i_land_id = get_isset($i_land_id);
		$i_varieties_id = get_isset($i_varieties_id);
		$i_date = format_back_date(get_isset($i_date));
		$i_planting_distance_model_id = get_isset($i_planting_distance_model_id);
		$i_planting_distance = get_isset($i_planting_distance);
		$i_seedling_stage = get_isset($i_seedling_stage);
		$i_seed_id = get_isset($i_seed_id);
	

		
					$data = " land_id = '$i_land_id', 
					varieties_id = '$i_varieties_id',
					planting_process_date = '$i_date',
					planting_distance_model_id = '$i_planting_distance_model_id',
					planting_process_planting_distance = '$i_planting_distance',
					planting_process_seedling_stage = '$i_seedling_stage',
					seed_id = '$i_seed_id'

			";
			
		update($data, $id);
			
		header('Location: planting_process.php?page=list&did=2');

	break;

	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: planting_process.php?page=list&did=3');

	break;
}

?>