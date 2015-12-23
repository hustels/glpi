<?php 

	
	$conn  = mysqli_connect('' , '' , '' , '') or die ('No se pudo conectar a la BD');

	$query = 'select *  from glpi_computers';
	$result = mysqli_query($conn , $query) or die('No se pudo realizar la consulta');

	$data_to_json = array();
	while ($rows = mysqli_fetch_assoc($result)) {
		$data_to_json [] = $rows;
	}


	echo json_encode($data_to_json);



 ?>