<?php
    $apiKey = isset($_GET['apiKey']) ? $_GET['apiKey'] : null;
    
    if ($apiKey) {
        echo "apikey is given!! :)";
    } else {
        echo "no apikey :(";
    }
?>
