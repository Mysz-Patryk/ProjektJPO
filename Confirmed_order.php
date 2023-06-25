<!DOCTYPE html>
<html>
<head>
    <title>Zamówienie potwierdzone</title>
    <style>
        body {
            background-color: green;
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
        }
        
        .order-summary {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background-color: white;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Zamówienie potwierdzone</h1>
    
    <div class="order-summary">
        <?php
        $file = fopen("Pending.txt", "r");
        $totalAmount = 0;

        if ($file) {
            while (($line = fgets($file)) !== false) {
                $parts = explode(", ", $line);
                if (count($parts) >= 2) {
                    $amount = floatval($parts[1]);
                    $totalAmount += $amount;
                }
            }

            fclose($file);

            echo "Suma zamówień: " . $totalAmount . " PLN";
        } else {
            echo "Błąd otwarcia pliku.";
        }
        ?>
    </div>

    <div class="order-summary">
        <?php
        $tipAmount = $totalAmount * 0.1;
        echo "Zachęcamy do zostawienia napiwku w wysokości 10%: " . $tipAmount . " PLN";
        ?>
    </div>

    <div class="order-summary">
    <?php
         if ($totalAmount <= 50) {
        $estimatedTime = "45 minut";
    } elseif ($totalAmount <= 90) {
        $estimatedTime = "55 minut";
    } elseif ($totalAmount <= 140) {
        $estimatedTime = "65 minut";
    } else {
        $estimatedTime = "90 minut.";
    }

    echo "Czas realizacji zamowienia: ".$estimatedTime;
    ?>
    </div>
</body>
</html>