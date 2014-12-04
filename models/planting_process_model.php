<?php

function select(){
	$query = mysql_query("select a.*
		from planting_processes a 
		join lands b on b.land_id = a.land_id
		join varieties b on b.land_id = a.land_id
			
			");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from planting_processs 
			where planting_process_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into planting_processs values(".$data.")");
}

function update($data, $id){
	mysql_query("update planting_processs set ".$data." where planting_process_id = '$id'");
}

function delete($id){
	mysql_query("delete from planting_processs  where planting_process_id = '$id'");
}


?>