<?php 
   requiere_once 'lib/nusoap.php';
   $cliente = new nusoap_client('http://localhost/Practica4YVM/Server.php');

   $error = $cliente->getError();
   if ($error) {
   	   echo "<h1>Constuctor error</h1><pre>" . $error . "</pre>";
   }

   $result = $client->call("getLibros", array("datos" => "Libros"));
   if ($cliente->fault) {
       echo "<h2>Fault</h2><pre>";
       print_r($result);
       echo "</pre>";  	
   }
   else {
   	    $error = $cliente->getError();
   	    if ($error) {
   	    	echo "<h2>Error</h2><pre>" . $error . "</pre>";
   	    }
   	    else {
   	    	echo "<h1>LIBROS<h1><pre>";
   	    	echo $result;
   	    	echo "</pre>";
   	    }
   }
?>