<?php 
function select_summary($date1,$date2,$i_location_id,$i_varieties_id,$i_planting_distances_model_id,$i_seed_id){
	$locations = ($i_location_id == 0) ? "" : " WHERE location_id = $i_location_id ";
	$varieties = ($i_varieties_id == 0) ? "" : " WHERE varieties_id = $i_varieties_id ";
	$planting_distance_models = ($i_planting_distances_model_id == 0) ? "" : " WHERE planting_distance_model_id = $i_planting_distances_model_id ";
	$seeds = ($i_seed_id == 0) ? "" : " WHERE seed_id = $i_seed_id ";
	
	$query = mysql_query("SELECT a.planting_process_harvest_date, b.land_area, c.location_name, d.seed_name,
						e.planting_distance_model_name, f.varieties_name
						FROM planting_processes a
						JOIN lands b ON b.land_id = a.land_id
						JOIN (SELECT * FROM locations $locations) AS c ON c.location_id = b.location_id
						JOIN (SELECT * FROM seeds $seeds) AS d ON d.seed_id = a.seed_id
						JOIN (SELECT * FROM planting_distance_models $planting_distance_models) AS e ON e.planting_distance_model_id = a.planting_distance_model_id
						JOIN (SELECT * FROM varieties $varieties) AS f ON f.varieties_id = a.varieties_id
						where a.planting_process_harvest_date between '$date1' and '$date2' ");
	return $query;
	
}


?>