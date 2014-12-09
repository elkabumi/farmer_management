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

		$query = select();
		$add_button = "farmer.php?page=form";


		include '../views/search_farmer/list.php';

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
	
case 'form':
	get_header();
	
	$title = ucfirst("Detail Data Petani");

	$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		$row = read_id($id);
		$query_item = select_summary($id);
			
			$close_button = "search_farmer.php?page=list";
			
			include '../views/search_farmer/form.php';
			include '../views/search_farmer/list_item.php';
	get_footer();
	break;}

?>