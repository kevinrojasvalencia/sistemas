<?php
// Establecer la conexión con la base de datos (ajusta los valores según tus credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$sexo = $_POST['sexo'];
$fecha_viaje = $_POST['fecha'];
$destino = $_POST['Planeta'];
$estado_fisico = $_POST['Estado'];

// Preparar la consulta SQL
$sql = "INSERT INTO registro (nombre, edad, email, pais, sexo, fecha, destino, estado)
        VALUES ('$nombre', '$edad', '$email', '$pais', '$sexo', '$fecha_viaje', '$destino', '$estado_fisico')";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
