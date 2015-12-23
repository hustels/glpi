<?php
$con=mysql_connect("localhost","root","") or die("No puede conectarse a la BD!!!!");
mysql_select_db("glpi_emea", $con);
$sth = mysql_query("SELECT * FROM glpi_computers");

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
while($r = mysql_fetch_assoc($sth)) {
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
                title: ' ',
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
    <ul class="nav nav-tabs" id="navegacion">
        <li role="presentation" class="active" ><a href="../index.php">Home</a></li>
        <li role="presentation"><a href="public/graph.php">Grafica de informe</a></li>
        <li role="presentation"><a href="../scripts/session/session.php">Login</a></li>
    </ul>




    <div class="panel panel-default">
        <div class="panel-body">
            Grafica de informe GLPI
        </div>
    </div>



        <div id="chart_div"></div>


    <footer>
        <p>&copy; Prosegur 2015</p>
    </footer>

</div>


</body>
</html>