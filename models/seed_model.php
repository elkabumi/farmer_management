<?php

function select(){
	$query = mysql_query("select * from seeds");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from seeds 
			where seed_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into seeds values(".$data.")");
}

function update($data, $id){
	mysql_query("update seeds set ".$data." where seed_id = '$id'");
}

function delete($id){
	mysql_query("delete from seeds  where seed_id = '$id'");
}


?>