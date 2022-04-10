<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//initialize variables
$name = "";
$flavor = "";


// Move form data into variables
$name = $_POST['name'];
$flavor = implode(", ", $_POST['flavor']);



define("CUPCAKE_PRICE", 3.50);

thanks($name);

echo '<h3>Order Summary</h3>';
echo "<li>$flavor</li>";


function thanks($name = "")
{
$msg = "<h1>Thank you, ";
    if ($name != ""){
    $msg .= " $name,";
    }
    $msg .= " for your order!</h>";
    echo $msg;
    }


?>
