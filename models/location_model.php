<?php

function select(){
	$query = mysql_query("select *
		from locations a 
			order by location_id
			");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from locations 
			where location_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into locations values(".$data.")");
}

function update($data, $id){
	mysql_query("update locations set ".$data." where location_id = '$id'");
}

function delete($id){
	mysql_query("delete from locations  where location_id = '$id'");
}


?>