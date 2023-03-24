<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
</head>
<body style="font-family: 'Raleway', sans-serif;">
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>
</html>

<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = test_input($_POST['nombre']);
    $surname = test_input($_POST['apellido']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['contrasena']);

    // Check if user already exists in the database
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'Este correo electrónico ya está registrado. Por favor, introduzca otro correo electrónico.',
            showConfirmButton: false
          });</script>";
        echo "<script>
        function message(){
          location.href='../register.php';
        }        
        setTimeout(message, 3500);</script>;";
        exit;
    } else {
        $token = bin2hex(random_bytes(10));
        // User doesn't exist, insert record into the usuarios table
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, email, contrasena, session_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $surname, $email, $hashed_password, $token);

        if ($stmt->execute()) {
            // Record inserted successfully, redirect to login page
            // echo "<script>alert('Registro realizado con éxito. Por favor, inicie sesión.');</script>";
            // echo "<script>location.href='../login.php';</script>";
            // exit;
            echo "<script>Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Registro realizado con éxito. Por favor, inicie sesión.',
                showConfirmButton: false
              });</script>";
            echo "<script>
            function message(){
              location.href='../login.php';
            }        
            setTimeout(message, 3500);</script>;";
            exit;
        } else {
            // Error inserting record
            header("Location: ../error.html");
            exit;
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
