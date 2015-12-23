<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/order_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Order");

$_SESSION['menu_active'] = 2;

switch ($page) {
	case 'list':
		
		$first_building_id = get_first_building_id();
		$building_id = (isset($_GET['building_id'])) ? $_GET['building_id'] : $first_building_id; 
		$building_name = get_building_name($building_id);
		$building_img = get_building_img($building_id);
		//get_header2($title);
		
		//$query = select();
		$action_room = "order.php?page=save_room";
		$action_table = "order.php?page=save_table&building_id=$building_id";
		$action_logout = "logout.php";
		
		//$building_next();
		//$building_prev();

		include '../views/order/list.php';
		//get_footer();
	break;

	case 'form_led':
		
		$table_id = (isset($_GET['id'])) ? $_GET['id'] : ''; 

		$last_id = get_last_id($table_id);
		$row['table_name'] = get_table_name($table_id);
		$row['table_ip'] = get_table_ip($table_id);


		
		if($last_id){
			$value = read_last_id($last_id);
			
			$row['type'] = $value['type'];
			$row['value1'] = $value['value1'];
			$row['value2'] = $value['value2'];
			$row['value3'] = $value['value3'];
			$row['colour1'] = $value['colour1'];
			$row['colour2'] = $value['colour2'];
			$row['colour3'] = $value['colour3'];

		}else{
			$row['type'] = '';
			$row['value1'] = '';
			$row['value2'] = '';
			$row['value3'] = '';
			$row['colour1'] = '';
			$row['colour2'] = '';
			$row['colour3'] = '';
		}


		$action = "order.php?page=save_led&table_id=$table_id";
		$close_button = "order.php";

		include '../views/order/form_led.php';
		//get_footer();
	break;

	case 'form_load':
		
		$table_id = (isset($_GET['id'])) ? $_GET['id'] : ''; 

		$last_id = get_last_id($table_id);
		$row['table_name'] = get_table_name($table_id);
		$row['table_ip'] = get_table_ip($table_id);

		
		if($last_id){
			$get_value = read_last_id($last_id);
			$row['type'] = $get_value['type'];
					if($get_value['type'] == 2){
					 	$led_value = $get_value['value1'];
					 	$led_colour = $get_value['colour1_name'];
					}else{

					 	$led_value = $get_value['value1']." | ".$get_value['value2_name']." | ".$get_value['value3_name'];
						$led_colour = $get_value['colour1_name']." | ".$get_value['colour2_name']." | ".$get_value['colour3_name'];
					}
					$led_value = strtoupper($led_value);
		}else{
			$row['type'] = '';
			$led_value = '';
		}
		echo "Gate : ".$row['table_name']."<br>"; 
		echo "IP address : ".$row['table_ip']."<br>";
		echo "Format Type : ".$row['type']."<br>";
		echo "Value : ".$led_value."<br>";
		echo "Colour : ".$led_colour;

		//include '../views/order/form_led.php';
		//get_footer();
	break;

	case 'save_led':
		$type = $_POST['i_type'];
		$table_id = $_GET['table_id'];
		$table_ip = $_POST['i_ip'];
		$date = date("Y-m-d H:i:s");

		if($type == 1){
			$value1 = $_POST['i_value1'];
			$value2 = $_POST['i_value2'];
			$value3 = $_POST['i_value3'];

			$colour1 = $_POST['i_colour1'];
			$colour2 = $_POST['i_colour2'];
			$colour3 = $_POST['i_colour3'];

			$data = "'','".$table_id."', '$date', '$type', '$value1', 
					'$value2', '$value3', '$colour1', '$colour2', '$colour3'";
		}else{
			$value1 = $_POST['i_value_manual'];
		
			$colour1 = $_POST['i_colour_manual'];

			$data = "'','".$table_id."', '$date', '$type', '$value1', 
					'', '', '$colour1', '', ''";
		}

		
		save_led($data);
		//echo "IP : ".$table_ip."<br>";
		//echo "Value : ".$value;
		header("location: order.php");
	break;
	
	case 'save_table_location':

		$id=$_GET['id'];
		$data_x=$_GET['data_x'];
		$data_y=$_GET['data_y'];
		
		save_table_location($id, $data_x, $data_y);
		
	
	break;


	
	case 'save_room':
		$room_name = $_POST['i_room_name'];
		$data = "'','".$room_name."'";
		save_room($data);
		header('location: order.php');
	break;
	
	case 'save_table':
		$building_id = $_GET['building_id'];
		$table_name = $_POST['i_table_name'];
		$data = "'',
				'$building_id',
				'".$table_name."',
				'200',
				'200'
				";
		save_table($data);
		header("location: order.php?building_id=$building_id");
	break;
	
	
	
}

?>