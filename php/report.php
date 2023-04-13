<?php

    include './conexion_be.php';

    if (!isset($_SESSION)) {
        session_start();
      } else {
        $_SESSION['session_id'] = session_id();
      }

    $id = $_SESSION['id'];
    $id_denuncia = $_GET['id'];

    $query1 = "SELECT d.*, dn.nombre, dn.apellido, dn.cedula, dn.telefono
    FROM denuncias AS d
    INNER JOIN denunciantes as dn 
    ON dn.id = d.id_denunciante
    WHERE d.id = $id_denuncia;";

    $query2 = "SELECT nombre, apellido, cedula FROM denunciados WHERE id_denuncia = $id_denuncia";

    # (SELECT JSON_ARRAYAGG(JSON_OBJECT('nombre', nombre, 'apellido', apellido, 'cedula', cedula)) FROM denunciados WHERE id_denuncia = $id_denuncia) AS denunciados

    $result1 = mysqli_query($conexion, $query1);
    $result2 = mysqli_query($conexion, $query2);

    $denunciados = [];

    while ($denunciado = mysqli_fetch_assoc($result2)) {
      $denunciados[] = $denunciado;
    }

    $denuncias = [];

    while ($denuncia = mysqli_fetch_assoc($result1)) {
      $denuncias[] = $denuncia;
    }

    $denuncia = $denuncias[0];
    $denuncia['denunciados'] = $denunciados;

    $data = ['data' => $denuncia];

    echo json_encode($data);