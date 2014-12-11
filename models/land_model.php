<?php

function select(){
	$query = mysql_query("select a.*,b.location_name
		from lands a 
		JOIN locations b ON b.location_id = a.location_id
			
			");
	return $query;
}

function select_farmer_land($id){
	$query = mysql_query("select a.*,b.farmer_name
							from farmer_lands a 
							JOIN farmers b ON b.farmer_id = a.farmer_id
							WHERE land_id = '$id'
			
			");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from lands 
			where land_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}
function read_farmer_land_id($id){
	$query = mysql_query("SELECT *
FROM `farmer_lands` WHERE farmer_land_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function create($table,$data){
	mysql_query("insert into $table values(".$data.")");
	
}


function update($table,$data,$param,$id){
	mysql_query("update ".$table." set ".$data." where ".$param." = '$id'");

}


function get_luas($id){
	$q_img = mysql_query("select farmer_land_area from farmer_lands where farmer_land_id = '$id'");
	$r_img = mysql_fetch_object($q_img);
	return $r_img->farmer_land_area;
}
function delete($table,$param,$id){
	mysql_query("delete from ".$table." where ".$param." = '$id'");
}

function select_farmer($id,$i_farmer_id){
	$query = mysql_query("select a.*,b.farmer_name
							from farmer_lands a 
							JOIN farmers b ON b.farmer_id = a.farmer_id
							WHERE land_id = '$id' and a.farmer_id = '$i_farmer_id'
			
			");
	return $query;
}
?>