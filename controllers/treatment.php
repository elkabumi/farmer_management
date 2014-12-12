<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/treatment_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Data Proses Tanam");

$_SESSION['menu_active'] = 5;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "treatment.php?page=form";


		include '../views/treatment/list.php';
		get_footer();
	break;
	
	case 'list_treatment':
		get_header($title);
		$title = ucfirst("Data Treatment");
		
		$planting_process_id = get_isset($_GET['planting_process_id']);	
		
		$row_tanam = read_tanam_id($planting_process_id);
		
		$query = select_treatment($planting_process_id);
		$add_button = "treatment.php?page=form&planting_process_id=$planting_process_id";
		$close_button = "treatment.php?page=list";
		
		include '../views/treatment/form_tanam.php';
		include '../views/treatment/list_treatment.php';
		get_footer();
	break;
	
	case 'list_treatment_new':
		//get_header($title);
		$title = ucfirst("Data Treatment");
		
		$planting_process_id = get_isset($_GET['planting_process_id']);	
		
		$row_tanam = read_tanam_id($planting_process_id);
		
		$query = select_treatment($planting_process_id);
		$add_button = "treatment.php?page=form&planting_process_id=$planting_process_id";
		$close_button = "treatment.php?page=list";
		
		include '../views/treatment/list_treatment_new.php';
		//get_footer();
	break;
	
	// Form input dan edit
	case 'form':
	
		get_header();
		
		
		
		$planting_process_id = (isset($_GET['planting_process_id'])) ? $_GET['planting_process_id'] : null;
		
		$close_button = "treatment.php?page=list_treatment&planting_process_id=$planting_process_id";
		$query_treatment_type = select_treatment_type();

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$title = ucfirst("Form Edit Treatment");
			$row = read_id($id);
		
			$action = "treatment.php?page=edit&id=$id&planting_process_id=$planting_process_id";
		} else{
			$title = ucfirst("Form Input Treatment");
			//inisialisasi
			$row = new stdClass();
	
			$row->treatment_date = date("Y-m-d");
			$row->treatment_type_id = false;
			$row->treatment_description = false;

			$action = "treatment.php?page=save&planting_process_id=$planting_process_id";
		}

		include '../views/treatment/form.php';
		get_footer();
	break;
	
	case 'search':

		get_header($title);
		
		$i_search = get_isset($_POST['i_search']);
		
		$query = select_search($i_search);
		$add_button = "treatment.php?page=form";


		include '../views/treatment/list.php';
		get_footer();
		
	break;

	// simpan data
	case 'save':
		extract($_POST);
		
		$planting_process_id = get_isset($_GET['planting_process_id']);	

		$i_date = format_back_date(get_isset($i_date));
		$i_treatment_type_id = get_isset($i_treatment_type_id);
		$i_description = get_isset($i_description);

		$data = "'',
				'$planting_process_id',
				'$i_date', 
				'$i_treatment_type_id',
				'$i_description'
				";
		
		create($data);

		header("Location: treatment.php?page=list&planting_process_id=$planting_process_id&did=1");
		
	break;

	// Edit data
	case 'edit':
	
		$planting_process_id = (isset($_GET['planting_process_id'])) ? $_GET['planting_process_id'] : null;

		$id = get_isset($_GET['id']);	
		
		extract($_POST);

		$i_date = format_back_date(get_isset($i_date));
		$i_treatment_type_id = get_isset($i_treatment_type_id);
		$i_description = get_isset($i_description);
	

		
					$data = " treatment_date = '$i_date', 
					treatment_type_id = '$i_treatment_type_id',
					treatment_description = '$i_description'
			";
			
		//	echo $data;
			
		update($data, $id);
			
		header("Location: treatment.php?page=list&did=2&planting_process_id=$planting_process_id");

	break;

	// Delete data
	case 'delete':

		$id = get_isset($_GET['id']);	
		$planting_process_id = (isset($_GET['planting_process_id'])) ? $_GET['planting_process_id'] : null;
		delete($id);

		header("Location: treatment.php?page=list_treatment&did=3&planting_process_id=$planting_process_id");

	break;
}

?>