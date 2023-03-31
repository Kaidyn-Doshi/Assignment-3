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

        echo "<p>Subtotal: <span>$" . number_format($subtotal, 2) . "</span></p>";
        echo "<p>Tax: <span>$" . number_format($tax, 2) . "</span></p>";
        echo "<p>Total: <span>$" . number_format($total, 2) . "</span></p>";
    }
?>
