<?php

function select(){
	$query = mysql_query("select *
		from farmers a 
			
			");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from farmers 
			where farmer_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into farmers values(".$data.")");
	
}

function update($data, $id){
	mysql_query("update farmers set ".$data." where farmer_id = '$id'");
}

function delete($id){
	mysql_query("delete from farmers  where farmer_id = '$id'");
}
function get_img($id){
	$q_img = mysql_query("select farmer_identity_img from farmers where farmer_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->farmer_identity_img;
}

?>