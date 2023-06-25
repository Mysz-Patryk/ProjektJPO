<!DOCTYPE html>
<html>
<head>
    <title>Wprowadź swoje dane</title>
<style>
        body {
            background-color: green;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
        }

        .form-container {
            margin: 50px auto;
            width: 300px;
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: white;
            color: green;
            font-weight: bold;
            box-sizing: border-box;
        }
		
		.form-container button[type="submit"] {
            width: calc(100% + 3px); 
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Wprowadź swoje dane</h1>
    <div class="form-container">
        <form action="save_pending.php" method="post">
            <input type="text" name="imie" placeholder="Imię" required><br>
            <input type="text" name="nazwisko" placeholder="Nazwisko" required><br>
            <input type="tel" name="numer_telefonu" placeholder="Numer telefonu" required><br>
            <input type="email" name="adres_email" placeholder="Adres email" required><br>
            <input type="text" name="ulica_i_nr_domu" placeholder="Ulica i numer domu" required><br>
            <input type="text" name="nr_mieszkania" placeholder="Numer mieszkania"><br>
            <input type="text" name="miasto" placeholder="Miasto" required><br>
            <button type="submit">Potwierdź zamówienie</button>
        </form>
    </div>
    <a href="orders_menu.php">Edycja zamówienia</a>
</body>
</html>