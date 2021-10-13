<?php
     require_once 'lib/nusoap.php';
     function getLibros($datos) {
     	if ($datos == "Libros") {
     		return join(",",array (
     			"La historia del loco",
     			"El psicoanalista", 
     			"Personas desconocidas",
     			"La chica del tren"));
     	}
        else {
        	return "No hay libros";
        }
   }
   $server = new soap_server();
   $server->register("getLibros");
   if ( !isset( $HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input');
   $server->service($HTTP_RAW_POST_DATA);

?>

