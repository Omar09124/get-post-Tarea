<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  /*$nombre = $_POST["txtNombre"];
  $email = $_POST["txtEmail"];
  $telefono = $_POST["txtTelefono"];
  $sitio_web = $_POST["txtSitioWeb"];
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];*/

  $nombre = $_GET["txtNombre"];
  $email = $_GET["txtEmail"];
  $telefono = $_GET["txtTelefono"];
  $sitio_web = $_GET["txtSitioWeb"];
  $asunto = $_GET["txtAsunto"];
  $mensaje = $_GET["txtMensaje"];

  echo "Los datos se han guardado correctamente:<br>";
  echo '<br>';
  echo "Nombre: " . $nombre . "<br>";
  echo '<br>';
  echo "Email: " . $email . "<br>";
  echo '<br>';
  echo "Teléfono: " . $telefono . "<br>";
  echo '<br>';
  echo "SitioWeb: " . $sitio_web . "<br>";
  echo '<br>';
  echo "Asunto: " . $asunto . "<br>";
  echo '<br>';
  echo "Mensaje: " . $mensaje . "<br>";
}
?>