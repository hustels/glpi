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


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Web de informes GLPI</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link href="../assets/css/styles.css" rel="stylesheet">
    <!-- Archivos css y js de datatables -->
      <link rel="stylesheet" href="../resources/datatables/media/css/jquery.dataTables.css"/>
      <link rel="stylesheet" href="../resources/datatables/TableTools/css/dataTables.tableTools.css"/>
      <script src="../resources/datatables/media/js/jquery.js"></script>
      <script src="../resources/datatables/media/js/jquery.dataTables.js"></script>
      <script src="../resources/datatables/TableTools/js/dataTables.tableTools.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="/prosegur/public/main.php" class="logo"><b>GLPI PROSEGUR</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../scripts/session/logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="glpi_users.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">GLPI</h5>

                  <li class="mt">
                      <a href="main.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  <!--<li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="calendar.php">Calendario</a></li>
                      </ul>
                  </li>-->
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span> Informes</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="glpi_computers.php">GLPI Computers</a></li>
                      </ul>
                       <ul class="sub">
                          <li class="active"><a  href="glpi_users.php">GLPI Users</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Estadísticas</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.php">Grafica Informe</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> GLPI MicroInformatica</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Informe GLPI</h4>
                          <section id="unseen">
                           <!-- Comienzo de la tabla -->
                              <table id="example" class="display" cellspacing="0" width="100%">
                                  <thead>
                                  <tr id="table_header">
                                      <th>C.E</th>
                                      <th>Apellido</th>
                                      <th>Nombre</th>
                                      
                                  </tr>
                                  </thead>

                                  <tfoot>
                                  <tr>
                                    <th>C.E</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    

                                  </tr>
                                  </tfoot>
                              </table>
                              <!-- Script para cargar datatables -->
                              <script>
                                  $.fn.dataTable.TableTools.defaults.aButtons = [ "csv", "xls" ];
                                  $(document).ready(function() {
                                      $('#example').dataTable( {

                                          "processing": true,
                                          "serverSide": true,
                                          "ajax": "../scripts/glpi_users.php",
                                          "dom": 'T<"clear">lfrtip',
                                          "tableTools": {
                                              "sSwfPath": "../assets/images/copy_csv_xls_pdf.swf"
                                          },
                                          "oLanguage": {
                                             "sZeroRecords": "No hay registros",
                                             "sEmptyTable": "No hay datos en la tabla",
                                             "sLoadingRecords": "Cargando datos...",
                                             "sInfo": "Mostrando _TOTAL_ entradas (_START_ to _END_)",
                                             "sLengthMenu": "Mostrar _MENU_ entrdas",
                                             "sSearch": "Buscar:",
                                             

                                           }



                                      } );
                                  } );
                              </script>

                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->
		  	</div><!-- /row -->

		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">

                          <section id="no-more-tables">

                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              &copy; || Prosegur 2015
              <a href="glpi_computers.php" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>



    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
