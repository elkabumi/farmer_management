<?php

function select(){
	$query = mysql_query("select *
		from treatment_types a 
			order by treatment_type_id
			");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from treatment_types 
			where treatment_type_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into treatment_types values(".$data.")");
}

function update($data, $id){
	mysql_query("update treatment_types set ".$data." where treatment_type_id = '$id'");
}

function delete($id){
	mysql_query("delete from treatment_types  where treatment_type_id = '$id'");
}


?>