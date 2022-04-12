<?php
/*
Keny Dutton-Gillespie + Cherie Menchaca
April 10, 2022
http://menchaca.cherie.greenriverdev.com/328/cupcakes/process.php
This program allows you to order from a selection of cupcakes and will print
out an order summary with a total.

*/
// Initialize variables
$name = "";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>

<!-- Start of form -->
<form id="cupcake-form" action="process.php" method="post">

    <!--Name input -->
    <div>
        <div class="form-group">
            <h4>Your name:</h4>
            <input type="text" name="name" value="<?php echo $name ?>" class="form-control" placeholder="Please input your name."
                   id="name">
        </div>
        <br>

        <!-- Flavor selection -->
        <div>
            <h4>Cupcake Flavors</h4>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" name="flavor[]" id="grasshopper" value="Grasshopper">
                <label class="form-check-label" for="grasshopper">The Grasshopper</label>

                <input class="form-check-input" type="checkbox" name="flavor[]" id="whiskey_maple_bacon"
                       value="Whiskey Maple Bacon">
                <label class="form-check-label" for="whiskey_maple_bacon">Whiskey Maple Bacon</label>

                <input class="form-check-input" type="checkbox" name="flavor[]" id="carrot_walnut"
                       value="Carrot Walnut">
                <label class="form-check-label" for="carrot_walnut">Carrot Walnut</label>

                <input class="form-check-input" type="checkbox" name="flavor[]" id="salted_caramel"
                       value="Salted Caramel">
                <label class="form-check-label" for="salted_caramel">Salted Caramel Cupcake</label>

                <input class="form-check-input" type="checkbox" name="flavor[]" id="red_velvet" value="Red Velvet">
                <label class="form-check-label" for="red_velvet">Red Velvet</label>

                <input class="form-check-input" type="checkbox" name="flavor[]" id="lemon_drop" value="Lemon Drop">
                <label class="form-check-label" for="lemon_drop">Lemon Drop</label>

                <input class="form-check-input" type="checkbox" name="flavor[]" id="tiramisu" value="Tiramisu">
                <label class="form-check-label" for="tiramisu">Tiramisu</label>
            </div>
        </div>
        <br>
        <!-- Submit button -->
        <div>
            <input type="submit" value="Order">
        </div>
    </div>
</form>
</body>
</html>