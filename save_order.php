<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderDetails = $_POST['orderDetails'];

    // Ścieżka do pliku "Pending.txt" na serwerze
    $filePath = 'Pending.txt';

    // Dopisanie zamówienia do pliku
    file_put_contents($filePath, $orderDetails . PHP_EOL, FILE_APPEND);

    // Zwrócenie odpowiedzi do przeglądarki
    echo 'Zamówienie zostało zapisane.';
}
?>