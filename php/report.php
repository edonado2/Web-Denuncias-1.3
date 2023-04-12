<?php

    include './conexion_be.php';

    if (!isset($_SESSION)) {
        session_start();
      } else {
        $_SESSION['session_id'] = session_id();
      }

    $id = $_SESSION['id'];
    $id_denuncia = $_GET['id'];

    $query = "SELECT d.*, dn.nombre, dn.apellido, dn.cedula, 
    (SELECT JSON_ARRAYAGG(JSON_OBJECT('nombre', nombre, 'apellido', apellido, 'cedula', cedula)) FROM denunciados WHERE id_denuncia = $id_denuncia) AS denunciados
    FROM denuncias AS d
    INNER JOIN denunciantes as dn 
    ON dn.id = d.id_denunciante
    WHERE d.id = $id_denuncia;";

    $result = mysqli_query($conexion, $query);

    $denunciados = [];

    while ($registro = mysqli_fetch_assoc($result)) {
        $registro['denunciados'] = json_decode($registro['denunciados']);
        $denunciados[] = $registro;
    }

    $data = ['data' => $denunciados[0]];

    echo json_encode($data);