<?php 
<<<<<<< HEAD
$tireqty = (int) $_POST['tireqty'];
$oilqty = (int) $_POST['oilqty'];
$sparkqty = (int) $_POST['sparkqty'];
$find = $_POST['find'];
=======
    // create short variable names and 
    // retrived submitted values from form fields (orderform.html)
      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];
>>>>>>> e756624a420bc1a40b991c2dcd619408b400ac7b
?>

<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bob's Auto Parts - Order Results</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <div class="card shadow-sm">
    <div class="card-body">

      <h1 class="text-center text-primary fw-bold mb-4">Bob's Auto Parts</h1>
      <h3 class="text-center mb-4">Order Results</h3>

      <p class="text-muted text-center">
        Order processed at <strong><?php echo date('H:i, jS F Y'); ?></strong>
      </p>

      <?php
        $totalqty = $tireqty + $oilqty + $sparkqty;
        if ($totalqty == 0) {
          echo '<div class="alert alert-warning text-center">You did not order anything on the previous page!</div>';
          exit;
        }

=======
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
>>>>>>> e756624a420bc1a40b991c2dcd619408b400ac7b
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

<<<<<<< HEAD
        $totalamount = ($tireqty * TIREPRICE) + ($oilqty * OILPRICE) + ($sparkqty * SPARKPRICE);
        $subtotal = $totalamount;
        $taxrate = 0.10;
        $totalamount = $subtotal * (1 + $taxrate);
      ?>

      <div class="table-responsive mt-4">
        <table class="table table-bordered align-middle">
          <thead class="table-primary">
            <tr>
              <th>Item</th>
              <th>Quantity</th>
              <th>Unit Price ($)</th>
              <th>Total ($)</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($tireqty > 0): ?>
              <tr><td>Tires</td><td><?= $tireqty ?></td><td><?= TIREPRICE ?></td><td><?= number_format($tireqty * TIREPRICE, 2) ?></td></tr>
            <?php endif; ?>
            <?php if ($oilqty > 0): ?>
              <tr><td>Oil</td><td><?= $oilqty ?></td><td><?= OILPRICE ?></td><td><?= number_format($oilqty * OILPRICE, 2) ?></td></tr>
            <?php endif; ?>
            <?php if ($sparkqty > 0): ?>
              <tr><td>Spark Plugs</td><td><?= $sparkqty ?></td><td><?= SPARKPRICE ?></td><td><?= number_format($sparkqty * SPARKPRICE, 2) ?></td></tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <div class="text-end">
        <p><strong>Subtotal:</strong> $<?= number_format($subtotal, 2) ?></p>
        <p><strong>Total (incl. 10% tax):</strong> $<?= number_format($totalamount, 2) ?></p>
      </div>

      <?php
        // Customer source
        echo '<div class="alert alert-info mt-4">';
        switch($find) {
          case 'a': echo "Regular customer."; break;
          case 'b': echo "Customer referred by TV advert."; break;
          case 'c': echo "Customer referred by phone directory."; break;
          case 'd': echo "Customer referred by word of mouth."; break;
          default: echo "We do not know how this customer found us."; break;
        }
        echo '</div>';
      ?>

      <h4 class="mt-4 text-primary">Discounts</h4>
      <?php
        if ($tireqty <= 9) {
          echo '<p>No Discount</p>';
        } elseif ($tireqty >= 10 && $tireqty <= 49) {
          $discount = $totalamount * 0.05;
          $totalamount -= $discount;
          echo "<div class='alert alert-success'>You received a 5% discount!<br>Total after discount: $" . number_format($totalamount, 2) . "</div>";
        } elseif ($tireqty >= 50 && $tireqty <= 99) {
          $discount = $totalamount * 0.10;
          $totalamount -= $discount;
          echo "<div class='alert alert-success'>You received a 10% discount!<br>Total after discount: $" . number_format($totalamount, 2) . "</div>";
        } elseif ($tireqty >= 100) {
          $discount = $totalamount * 0.15;
          $totalamount -= $discount;
          echo "<div class='alert alert-success'>You received a 15% discount!<br>Total after discount: $" . number_format($totalamount, 2) . "</div>";
        }
      ?>

      <div class="text-center mt-5">
        <a href="orderform.html" class="btn btn-outline-primary px-4">← Back to Order Form</a>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
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
>>>>>>> e756624a420bc1a40b991c2dcd619408b400ac7b
