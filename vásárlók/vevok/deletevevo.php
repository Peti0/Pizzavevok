<?php
$sql = '';
if (count($kereSzoveg) > 1) {
    if (is_int(intval($kereSzoveg[1]))) {
        $sql = 'DELETE FROM vevo WHERE vazon=' . $kereSzoveg[1];
    } else {
        http_response_code(404);
        echo 'Nem létező ügyfél';
    }
}
require_once './database.php';
$result = $connection->query($sql);
if ($result = $connection->query($sql)) {
    http_response_code(200);
    echo "Sikeres törlés";
}
else {
    http_response_code(404);
    echo 'Nem sikerült!';
}