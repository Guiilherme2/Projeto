<?php
  session_start();
  if (!isset($_SESSESION['id_usuario'])) {
    header("location: index.html");
    exit;
  }
?>
