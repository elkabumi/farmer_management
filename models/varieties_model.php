<?php

function select(){
	$query = mysql_query("select * from varieties");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from varieties 
			where varieties_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into varieties values(".$data.")");
}

function update($data, $id){
	mysql_query("update varieties set ".$data." where varieties_id = '$id'");
}

function delete($id){
	mysql_query("delete from varieties  where varieties_id = '$id'");
}


?>