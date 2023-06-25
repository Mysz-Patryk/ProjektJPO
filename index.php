<!DOCTYPE html>
<html>
<head>
    <title>Strona logowania</title>
    <style>
        body {
            background-color: green;
            background-image: url("istockphoto-643847438-1024x1024.jpg");
            background-repeat: repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: #228B22;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            color: #b9d8a1;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .login-form h1 {
            color: #b9d8a1;
            font-size: 24px; 
        }

        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            max-width: 250px;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .login-form input[type="submit"] {
            width: 100%;
            padding: 15px;
            border-radius: 3px;
            border: none;
            background-color: green;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .menu-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .left-menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #228B22;
            padding: 20px;
            border-radius: 5px;
            color: #b9d8a1;
            width: 100%;
            max-width: 250px;
            margin-bottom: 20px;
        }

        .left-menu a {
            color: #b9d8a1;
            text-decoration: none;
            margin-bottom: 10px;
            font-size: 24px; 
        }

        .left-menu a:hover {
            text-decoration: underline;
        }

        .left-menu h1 {
            color: #b9d8a1;
            margin-bottom: 20px;
            font-size: 24px; 
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <div class="left-menu">
            <a href="orders_menu.php" class="guest-order-button">Zamówienia dla gości</a>
        </div>
        <div class="login-form">
            <h1>Logowanie personelu</h1>
            <form action="login.php" method="post">
                <input type="text" name="username" placeholder="Nazwa użytkownika" required>
                <input type="password" name="password" placeholder="Hasło" required>
                <input type="submit" value="Zaloguj">
            </form>
        </div>
    </div>
</body>
</html>
