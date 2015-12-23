<?php

   $conn  = mysqli_connect('' , '' , '' , '') or die ('No se pudo conectar a la BD');
    // This correct the empty json display
    mysqli_set_charset($conn,"utf8");
    $query = "select   firstname ,realname , contact , area_negocio , serial , glpi_computers.name
      from glpi_computers inner join glpi_users where glpi_users.name=glpi_computers.contact and glpi_users.firstname is not null";
    $result = mysqli_query($conn , $query) or die('No se pudo realizar la consulta');


     
     while ($rows = mysqli_fetch_assoc($result)) {
        $res [] = $rows;

        $data_to_json = array(
            "sEcho" => 1,
        "iTotalRecords" => count($result),
        "iTotalDisplayRecords" => count($result),
          "aaData"=>$res);
    
        }


    echo json_encode($data_to_json);


/*
    $conn  = mysqli_connect('' , '' , '' , '') or die ('No se pudo conectar a la BD');
    // This correct the empty json display
    mysqli_set_charset($conn,"utf8");
    $query = "select serial , contact ,  firstname ,realname , area_negocio  from glpi_computers inner join glpi_users where glpi_users.name=glpi_computers.contact";
    $result = mysqli_query($conn , $query) or die('No se pudo realizar la consulta');


     
     while ($rows = mysqli_fetch_assoc($result)) {
        $res [] = $rows;

        $data_to_json = array(
            "sEcho" => 1,
        "iTotalRecords" => count($result),
        "iTotalDisplayRecords" => count($result),
          "aaData"=>$res);
    
        }


    echo json_encode($data_to_json);*/



    ?>
