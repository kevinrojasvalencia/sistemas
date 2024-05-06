<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Flores1.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <title>NASA</title>
    <style type="text/css">
        body {
            padding-left: 15em;
            font-family: Verdana, Arial, sans-serif;
            font-size: 13px;
            color: rgb(148, 158, 253);
            text-align: center;
            background-color: #000000; /* Nuevo color de fondo */
        }

        .formulario {
            margin: 20px auto; /* Centrar el formulario */
            padding: 20px;
            max-width: 400px; /* Ajustar el ancho del formulario */
            background-color: rgba(7, 10, 29, 0.534); /* Fondo blanco claro */
            border: 4px solid #000331;
        }

        .formulario h2 {
            text-align: left; /* Alineación izquierda */
            margin-top: 0; /* Eliminar margen superior */
        }

        .form-row {
            margin-bottom: 10px; /* Espacio entre filas */
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }

        form {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-row {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        label {
            width: 30%;
            margin-right: 15px;
            text-align: right;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        select {
            width: 70%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #3366cc;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <ul class="navbar">
        <li><a href="Inicio.html">Sistema Solar</a></li>
        <li><a href="paginaFlores2.html">Planetas</a></li>
        <li><a href="PaginaFlores3.html">Imformacion</a></li>
        <li><a href="paginaFlores4.html">Misiones</a></li>
    </ul>
    <header>
        <img src="nasa.png" width="130" height="115" alt="No se encontró imagen">
        <h1 style="font-family: 'Arial', sans-serif; font-size: 36px; margin-top: 10px;">EL SISTEMA SOLAR</h1>
        <h1 style="font-family: 'Arial', sans-serif; font-size: 15px; margin-top: -10px;">National Aeronautics and Space Administration</h1>
    </header>



    <div class="container">
        <hr />
        <div class="formulario">
            <h2>REGISTRO PARA VIAJE AL ESPACIO</h2>
            <hr />
            <form action="conexion.php" method="post" onsubmit="return validarFormulario()">
                <div class="form-row">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>
                </div>
                <div class="form-row">
                    <label for="edad">Edad:</label>
                    <input type="number" name="edad" id="edad" required>
                </div>
                <div class="form-row">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-row">
                    <label for="pais">País:</label>
                    <input type="text" name="pais" id="pais" required>
                </div>
                <div class="form-row">
                    <label>Sexo:</label>
                    <input type="radio" name="sexo" value="masculino" required> Masculino
                    <input type="radio" name="sexo" value="femenino" required> Femenino
                </div>
                <div class="form-row">
                    <label for="fecha">Fecha de Viaje:</label>
                    <input type="date" name="fecha" id="fecha" required>
                </div>
                <div class="form-row">
                    <label for="planeta">Seleccione Su Destino:</label>
                    <select name="Planeta" id="planeta">
                        <option value="Luna">Luna</option>
                        <option value="Mercurio">Mercurio</option>
                        <option value="Venus">Venus</option>
                        <option value="Marte">Marte</option>
                        <option value="Jupiter">Jupiter</option>
                        <option value="Saturno">Saturno</option>
                        <option value="Urano">Urano</option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="estado">Estado físico:</label>
                    <select name="Estado" id="estado">
                        <option value="Malo">Malo</option>
                        <option value="Regular">Regular</option>
                        <option value="Bueno">Bueno</option>
                        <option value="Excelente">Excelente</option>
                    </select>
                </div>
                <div class="form-row button-row">
                <input type="submit" value="Registrarse">
                </div>
                <div id="alert"></div>
            </form>
            <script type="text/javascript">
        function validarFormulario() {
            // Obtener los valores del formulario
            var nombre = document.getElementById('nombre').value;
            var edad = document.getElementById('edad').value;
            var email = document.getElementById('email').value;
            var pais = document.getElementById('pais').value;
            var sexo = document.querySelector('input[name="sexo"]:checked');
            var fecha = document.getElementById('fecha').value;
            var planeta = document.getElementById('planeta').value;
            var estado = document.getElementById('estado').value;

            // Validar que los campos no estén vacíos
            if (nombre.trim() === '' || edad.trim() === '' || email.trim() === '' || pais.trim() === '' || sexo === null || fecha.trim() === '' || planeta.trim() === '' || estado.trim() === '') {
                alert('Por favor, complete todos los campos');
                return false;
            }

            // Validar edad como número
            if (isNaN(edad) || edad <= 0) {
                alert('Ingrese una edad válida');
                return false;
            }

            // Validar el formato del email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Ingrese un correo electrónico válido');
                return false;
            }

            return true;
        }
    </script>
        </div>
    </div>
    <footer>
        <p>Nombre Institucion:ITSA</p>
        <p>Carrera:SistemasImformaticos</p>
        <p>Autor :Rojas Valencia Kevin</p>
        <p>Contacto:71452731</p>        
    </footer>
</body>
</html>
