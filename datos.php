<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["txtNombre"];
  $email = $_POST["txtEmail"];
  $telefono = $_POST["txtTelefono"];
  $sitio_web = $_POST["txtSitioWeb"];
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];

  /*$nombre = $_GET["txtNombre"];
  $email = $_GET["txtEmail"];
  $telefono = $_GET["txtTelefono"];
  $sitio_web = $_GET["txtSitioWeb"];
  $asunto = $_GET["txtAsunto"];
  $mensaje = $_GET["txtMensaje"];*/
}
?>