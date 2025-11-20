<?php 
    // create short variable names and 
    // retrived submitted values from form fields (orderform.html)
      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joe's Comission Calculator - Result</title>
    <style>
        body{font-family:sans-serif; }
        td{padding:5px;}
    </style>
</head>
<body>
    <h1>
        Bob's Auto Parts 
    </h1>
    <h2>
        Order Results
    </h2>

    <?php
        echo "<p>Order processed at ";
        echo date('H:i, jS F Y');
        echo "</p>";

       echo '<p>Your order is as follows: </p>';
       //remove any unwanted characters and
       //Convert special characters to HTML entities
        echo htmlspecialchars($tireqty).' tires<br />';
        echo htmlspecialchars($oilqty).' bottles of oil<br />';
        echo htmlspecialchars($sparkqty).' spark plugs<br />';

        $totalqty = 0;
        //get the sum of the total items ordered
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "<p>Items ordered: ".$totalqty."<br />";
        $totalamount = 0.00;

        //Define constant variable for the product price
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

        //Calculate the total amount per item
        $totalamount = $tireqty * TIREPRICE
                        + $oilqty * OILPRICE
                        + $sparkqty * SPARKPRICE;

        //Display the result with 2 decimal number format
        echo "Subtotal: $".number_format($totalamount,2)."<br />";

        $taxrate = 0.10; // local sales tax is 10%
        //Compute the tax and display the customer's bill
        $totalamount = $totalamount * (1 + $taxrate);
        echo "Total including tax: $".number_format($totalamount,2)."</p>";
    </body>
</html>