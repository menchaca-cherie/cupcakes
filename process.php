

<?php
/*
Keny Dutton-Gillespie + Cherie Menchaca
April 10, 2022
http://menchaca.cherie.greenriverdev.com/328/cupcakes/process.php
This program allows you to order from a selection of cupcakes and will print
out an order summary with a total.

*/
error_reporting(0);

// Move form data into variables
$name = $_POST['name'];
$flavors = implode(", ", $_POST['flavor']);

// Construct pricing for cupcakes

define("CUPCAKE_PRICE", 3.50);
$price = 0.0;
$numCupcakes = sizeof($_POST['flavor']);
$price = $numCupcakes * CUPCAKE_PRICE;
$price = number_format($price, 2);


//initialize variables
$name = "";
$flavors = "";

$isValid = true;

// Validate that a name has been input
if (empty($_POST['name'])) {
    echo "<p>Please enter your name, so we don't give your cupcakes to someone else!</p>";
    $isValid = false;
} else {
    $name = $_POST ['name'];
}

// Validate that at least one flavor has been selected
if (!isset($_POST['flavor'])) {
    echo "<p>Uh oh, you forgot to choose a flavor. Try again!</p>";
    // Data is valid
} else {
    $flavors = implode(" ", $_POST['flavor']);
}

if (!$isValid) {
    return;
}

// Output to page
thanks($name);

echo '<h3>Order Summary:</h3>';
foreach ($_POST['flavor'] as $flavors) {
    echo "<li>$flavors</li>";
}
echo "<p>Order total: $$price</p>";

function thanks($name = "")
{
    $msg = "<h1>Thank you, ";
    if ($name != "") {
        $msg .= "$name,";
    }
    $msg .= " for your order!</h>";
    echo $msg;
}
