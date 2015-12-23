<?php

function select(){
	$query = mysql_query("select a.*
							from master_values a
							order by value_id");
	return $query;
}



function read_id($id){
	$query = mysql_query("select a.*
			from master_values a
			where a.value_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into master_values values(".$data.")");
}


function update($data, $id){
	mysql_query("update master_values set ".$data." where value_id = '$id'");
}

function delete($id){
	mysql_query("delete from master_values where value_id = '$id'");
}

?>