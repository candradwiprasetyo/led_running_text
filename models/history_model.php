<?php

function select(){
	$query = mysql_query("select a.*, 
			b.value_id as value2_id, b.value_name as value2_name, 
			c.value_id as value3_id, c.value_name as value3_name,
			d.colour_name as colour1_name, 
			e.colour_name as colour2_name, 
			f.colour_name as colour3_name,
			g.user_name,
			h.table_name,
			h.table_ip
			from transactions a
			left join master_values b on b.value_id = a.value2
			left join master_values c on c.value_id = a.value3
			left join colour d on d.colour_id = a.colour1
			left join colour e on e.colour_id = a.colour2
			left join colour f on f.colour_id = a.colour3
			join users g on g.user_id = a.user_id
			join tables h on h.table_id = a.table_id
			");
	return $query;
}

function read_last_id($id){
	$query = mysql_query("select a.*, 
			b.value_id as value2_id, b.value_name as value2_name, 
			c.value_id as value3_id, c.value_name as value3_name,
			d.colour_name as colour1_name, 
			e.colour_name as colour2_name, 
			f.colour_name as colour3_name
			from transactions a
			left join master_values b on b.value_id = a.value2
			left join master_values c on c.value_id = a.value3
			left join colour d on d.colour_id = a.colour1
			left join colour e on e.colour_id = a.colour2
			left join colour f on f.colour_id = a.colour3
			where a.transaction_id = '$id'");
	$result = mysql_fetch_array($query);
	return $result;
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