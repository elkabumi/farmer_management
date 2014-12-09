<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/search_farmer_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Pencarian Data Petani");

$_SESSION['menu_active'] = 6;

switch ($page) {
	// Tampilan List awal
	case 'list':
		get_header();

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		
		$date_default = "";
		$date_url = "";
		
		if(isset($_GET['preview'])){
	
			$i_farmer_id = get_isset($_GET['farmer']);
		}
		
		$action = "search_farmer.php?page=form_result&preview=1";
		
		include '../views/search_farmer/form.php';
		
		if(isset($_GET['preview'])){
			
			$i_farmer_id = get_isset($_GET['farmer']);
			
			$query_item = select_summary($i_farmer_id);
			
			include '../views/search_farmer/list_item.php';
		}
		
		
		get_footer();
	break;
	//Mengambil parameter
	case 'form_result':
		

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		
		//if(isset($_GET['preview'])){
			$i_farmer_id = (isset($_POST['i_farmer_id'])) ? $_POST['i_farmer_id'] : null;
			extract($_POST);
		//}
		
		header("Location: search_harves.php?page=list&preview=1&farmer=$i_farmer_id");
	break;
}

?>