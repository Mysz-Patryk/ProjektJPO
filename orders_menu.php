<!DOCTYPE html>
<html>
<head>
    <title>Menu zamówień</title>
    <style>
        body {
            background-image: url(istockphoto-1333544762-1024x1024.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
			background-color: grey;
        }
		
		h1 {
            text-align: center;
            margin-top: 0;
        }

        #menu-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .menu-section {
            margin-bottom: 20px;
            text-align: center;
        }

        .menu-section-title {
            cursor: pointer;
            font-weight: bold;
            color: #007bff;
        }

        .menu-item {
            margin-left: 20px;
            display: none;
            text-align: left;
        }
		
		.menu-item li {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .selected {
            background-color: rgba(0, 123, 255, 0.2);
        }

        #checkout {
            text-align: right;
            padding: 10px 0;
        }

        #checkout button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #checkout button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function toggleMenu(sectionId) {
            var section = document.getElementById(sectionId);
            var display = section.style.display;
            if (display === 'none') {
                section.style.display = 'block';
            } else {
                section.style.display = 'none';
            }
        }

        function toggleSelection(item) {
            item.classList.toggle('selected');
            updateTotalPrice();
        }

        function updateTotalPrice() {
            var selectedItems = document.getElementsByClassName('selected');
            var totalPrice = 0;
            for (var i = 0; i < selectedItems.length; i++) {
                var price = parseFloat(selectedItems[i].getAttribute('data-price'));
                totalPrice += price;
            }
            document.getElementById('total-price').textContent = totalPrice.toFixed(2);
        }
		
		function createPendingFile() {
            var selectedItems = document.getElementsByClassName('selected');
            var orderDetails = '';

            for (var i = 0; i < selectedItems.length; i++) {
            var itemName = selectedItems[i].getElementsByTagName('span')[0].textContent;
            var itemPrice = parseFloat(selectedItems[i].getAttribute('data-price'));
            orderDetails += (i + 1) + '. ' + itemName + ', ' + itemPrice.toFixed(2) + ' PLN\n';
        }

        // Wysłanie danych zamówienia do skryptu PHP na serwerze
    fetch('save_order.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'orderDetails=' + encodeURIComponent(orderDetails)
    })
    .then(function(response) {
        if (response.ok) {
            return response.text();
        } else {
            throw new Error('Wystąpił błąd podczas zapisywania zamówienia.');
        }
    })
    .then(function(responseText) {
        alert(responseText); // Wyświetlenie komunikatu zwrotnego z serwera
        window.location.href = 'client_data_order.php'; // Przekierowanie na stronę client_data_order.php
    })
    .catch(function(error) {
        console.error(error);
    });
    }
    </script>
</head>
<body>
    <h1>Menu zamówień</h1>

    <div id="menu">
        <div class="menu-section">
            <h2 class="menu-section-title" onclick="toggleMenu('appetizers')">Przystawki</h2>
            <div id="appetizers" class="menu-item">
                <ul>
                    <li onclick="toggleSelection(this)" data-price="12">
                        <span>Edamame</span>
                        <span>12.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="15">
                        <span>Gyoza</span>
                        <span>15.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="18">
                        <span>Sashimi</span>
                        <span>18.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="16">
                        <span>Tempura</span>
                        <span>16.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="14">
                        <span>Age Tofu</span>
                        <span>14.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="17">
                        <span>Yakitori</span>
                        <span>17.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="19">
                        <span>Karaage</span>
                        <span>19.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="13">
                        <span>Takoyaki</span>
                        <span>13.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="15">
                        <span>Agedashi Tofu</span>
                        <span>15.00 PLN</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="menu-section">
            <h2 class="menu-section-title" onclick="toggleMenu('soups')">Zupy</h2>
            <div id="soups" class="menu-item">
                <ul>
                    <li onclick="toggleSelection(this)" data-price="10">
                        <span>Miso-shiru</span>
                        <span>10.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="12">
                        <span>Chūkadon</span>
                        <span>12.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="14">
                        <span>Ramen</span>
                        <span>14.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="11">
                        <span>Tonjiru</span>
                        <span>11.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="13">
                        <span>Zupa miso z krewetkami</span>
                        <span>13.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="15">
                        <span>Zupa kimchi</span>
                        <span>15.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="16">
                        <span>Zupa ramen z wieprzowiną</span>
                        <span>16.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="13">
                        <span>Soba</span>
                        <span>13.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="14">
                        <span>Udon</span>
                        <span>14.00 PLN</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="menu-section">
            <h2 class="menu-section-title" onclick="toggleMenu('maki')">Maki Sushi</h2>
            <div id="maki" class="menu-item">
                <ul>
                    <li onclick="toggleSelection(this)" data-price="16">
                        <span>California Roll</span>
                        <span>16.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="18">
                        <span>Spicy Tuna Roll</span>
                        <span>18.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="20">
                        <span>Dragon Roll</span>
                        <span>20.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="22">
                        <span>Rainbow Roll</span>
                        <span>22.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="17">
                        <span>Tempura Roll</span>
                        <span>17.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="19">
                        <span>Spider Roll</span>
                        <span>19.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="21">
                        <span>Caterpillar Roll</span>
                        <span>21.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="23">
                        <span>Volcano Roll</span>
                        <span>23.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="18">
                        <span>Philadelphia Roll</span>
                        <span>18.00 PLN</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="menu-section">
            <h2 class="menu-section-title" onclick="toggleMenu('nigiri')">Nigiri Sushi</h2>
            <div id="nigiri" class="menu-item">
                <ul>
                    <li onclick="toggleSelection(this)" data-price="15">
                        <span>Sake Nigiri</span>
                        <span>15.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="17">
                        <span>Maguro Nigiri</span>
                        <span>17.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="19">
                        <span>Ebi Nigiri</span>
                        <span>19.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="21">
                        <span>Unagi Nigiri</span>
                        <span>21.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="16">
                        <span>Tamago Nigiri</span>
                        <span>16.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="18">
                        <span>Hokkigai Nigiri</span>
                        <span>18.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="20">
                        <span>Tako Nigiri</span>
                        <span>20.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="22">
                        <span>Ika Nigiri</span>
                        <span>22.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="17">
                        <span>Tobiko Nigiri</span>
                        <span>17.00 PLN</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="menu-section">
            <h2 class="menu-section-title" onclick="toggleMenu('desserts')">Desery</h2>
            <div id="desserts" class="menu-item">
                <ul>
                    <li onclick="toggleSelection(this)" data-price="10">
                        <span>Mochi</span>
                        <span>10.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="12">
                        <span>Dorayaki</span>
                        <span>12.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="14">
                        <span>Anmitsu</span>
                        <span>14.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="11">
                        <span>Kakigōri</span>
                        <span>11.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="13">
                        <span>Matcha Ice Cream</span>
                        <span>13.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="15">
                        <span>Dango</span>
                        <span>15.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="16">
                        <span>Castella</span>
                        <span>16.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="13">
                        <span>Taiyaki</span>
                        <span>13.00 PLN</span>
                    </li>
                    <li onclick="toggleSelection(this)" data-price="14">
                        <span>Wagashi</span>
                        <span>14.00 PLN</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="checkout">
        <span>Suma: <span id="total-price">0.00</span> PLN</span>
        <button onclick="createPendingFile()">Do kasy</button>
    </div>
</body>
</html>
