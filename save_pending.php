<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$numer_telefonu = $_POST['numer_telefonu'];
$adres_email = $_POST['adres_email'];
$ulica_i_nr_domu = $_POST['ulica_i_nr_domu'];
$nr_mieszkania = $_POST['nr_mieszkania'];
$miasto = $_POST['miasto'];

if ($imie && $nazwisko && $numer_telefonu && $adres_email && $ulica_i_nr_domu && $miasto) {
    $data_klienta = "$imie $nazwisko,$numer_telefonu,$adres_email,$ulica_i_nr_domu,$nr_mieszkania,$miasto";

    $file = fopen("Pending.txt", "a");
    if ($file) {
        fwrite($file, $data_klienta . PHP_EOL);
        fclose($file);
    }
}

header("Location: Confirmed_order.php");
exit;
?>