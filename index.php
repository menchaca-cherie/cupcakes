<?php

// Initialize variables
$name = "";

function getFlavors()
{
    $flavor = array('grasshopper', 'whiskey_maple_bacon','carrot_walnut','salted_caramel_cupcake', 'red_velvet', 'lemon_drop', 'tiramisu');
    return $flavor;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>

<form id="cupcake-form" action="process.php" method="post">
    <fieldset class="form-group">
        <legend>Your name:</legend>
        <div class="form-group">
            <input type="text" name="name" value="<?php echo $name ?>" class="form-control" placeholder="Please input your name."
                   id="name">
        </div>
    </fieldset>

    <fieldset class="form-group form-row col-6">
        <legend class>Cupcake Flavors</legend>
        <div class="form-group form-check">
            <label class="form-check-label form-label">


                <?php

                $toppings = getToppings();
                foreach($toppings as $topping){
                    echo "
                    <input type='checkbox' class='form-check-input' 
                    value='$flavor' name='flavors[]'>".ucfirst($topping).
                        "</label>
            </div>";
                }
                ?>
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
            </label>
        </div>
        <div>
            <input type="submit" value="Order">

        </div>
    </fieldset>
</form>
</body>
</html>
