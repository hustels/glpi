<?php
//------------------------------------------------------------------------------
// A session is required for the messages to work
//------------------------------------------------------------------------------
if( !session_id() ) session_start();

//------------------------------------------------------------------------------
// Include the Messages class and instantiate it
//------------------------------------------------------------------------------
require_once('scripts/session/class.messages.php');
$msg = new Messages();

//------------------------------------------------------------------------------
// Process the form if it was submitted
//------------------------------------------------------------------------------
if( isset($_POST['username']) &&  isset($_POST['password'])) {

    //
    // Step 1
    // Check for the required fields
    //
    if($_POST['username'] == "glpi" && $_POST['password'] == "glpi"){
        $_SESSION['id'] = $_POST['username'];
    }else{
        echo $msg->add('e', '<div style="width: 100%px;" class="alert alert-danger">Usuario o password incorrectos!</p>');

    }

    // if( strlen(trim(@$_POST['username'])) == 0 ) $msg->add('e', 'Username is required!');
    // if( strlen(trim(@$_POST['password'])) == 0 ) $msg->add('e', 'The password is required!');

    //
    // Step 2
    // After all the fields have been validated then check for any errors before proceeding
    //

    // If there are no errors then the form was valid.
    if( !$msg->hasErrors() ) {

        // To help demonstrate functionality we'll add a "success" message and redirect the user
        //$msg->add('s', 'The form was valid!');

        // You could technically redirect to any page, and the messages will be displayed as long as the
        // $msg->display(); code is there. For our sake, we're redirecting back to this page to clear the POST data.
        header('Location: public/main.php');

        // Always be sure to exit() after a redirect! If not, the rest of the script will still be processed.
        exit();

    } else {
        // If there are any errors then you should take an appropriate action.
        // Since we are displaying this page again if there is an error
        // then there is nothing else for us to do.
       
    }
}


//------------------------------------------------------------------------------
// Print out the HTML page as usual
//------------------------------------------------------------------------------
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Informe de, equipos microinformatica, prosegur">

    <title>Web de informes GLPI</title>

    <!-- Bootstrap core CSS -->
    <link href="public/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="public/assets/css/style.css" rel="stylesheet">
    <link href="public/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

	  	
		      <form class="form-login" action="" method="post">
                    <?php
        require_once('scripts/session/class.messages.php');
        
        // If session falla muestro message
        echo $msg->display();

         ?>
		        <h2 class="form-login-heading">Iniciar sesión</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="Usuario" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
		            <label class="checkbox">
		            </label>
		            <button class="btn btn-theme btn-block" href="index.php" type="submit"><i class="fa fa-lock"></i> Login</button>
		            <hr>
		
		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="public/assets/js/jquery.js"></script>
    <script src="public/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="public/assets/js/jquery.backstretch.min.js"></script>
    <script>
       // $.backstretch("public/assets/img/login-bg.PNG", {speed: 500});
    </script>


  </body>
</html>
