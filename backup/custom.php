<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informe GLPI</title>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
    <link rel="stylesheet" href="../resources/datatables/media/css/jquery.dataTables.css"/>
    <link rel="stylesheet" href="../resources/datatables/TableTools/css/dataTables.tableTools.css"/>
    <script src="../resources/datatables/media/js/jquery.js"></script>
    <script src="../resources/datatables/media/js/jquery.dataTables.js"></script>
    <script src="../resources/datatables/TableTools/js/dataTables.tableTools.js"></script>


</head>
<body>
<form action="../scripts/custom.report.php" method="POST">
    <input type="text" name="comienzo"/><input type="text" name="fin"/><input type="submit" value="Generar"/>
</form>
<div class="unit w-1-2"><p>Informe GLPI:</p>
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Extn.</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Extn.</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </tfoot>
    </table>


    <script>
        $.fn.dataTable.TableTools.defaults.aButtons = [ "csv", "xls" ];
        $(document).ready(function() {
            $('#example').dataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "../scripts/custom.report.php",
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "../assets/images/copy_csv_xls_pdf.swf"
                }



            } );
        } );





    </script>
</body>
</html>