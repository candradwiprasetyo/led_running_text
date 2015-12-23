<?php

function select(){
	$query = mysql_query("select a.*
							from tables a
							order by table_id");
	return $query;
}



function read_id($id){
	$query = mysql_query("select a.*
			from tables a
			where a.table_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_payment_id($id){
	$query = mysql_query("select *
			from payments
			where table_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into tables values(".$data.")");
}


function create_payment($data){
	mysql_query("insert into payments values(".$data.")");
	$payment_id = mysql_insert_id();
	
	return $payment_id;
}

function create_payment_detail($payment_id, $i_payment_tenor, $i_payment_angsuran){
	
	$lama_angsuran = $i_payment_tenor * 12;
	
	$pd_month = date("m");
	$pd_year = date("Y");
	for($i=1; $i<=$lama_angsuran; $i++){
		
		$data_detail = "'',
						'$payment_id',
						'$pd_month',
						'$pd_year',
						'$i',
						'$i_payment_angsuran',
						'0'
						";
		
		mysql_query("insert into payment_details values(".$data_detail.")");
		
		if($pd_month < 12){
			$pd_month++;
		}else{
			$pd_year++;
			$pd_month = 1;
		}
	}
	
}

function update($data, $id){
	mysql_query("update tables set ".$data." where table_id = '$id'");
}

function update_payment($data, $id){
	mysql_query("update payments set ".$data." where table_id = '$id'");
}

function delete($id){
	mysql_query("delete from tables where table_id = '$id'");
}

function get_payment($id){
	$query = mysql_query("select table_id from payments where table_id = '$id'");
	$result = mysql_fetch_array($query);
	return $result['table_id'];
}
?>