<?php 
function select_summary($i_farmer_id){
	
	$query = mysql_query("SELECT a. * , b.land_area, c.location_name, d.farmer_land_area, e. * , f.varieties_name
						FROM planting_processes a
						JOIN lands b ON b.land_id = a.land_id
						JOIN locations c ON c.location_id = b.location_id
						JOIN farmer_lands d ON d.land_id = b.land_id
						JOIN (SELECT * FROM farmers WHERE farmer_id = $i_farmer_id)e ON e.farmer_id = d.farmer_id
						JOIN varieties f ON f.varieties_id = a.varieties_id
						ORDER BY a.planting_process_date DESC");
	return $query;
	
}


?>