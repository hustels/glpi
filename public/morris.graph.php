
<?php

error_reporting(E_ALL ^ E_WARNING);

session_start();
require_once('../scripts/session/class.messages.php');
$msg = new Messages();
if(isset($_SESSION['id'])){

   // echo '<br>';

   // echo "Welcome user  " .$_SESSION['id']."<a href='../scripts/session/logout.php'> logout</a>";
}else{





    header("Location: ../index.php");
    echo $msg->add('e', '<div style="width: 100%px;" class="alert alert-danger">Debes autenticarte!</p>');


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	
</head>
<body>
	<?php 
		/*
		BBDD prueba
        $con = mysqli_connect("localhost" , "root" , "" , "morris");
            $rows = '';
        $query = "SELECT * FROM cron ORDER BY cron_time DESC LIMIT 0, 24";
        $result = mysqli_query($con,$query);
        $total_rows =  $result->num_rows;
        if($result) 
        {
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        */

        //BBDD GLPI
        $con = mysqli_connect("" , "" , "" , "");
        $rows = '';
        $query = "SELECT name , date_mod FROM glpi_computers  LIMIT 0, 40";
        $result = mysqli_query($con,$query);
        $total_rows =  $result->num_rows;
        if($result) 
        {
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

    ?>

<div id="morris-line-chart" style="max-width: 80%; align:center;"></div>

	 <script>
 
		Morris.Line({
		    // ID of the element in which to draw the chart.
		    element: 'morris-line-chart',
		 
		    // Chart data records -- each entry in this array corresponds to a point
		    // on the chart.
		    data: <?php echo json_encode($rows);?>,
		 
		    // The name of the data record attribute that contains x-values.
		    xkey: 'name',
		 
		    // A list of names of data record attributes that contain y-values.
		    ykeys: ['date_mod'],
		 
		    // Labels for the ykeys -- will be displayed when you hover over the
		    // chart.
		    labels: ['Equipos microInformatica'],
		 
		    lineColors: ['#0b62a4'],
		    xLabels: 'hour',
		 
		    // Disables line smoothing
		    smooth: true,
		    resize: true
		});



		/*
		Morris.Line({
		    // ID of the element in which to draw the chart.
		    element: 'morris-line-chart',
		 
		    // Chart data records -- each entry in this array corresponds to a point
		    // on the chart.
		    data: <?php echo json_encode($rows);?>,
		 
		    // The name of the data record attribute that contains x-values.
		    xkey: 'name',
		 
		    // A list of names of data record attributes that contain y-values.
		    ykeys: ['date_mod'],
		 
		    // Labels for the ykeys -- will be displayed when you hover over the
		    // chart.
		    labels: ['Equipos microInformatica'],
		 
		    lineColors: ['#0b62a4'],
		    xLabels: 'hour',
		 
		    // Disables line smoothing
		    smooth: true,
		    resize: true
		});*/
</script>

	
</body>
</html>