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
include('conexion_be.php');
session_start(); // Iniciar la sesión del usuario

$email = $_POST['email'];
$password = $_POST['contrasena'];
$session_id = $_POST['session_id'];


// Prepare a statement with placeholders for user input
$stmt = mysqli_prepare($conexion, "SELECT * FROM usuarios WHERE email = ?");

// Bind the user's email to the placeholder
mysqli_stmt_bind_param($stmt, "s", $email);

// Execute the statement
mysqli_stmt_execute($stmt);

// Get the result of the query
$result = mysqli_stmt_get_result($stmt);

// Fetch the first row of the result (there should only be one)
$row = mysqli_fetch_assoc($result);

if ($row && password_verify($password, $row['contrasena'])) {
    // Password is correct, update the user's session ID in the database
    $session_id = uniqid();
    $user_id = $row['id'];
    $email = $row['email'];
    $update_query = "UPDATE usuarios SET session_id = '$session_id' WHERE email = '$email'";
    mysqli_query($conexion, $update_query);

    // Set the user's session variables
    $_SESSION['id'] = $user_id;
    $_SESSION['email'] = $email;

    // Redirect to the denuncia page
    header("Location: ../index.php");
    exit;
} else {
    // Password is incorrect or user doesn't exist
    // echo "<script>alert('Usuario no encontrado, por favor verifique los datos introducidos');</script>";
    // echo "<script>location.href='../login.php';</script>";
    echo "<script>Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Usuario no encontrado, por favor verifique los datos introducidos',
        showConfirmButton: false
      });</script>";
    echo "<script>
    function message(){
      location.href='../login.php';
    }        
    setTimeout(message, 2500);</script>;";
}

// Always close your database connection
mysqli_close($conexion);
