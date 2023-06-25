<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $validUsername = 'test';
    $validPassword = 'test';

    if ($username === $validUsername && $password === $validPassword) {
		header('Location: ProjektJPO23.exe');
        echo $output;
        exit;
    } else {
        header('Location: index.php?error=1');
        exit;
    }
}
?>
