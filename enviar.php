<?php
   $destino= "edgardavid131@gmai.com"
   $nombre = $POST["nombre"];
   $correo = $POST["correo"];
   $mensaje = $POST["mensaje"];
   $contenido = "nombre: " . $nombre . "\nCorreo" . $correo . "\nMensaje: " . $mensaje;
   mail($destino, contacto, $contenido)
   header("location:gracias.html);
   
   </body>
   </html>")
?>