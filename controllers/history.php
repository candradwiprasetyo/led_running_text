<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/history_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("History");

$_SESSION['menu_active'] = 1;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "history.php?page=form";

		include '../views/history/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "history.php?page=list";
		

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);


		
			$action = "history.php?page=edit&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();
	
			$row->table_name = false;
			$row->table_ip = false;
			$row->table_description = false;
			
			$action = "history.php?page=save";
		}

		include '../views/history/form.php';
		get_footer();
	break;
	
	
	case 'save':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_ip = get_isset($i_ip);
		$i_description = get_isset($i_description);
		
		$data = "'',
					'1',
					'$i_name',
					'$i_ip',
					'100', 
					'100',
					'$i_description',
					'1'
			";
			
			//echo $data;

			create($data);
		
			header("Location: history.php?page=list&did=1");
		
		
	break;
	
	

	case 'edit':

		extract($_POST);

		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
		$i_ip = get_isset($i_ip);
		$i_description = get_isset($i_description);
		
					$data = " table_name = '$i_name', 
							table_ip = '$i_ip',
							table_description = '$i_description'
					";
			
			update($data, $id);
			
			header('Location: history.php?page=list&did=2');

		

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: history.php?page=list&did=3');

	break;
	
	case 'send_email':

		$id = get_isset($_GET['id']);	

			
			require_once "Mail.php";
			$subject = "Test mail PHP";
			  $body = "Test email dengan PHP dan GMAIL !!!";
			  //mail($to, $subject, $body,$headers);
			  //ganti baris ini dengan email yang dituju
			  $to = "candra@elkabumi.com";
			//ganti dengan emailmu /email resmi website
			  $from = "candradwiprasetyo@gmail.com";
			  $host = "ssl://smtp.gmail.com";
			  $port = "465";
			  //emailmu untuk login k gmail
			  $username = "candradwiprasetyo@gmail.com";
			   
			  //passwordmu waktu login gmail
			  $password = "cm3l0n pc";
			 
			$headers = array('From' => $from, 'To' => $to,
			'Subject' => $subject);
			$smtp = Mail::factory('smtp', array('host' => $host,
			 'port' => $port, 'auth' => true,
			 'username' => $username, 'password' => $password));
			 
			  $mail = $smtp -> send($to, $headers, $body);
			 
			if (PEAR::isError($mail)) {
			echo("<p> Email Gagal dikirim" . $mail -> getMessage() . "</p>");
			}else{
			echo "Email berhasil di kirim ";
			}

		

	break;
}

?>