<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Pizza Calculator - PHP</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_blue.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta name="keywords" content="ics2o, kaidyn-doshi, viridianknight7">
    <meta name="author" content="Kaidyn Doshi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	body {
		background-color: #f1f1f1;
		font-family: "Roboto", sans-serif;
		padding: 20px;
	}

	.mdl-layout__content {
		display: flex;
		height: 100vh;
	}

	.mdl-layout__header {
		background-color: #009688;
		padding: 10px;
	}

	.mdl-layout__header-row {
		display: flex;
		align-items: center;
	}

	h1 {
		font-size: 36px;
		margin-bottom: 20px;
	}

	.mdl-textfield {
		margin-bottom: 20px;
	}

	#result-card {
		background-color: #f5f5f5;
		padding: 20px;
	}

	#result p {
		font-size: 20px;
		margin-bottom: 5px;
        font-family: "Verdana", sans-serif;
	}

	#result span {
		font-size: 24px;
        font-family: "Verdana", sans-serif;
	}
</style>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <img src="https://cdn-icons-png.flaticon.com/512/3067/3067765.png" alt="Pizza Calculator" style="width: 100%; max-width:75px;">
                <p><p><p><p><span class="mdl-layout-title">Pizza Calculator - PHP</span></p></p></p></p>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                    <form method="POST">
                        <h3 class="mdl-card__title-text">Size</h2>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="size-L">
                            <input type="radio" id="size-L" class="mdl-radio__button" name="size" value="L" checked>
                            <span class="mdl-radio__label">Large ($6.00)</span>
                        </label>
                        <br>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="size-XL">
                            <input type="radio" id="size-XL" class="mdl-radio__button" name="size" value="XL">
                            <span class="mdl-radio__label">Extra Large ($10.00)</span>
                        </label>
                        </div>
                        <h3 class="mdl-card__title-text">Toppings</h2>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="toppings-1">
                            <input type="radio" id="toppings-1" class="mdl-radio__button" name="toppings" value="1" checked>
                            <span class="mdl-radio__label">Pepperoni ($1.00)</span>
                        </label>
                        <br>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="toppings-2">
                            <input type="radio" id="toppings-2" class="mdl-radio__button" name="toppings" value="2">
                            <span class="mdl-radio__label">Vegetable ($1.75)</span>
                        </label>
                        <br>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="toppings-3">
                            <input type="radio" id="toppings-3" class="mdl-radio__button" name="toppings" value="3">
                            <span class="mdl-radio__label">Hawaiian ($2.50)</span>
                        </label>
                        <br>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="toppings-4">
                            <input type="radio" id="toppings-4" class="mdl-radio__button" name="toppings" value="4">
                            <span class="mdl-radio__label">Meat Lovers ($3.35)</span>
                        </label>
                        </div>
                        <br><br>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">Calculate</button>
                    </form>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                    <div class="mdl-card mdl-shadow--2dp" style="width: 320px;">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Your Order:</h2>
                        </div>
                <div class="mdl-card__supporting-text" id="result">
                <?php
                    $subtotal = 0;
                    $tax = 0;
                    $total = 0;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $pizza_prices = array(
                            "L" => 6.00,
                            "XL" => 10.00
                        );

                        $topping_prices = array(
                            1 => 1.00,
                            2 => 1.75,
                            3 => 2.50,
                            4 => 3.35
                        );

                        $size = $_POST['size'];
                        $toppings = $_POST['toppings'];

                        $subtotal = $pizza_prices[$size] + $topping_prices[$toppings];
                        $tax = $subtotal * 0.07;
                        $total = $subtotal + $tax;
                    }

                    echo "<p>Subtotal: <span>$" . number_format($subtotal, 2) . "</span></p>";
                    echo "<p>Tax: <span>$" . number_format($tax, 2) . "</span></p>";
                    echo "<p>Total: <span>$" . number_format($total, 2) . "</span></p>";
                ?>
</body>
</html>
