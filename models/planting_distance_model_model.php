<?php

function select(){
	$query = mysql_query("select * from planting_distance_models");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from planting_distance_models 
			where planting_distance_model_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into planting_distance_models values(".$data.")");
}

function update($data, $id){
	mysql_query("update planting_distance_models set ".$data." where planting_distance_model_id = '$id'");
}

function delete($id){
	mysql_query("delete from planting_distance_models  where planting_distance_model_id = '$id'");
}


?>