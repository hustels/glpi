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


    <div class="container" id="test">
        <div class="row">


            <div class="jumbotron" id="custom_jumbotron">
                <h3><button type="button" class="btn btn-success btn-lg" id="login_btn">Iniciar Sesión</button></h3>
                <div id="login_form" >
                    <form action="scripts/session/session.php" method="POST" id="frm">
                        <div class="form-group">
                            <label for="username">Usuario</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Introduzca el usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Introduzca la contraseña">
                        </div>
                        <button type="submit" class="btn btn-success" id="submit_btn">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>


<!--
    <div class="panel panel-default">
        <div class="panel-body">
            Basic panel example
        </div>
    </div>

    <a class="btn btn-info" data-toggle="collapse" href="#totalInforme" aria-expanded="false" aria-controls="collapseExample">
        Ver Informe
    </a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#informePersonalizado" aria-expanded="false" aria-controls="collapseExample">
        Ayuda
    </button>

    <div class="collapse" id="informePersonalizado">
        <div class="well">
            Para  poder sacar el informe de forma personalizada , pudiendo elegir el rango de fechas
            <button>eje</button>
        </div>
    </div>
    <div class="collapse" id="totalInforme">
        <div class="well">
            Para  poder sacar el total de informes <br>
            <a class="btn btn-success" href="public/informeTotal.php">Ejecurar</a>
        </div>
    </div>

    -->

    <footer>
        <p>&copy; Prosegur 2015</p>
    </footer>

</div>
<script src="resources/jquery/jquery.min.js"></script>
<script src="resources/bootstrap/js/bootstrap.js"></script>
<script src="resources/jquery.validate.js"></script>
<script src="assets/js/customValidate.js"></script>
<script src="assets/js/login.js"></script>

</body>
</html>