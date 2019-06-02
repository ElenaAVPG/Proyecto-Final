<?php
//Conexion con la base de datos
        $conexion = mysql_connect("localhost", "root", "") or die("<h2>>No se encuentra el servidor </h2>");;
        $db = mysql_select_db("usuarios",$link) or die("<h2>Error de conexion</h2>");

//obtenemos los valores del formulario
$name=$_POST['nombreUsuario'];
$company=$_POST['nombreCompañia'];
$email=$_POST['correoElectronico'];
$phone=$_POST['nombre de la compañia'];
$message=$_POST['mensaje'];

//Obtiene la longitud de un string
$req = (strlen($name)*strlen($email)*strlen($phone)*strelen($message)) or die ("No se ha llegando todos los campos");


//ingresar la informacion a la tabla datos

mysql_query("INSERT INTO opiniones VALUES ('', '$name','$company','$email','phone','message')",$link) or die ("<h2>Error</h2>");

echo '
<h2> Mensaje enviado </h2>
';