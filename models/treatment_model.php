<?php

function select(){
	$query = mysql_query("select a.*, b.land_code, b.land_area, c.varieties_name, d.planting_distance_model_name, e.seed_name, f.location_name, group_concat(h.farmer_name) as pemilik_tanah
		from planting_processes a 
		join lands b on b.land_id = a.land_id
		join varieties c on c.varieties_id = a.varieties_id
		join planting_distance_models d on d.planting_distance_model_id = a.planting_distance_model_id
		join seeds e on e.seed_id = a.seed_id
		join locations f on f.location_id = b.location_id
		join farmer_lands g on g.land_id = b.land_id
        join farmers h on h.farmer_id = g.farmer_id
		group by b.land_id
		order by planting_process_id
		");
	return $query;
}

function select_search($i_search){
	
	$search = explode(" ", $i_search);
	$parameter = ' where ';
	$jml = count($search) - 1;
	for($i=0; $i<=$jml; $i++){
		if($i != 0){
			$parameter .= " or ";
		}
		$parameter .= " b.land_code like '%$search[$i]%' or f.location_name like '%$search[$i]%' or c.varieties_name like '%$search[$i]%' or e.seed_name like '%$search[$i]%' or h.farmer_name like '%$search[$i]%'";
	}
	
	$query = mysql_query("select a.*, b.land_code, b.land_area, c.varieties_name, d.planting_distance_model_name, e.seed_name, f.location_name, group_concat(h.farmer_name) as pemilik_tanah
		from planting_processes a 
		join lands b on b.land_id = a.land_id
		join varieties c on c.varieties_id = a.varieties_id
		join planting_distance_models d on d.planting_distance_model_id = a.planting_distance_model_id
		join seeds e on e.seed_id = a.seed_id
		join locations f on f.location_id = b.location_id
		join farmer_lands g on g.land_id = b.land_id
        join farmers h on h.farmer_id = g.farmer_id
		$parameter
		group by b.land_id
		order by planting_process_id
		
		");
	return $query;
}


function select_treatment($planting_process_id){
	$query = mysql_query("select a.*, b.treatment_type_name from treatments a
		join treatment_types b on b.treatment_type_id = a.treatment_type_id
		where planting_process_id = '$planting_process_id'
		order by treatment_id
		");
	return $query;
}


function select_treatment_type(){
	$query = mysql_query("select * from treatment_types order by treatment_type_id");
	return $query;
}

function read_id($id){
	$query = mysql_query("select a.*
		from treatments a 
		
		where treatment_id = '$id'
		");
	$result = mysql_fetch_object($query);
	return $result;
}


function read_tanam_id($id){
	$query = mysql_query("select a.*, b.land_area, c.varieties_name, d.planting_distance_model_name, e.seed_name, f.location_name
		from planting_processes a 
		join lands b on b.land_id = a.land_id
		join varieties c on c.varieties_id = a.varieties_id
		join planting_distance_models d on d.planting_distance_model_id = a.planting_distance_model_id
		join seeds e on e.seed_id = a.seed_id
		join locations f on f.location_id = b.location_id
		where planting_process_id = '$id'
		");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into treatments values(".$data.")");
}

function update($data, $id){
	mysql_query("update treatments set ".$data." where treatment_id = '$id'");
}

function delete($id){
	mysql_query("delete from treatments  where treatment_id = '$id'");
}


?>