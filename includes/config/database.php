
<?php

function conectarBD() : mysqli {
    $db = new mysqli('10.0.0.5', 'lia', '123', 'appcbdsolutions'); // la forma orientada a objetos

    if (!$db) {
        echo "Error no se pudo conectar";
    }

    return $db;
} 

?>
