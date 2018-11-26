<?php
/**
 * Created by PhpStorm.
 * User: Tobias Hojka
 * Date: 26.11.2018
 * Time: 13:08
 */

//Verbindungsaufbau
$con = mysqli_connect("localhost", "Nutzername", "Passwort", "Datenbank");
//Test, ob Verbindung aufgebaut wurde
if (!$con) {
    echo "Verbindung fehlgeschlagen!";
    exit;
}

else {
    echo "Verbindung erfolgreich aufgebaut";
}

