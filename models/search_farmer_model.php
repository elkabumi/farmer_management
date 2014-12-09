<?php

function select(){
	$query = mysql_query("select *	from farmers");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *	from farmers where farmer_id = $id");
	$result = mysql_fetch_array($query);
	return $result;
}
 
function select_summary($id){
	
	$query = mysql_query("SELECT a. * , b.land_area, c.location_name, d.farmer_land_area, e. * , f.varieties_name
						FROM planting_processes a
						JOIN lands b ON b.land_id = a.land_id
						JOIN locations c ON c.location_id = b.location_id
						JOIN farmer_lands d ON d.land_id = b.land_id
						JOIN (SELECT * FROM farmers WHERE farmer_id = $id)e ON e.farmer_id = d.farmer_id
						JOIN varieties f ON f.varieties_id = a.varieties_id
						ORDER BY a.planting_process_date DESC");
	return $query;
	
}


?>