<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $contrasenya1 = $_POST["contrasenya1"];
        $contrasenya2 = $_POST["contrasenya2"];

        if ($contrasenya1 === $contrasenya2) {
            if (preg_match('/[0-9]/', $contrasenya1)) {
                echo "Contrasenya correcta.";
            } else {
                echo "ERROR: La contrasenya ha de tenir almenys un número.";
            }
        } else {
            echo "ERROR: Les contrasenyes han de coincidir.";
        }
    }
?>