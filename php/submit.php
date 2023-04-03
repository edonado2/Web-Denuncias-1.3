<?php
session_start(); // Iniciar la sesión del usuario
// Incluir el archivo de conexión a la base de datos
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtén los datos del formulario para denunciantes
    $nombre_denunciante = $_POST["nombre"];
    $apellido_denunciante = $_POST["apellido"];
    $cedula_denunciante = $_POST["cedula"];
    $telefono_denunciante = $_POST["telefono"];

    // Obtener información de la denuncia
    $denuncia = $_POST['denuncia'];

    // // Obtén el valor del lugar
    $lugar = $_POST['lugar'];

    // print($lugar);

    // // Obtén el tipo de abuso
    $tipo_de_abuso = $_POST['violencia-option'];

    // // print($tipo_de_abuso);

    // // // Obtén el fecha de abuso
    $fecha_abuso = $_POST['fecha'];

    // // print($fecha_abuso);

    // // // Obtén el hora de abuso
    $hora_abuso = $_POST['hora'];

    $agresores = json_decode($_POST['agresores']);

    if (empty($nombre_denunciante) || empty($apellido_denunciante) || empty($cedula_denunciante) || empty($telefono_denunciante)) {
        echo "Error: Debe completar todos los campos del denunciante";
        exit();
    }

    if (empty($denuncia) || empty($lugar) || empty($tipo_de_abuso) || empty($fecha_abuso) || empty($hora_abuso)) {
        echo "Error: Debe completar todos los campos de la denuncia";
        exit();
    }

    // Get user ID from session
    $usuario_id = $_SESSION['id'];

    // Insert denunciante data into database
    $sqlDenunciante = "INSERT INTO denunciantes(nombre, apellido, cedula, telefono, usuario_id) VALUES ('$nombre_denunciante', '$apellido_denunciante', '$cedula_denunciante', '$telefono_denunciante', $usuario_id)";
    $result = mysqli_query($conexion, $sqlDenunciante);

    if ($result) {
        // Get ID of the inserted denunciante
        $id_denunciante = mysqli_insert_id($conexion);

        // Insert denuncia data into database using the denunciante ID
        $sqlDenuncia = "INSERT INTO denuncias(descripcion, lugar_del_acontecimiento, tipo_abuso, fecha_abuso, hora_acontecimiento, id_denunciante) VALUES ('$denuncia', '$lugar', '$tipo_de_abuso', '$fecha_abuso', '$hora_abuso', '$id_denunciante')";
        $result = mysqli_query($conexion, $sqlDenuncia);

        if ($result) {
            // Get ID of the inserted denuncia
            $id_denuncia = mysqli_insert_id($conexion);

            // Insert denunciado data into database using the denuncia ID
            foreach ($agresores as $value) {
                $nombre = $value->name;
                $apellido = $value->lastname;
                $cedula = $value->code;

                $sqlDenunciado = "INSERT INTO denunciados(nombre, apellido, cedula, id_denuncia) VALUES ('$nombre', '$apellido', '$cedula', '$id_denuncia')";
                mysqli_query($conexion, $sqlDenunciado);
            }

            // Print success message
            echo "true";
        } else {
            // Print error message
            print("False");
        }
    } else {
        // Print error message
        echo "Error al insertar los datos de denunciante: " . mysqli_error($conexion);
    }
}
