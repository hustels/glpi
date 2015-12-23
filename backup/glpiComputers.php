<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informe GLPI</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <link rel="stylesheet" href="../resources/datatables/media/css/jquery.dataTables.css"/>
    <link rel="stylesheet" href="../resources/datatables/TableTools/css/dataTables.tableTools.css"/>
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="../assets/css/styles.css"/>
    <script src="../resources/datatables/media/js/jquery.js"></script>
    <script src="../resources/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../resources/datatables/TableTools/js/dataTables.tableTools.js"></script>
    <script src="../assets/js/sendAjax.js"></script>


</head>
<body>

    <div class="container">
        <ul class="nav nav-tabs" id="navegacion">
            <li role="presentation" class="active" ><a href="#">Home</a></li>
            <li role="presentation"><a href="graph.php">Grafica de informe</a></li>
            <li role="presentation"><a href="informeTotal.php">Total</a></li>
            <li role="presentation"><a href="">Login</a></li>
        </ul>




        <div class="panel panel-default">
            <div class="panel-body">
                Informe GLPI
            </div>
        </div>


       <!-- <div class="unit w-1-2"><p>Informe GLPI:</p>-->
                <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>entities_id</th>
                    <th>name</th>
                    <th>serial</th>
                    <th>Contact</th>
                    <th>Contact_Num</th>
                    <th>Fecha</th>
                    <th>UUID</th>
        
                </tr>
                </thead>

                <tfoot>
                <tr>
                    <th>entities_id</th>
                    <th>name</th>
                    <th>serial</th>
                    <th>Contact</th>
                    <th>Contact_Num</th>
                    <th>Fecha</th>
                    <th>UUID</th>
                   
                </tr>
                </tfoot>
            </table>

            <script>
                $.fn.dataTable.TableTools.defaults.aButtons = [ "csv", "xls" ];
                $(document).ready(function() {
                    $('#example').dataTable( {
                        "processing": true,
                        "serverSide": true,
                        "ajax": "../scripts/glpi.php",
                        "dom": 'T<"clear">lfrtip',
                        "tableTools": {
                            "sSwfPath": "../assets/images/copy_csv_xls_pdf.swf"
                        }



                    } );
                } );





            </script>
        <footer>
            <p>&copy; Prosegur 2015</p>
        </footer>

    </div>
</body>
</html>