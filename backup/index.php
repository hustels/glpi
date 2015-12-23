<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Informe GLPI</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/styles.css"/>
</head>
<body>
    <div class="container">
        <ul class="nav nav-tabs" id="navegacion">
            <!--class="active"  para home -->
            <li role="presentation" ><a href="#">Home</a></li>
            <li role="presentation"><a href="public/graph.php">Grafica de informe</a></li>
            <li role="presentation"><a href="public/glpiComputers.php.php">Total</a></li>
            <li role="presentation"><a href="scripts/session/session.php">Login</a></li>
        </ul>


        <img src="assets/images/img_report.png" class="img-responsive" class="img-rounded"/>
    <!-- ############ GLPI COMPUTERS BEGIN -->
        <a class="btn btn-info" data-toggle="collapse" href="#glpiComputers" aria-expanded="false" aria-controls="collapseExample">
            GLIP computers
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#informePersonalizado" aria-expanded="false" aria-controls="collapseExample">
            Personalizado
        </button>

        <div class="collapse" id="informePersonalizado">
            <div class="well">
                Para  poder sacar el informe de forma personalizada , pudiendo elegir el rango de fechas <br/>
                <a class="btn btn-info" href="public/glpiComputers.php">Ejecurar</a>
            </div>
        </div>
        <div class="collapse" id="glpiComputers">
            <div class="well">
                Para  poder sacar el total de informes <br>
                <a class="btn btn-success" href="public/glpiComputers.php">Ejecurar</a>
            </div>
        </div>
        <br/><br/><br/>

        <!-- ############### GLPI COMUPTERS END ################################-->


        <!-- ############ GLPI parte 2 BEGIN -->


        <a class="btn btn-info" data-toggle="collapse" href="#glpiotro" aria-expanded="false" aria-controls="collapseExample">
            GLIP OTRO
        </a>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#glpiotro" aria-expanded="false" aria-controls="collapseExample">
            GLPI OTRO
        </button>

        <div class="collapse" id="glpiotro">
            <div class="well">
                GLPI OTRO
                <a class="btn btn-info" href="public/glpiComputers.php">Ejecurar</a>
            </div>
        </div>
        <div class="collapse" id="glpiComputers">
            <div class="well">
                GLPI OTRO <br>
                <a class="btn btn-success" href="public/glpiComputers.php">Ejecurar</a>
            </div>
        </div>



        <!-- ############### GLPI parte 3 END ################################-->



        <!-- Comienzo informes
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse"  class="btn btn-primary" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>-->

        <footer>
            <p>&copy; Prosegur 2015</p>
        </footer>

    </div>
    <script src="resources/jquery/jquery.min.js"></script>
    <script src="resources/bootstrap/js/bootstrap.js"></script>

</body>
</html>