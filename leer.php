<?php
// Valores y opción para la URL de origen
$remote_path = 'origen/'; // La ruta base en la que vamos a trabajar en el servidor remoto
$source_file_name = 'remote_test.docx'; // El nombre del archivo en el servidor remoto cuyo contenido queremos leer.
$url = 'https://litigantes.github.io/bio.txt'; // URL final del archivo en el servidor remoto.
curl_setopt($curl_handle, CURLOPT_URL, $url); // Establecemos la URL final para el archivo en el servidor remoto en cURL.
Ahora tenemos que establecer una opción de cURL que, hasta ahora, no habíamos empleado. Se trata de
?>
