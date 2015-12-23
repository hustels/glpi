
<?php



session_start();
require_once('../scripts/session/class.messages.php');
$msg = new Messages();
if(isset($_SESSION['id'])){

    //echo '<br>';

    //echo "Welcome user  " .$_SESSION['id']."<a href='../scripts/session/logout.php'> logout</a>";
}else{





    header("Location: ../index.php");
    echo $msg->add('e', '<div style="width: 100%px;" class="alert alert-danger">Debes autenticarte!</p>');


}


?>

<?php
//error_reporting(E_ALL ^ E_WARNING);
$con=mysqli_connect("","","" , "") or die("Failed to connect with database!!!!");
$sth = mysqli_query($con , "SELECT name, serial FROM glpi_computers");

$rows = array();
//flag is not needed
$flag = true;
$table = array();
$table['cols'] = array(

    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'name', 'type' => 'string'),
    array('label' => 'serial', 'type' => 'number')

);

$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $temp = array();
    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (string) $r['name']);

    // Values of each slice
    $temp[] = array('v' => (int) $r['serial']);
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;
?>

<html>
<head>
    <!--Load the Ajax API-->
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css"/>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the piechart package.
        google.load('visualization', '1', {'packages':['corechart']});

        // Set a callback to run when the Google Visualization API is loaded.
        google.setOnLoadCallback(drawChart);

        function drawChart() {

            // Create our data table out of JSON data loaded from server.

            var data = new google.visualization.DataTable(<?=$jsonTable?>);
            var options = {
                title: 'Equipos microInformatica',
                is3D: 'true',
                width: 800,
                height: 600
            };
            // Instantiate and draw our chart, passing in some options.
            // Do not forget to check your div ID
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
<div class="container">

        <div id="chart_div"></div>

</div>


</body>
</html>