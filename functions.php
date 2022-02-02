<?php 
	$host = 'localhost';
	$database = 'boxes'; // имя базы данных
	$user = 'root'; // имя пользователя
	$password = ''; // пароль
	$connection = mysqli_connect($host, $user, $password, $database);
	
	function get_course_by_id($id){
		global $connection;
		$query = "SELECT * FROM catalogs WHERE id=" . $id;
		$req = mysqli_query($connection, $query);
		$resp = mysqli_fetch_assoc($req);
		return $resp;

	}



		
		
	
 ?>
