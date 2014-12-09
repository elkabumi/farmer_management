<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/search_harvest_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Pencarian Data Panen");

$_SESSION['menu_active'] = 6;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header();

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		
		$date_default = "";
		$date_url = "";
		$i_location_id = '';
		$i_varieties_id = '';
		$i_planting_distances_model_id = '';
		$i_seed_id = '';
		
		if(isset($_GET['preview'])){
			$i_date = get_isset($_GET['date']);
			$date_default = $i_date;
			$date_url = "&date=".str_replace(" ","", $i_date);
			$i_location_id = get_isset($_GET['locations']);
			$i_varieties_id = get_isset($_GET['varieties']);
			$i_planting_distances_model_id = get_isset($_GET['planting_distance_models']);
			$i_seed_id = get_isset($_GET['seeds']);
		}
		
		
		
		$action = "search_harvest.php?page=form_result&preview=1";
		
		include '../views/search_harvest/form.php';
		
		if(isset($_GET['preview'])){
			
				if(isset($_GET['date'])){
					$i_date = $_GET['date'];
				}else{
					extract($_POST);
					$i_date = get_isset($i_date);
				}
			$i_date = str_replace(" ","", $i_date);
			
			$date = explode("-", $i_date);
			$date1 = format_back_date($date[0]);
			$date2 = format_back_date($date[1]);
			
			$i_location_id = get_isset($_GET['locations']);
			$i_varieties_id = get_isset($_GET['varieties']);
			$i_planting_distances_model_id = get_isset($_GET['planting_distance_models']);
			$i_seed_id = get_isset($_GET['seeds']);
			
			//echo $date1."-".$date2."-".$i_location_id."-".$i_varieties_id."-".$i_planting_distances_model_id."-".$i_seed_id;
			
			$query_item = select_summary($date1,$date2,$i_location_id,$i_varieties_id,$i_planting_distances_model_id,$i_seed_id);
			
			include '../views/search_harvest/list_item.php';
		}
		
		
		get_footer();
	break;
	//Mengambil parameter
	case 'form_result':
		

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		
		$date_default = "";
		$date_url = "";
		
		//if(isset($_GET['preview'])){
			$i_location_id = (isset($_POST['i_location_id'])) ? $_POST['i_location_id'] : null;
			$i_varieties_id = (isset($_POST['i_varieties_id'])) ? $_POST['i_varieties_id'] : null;
			$i_planting_distances_model_id = (isset($_POST['i_planting_distances_model_id'])) ? $_POST['i_planting_distances_model_id'] : null;
			$i_seed_id = (isset($_POST['i_seed_id'])) ? $_POST['i_seed_id'] : null;
			extract($_POST);
			$i_date = (isset($_POST['i_date'])) ? $_POST['i_date'] : null;
			$date_default = $i_date;
			$date_url = "&date=".str_replace(" ","", $i_date);
		//}
		
		header("Location: search_harvest.php?page=list&preview=1&date=$date_default&locations=$i_location_id&varieties=$i_varieties_id&planting_distance_models=$i_planting_distances_model_id&seeds=$i_seed_id");
	break;
	
	//ambil data detail
	case 'form_detail':
	get_header();
	
	$title = ucfirst("Detail Data Panen");

	$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		$row = read_id($id);
		$query_detail = select_detail($id);
		
			$i_date = get_isset($_GET['date']);
			$i_location_id = get_isset($_GET['locations']);
			$i_varieties_id = get_isset($_GET['varieties']);
			$i_planting_distance_model_id = get_isset($_GET['planting_distance_models']);
			$i_seed_id = get_isset($_GET['seeds']);
			
			$close_button = "search_harvest.php?page=list&preview=1&date=$i_date&locations=$i_location_id&varieties=$i_varieties_id&planting_distance_models=$i_planting_distance_model_id&seeds=$i_seed_id";
			
			include '../views/search_harvest/form_detail.php';
			include '../views/search_harvest/list_detail.php';
	get_footer();
	break;
}

?>