<?php
$items = array(
    "instantnoodle" => 3000,
    "soap" => 3500,
    "shampoo" => 1000,
    "sandals" => 11000,
    "bread" => 12000,
    "notebook" => 5500,
    "milk" => 6000,
    "cookingoil" => 13000,
    "icecream" => 11000,
    "battery" => 16000
);
?>

<!DOCTYPE html>
<html>
    <?php include('header.php'); ?>
<head>
	<title>Transaction</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Transaction</h1>
	<form action="history.php" method="post">
		<label>Transaction ID Code:</label><br>
		<input type="text" name="transaction_id" required><br><br>

		<label>Transaction Date:</label><br>
		<input type="text" name="transaction_date" value="<?php echo date('d-m-Y'); ?>" readonly><br><br>

		<label>Customer:</label><br>
		<select name="customer" required>
			<option value="" disabled selected>Select customer</option>
			<option value="alpha">&#945;</option>
			<option value="beta">&#946;</option>
			<option value="gamma">&#947;</option>
			<option value="delta">&#948;</option>
			<option value="epsilon">&#949;</option>
		</select><br><br>

		<label>Item 1:</label><br>
		<select name="item1" required>
			<option value="" disabled selected>Select item</option>
			<?php
				foreach ($items as $key => $value) {
					echo "<option value=\"$key\">$key</option>";
				}
			?>
		</select>
		<input type="number" name="qty1" min="1" required><br><br>

		<label>Item 2:</label><br>
		<select name="item2" required>
			<option value="" disabled selected>Select item</option>
			<?php
				foreach ($items as $key => $value) {
					echo "<option value=\"$key\">$key</option>";
				}
			?>
		</select>
		<input type="number" name="qty2" min="1" required><br><br>

		<label>Item 3:</label><br>
		<select name="item3" required>
			<option value="" disabled selected>Select item</option>
			<?php
				foreach ($items as $key => $value) {
					echo "<option value=\"$key\">$key</option>";
				}
			?>
		</select>
		<input type="number" name="qty3" min="1" required><br><br>

		<label>Member Card:</label><br>
		<input type="radio" name="member_card" value="yes" required>Yes
		<input type="radio" name="member_card" value="no">No<br><br>

		<label>Payment:</label><br>
		<input type="number" name="payment" required><br><br>

		<input type="submit" value="Submit">
		<a href="home.php"><button type="button">Cancel</button></a>
	</form>
    <?php
    $subtotal = 0;

    $transactionid = $_POST['transaction_id'];
    $transactiondate = $_POST['transaction_date'];
    $customer_ = $_POST['customer'];
    $membercard = $_POST['member_card'];
    $payment_ = $_POST['payment'];

    $total_price = 0;
    if ($membercard == 'yes') {
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'item') === 0 && !empty($value)) {
                $price = $items[$value];
                $qty = $_POST['qty' . substr($key, 4)];
                $total_price += $price * $qty;
            }
        }
        $total_price *= 0.95;
    } else {
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'item') === 0 && !empty($value)) {
                $price = $items[$value];
                $qty = $_POST['qty' . substr($key, 4)];
                $total_price += $price * $qty;
            }
        }
    }

    $subtotal = $total_price;
    $payment_change = $payment_ - $total_price;

    echo "<table>
            <tr>
                <th>Transaction ID Code</th>
                <td>$transactionid</td>
            </tr>
            <tr>
                <th>Transaction Date</th>
                <td>$transactiondate</td>
            </tr>
            <tr>
                <th>Customer</th>
                <td>$customer_</td>
            </tr>
            <tr>
                <th>Member Card</th>
                <td>$membercard</td>
            </tr>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>";
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'item') === 0 && !empty($value)) {
            $price = $items[$value];
            $qty = $_POST['qty' . substr($key, 4)];
            $total = $price * $qty;
            echo "<tr>
                    <td>$value</td>
                    <td>$qty</td>
                    <td>$price</td>
                    <td>$total</td>
                </tr>";
        }
    }
    echo "<tr>
            <th colspan='3'>Sub-total</th>
            <td>$subtotal</td>
        </tr>
        <tr>
            <th colspan='3'>Payment</th>
            <td>$payment_</td>
        </tr>
        <tr>
            <th colspan='3'>Payment Change</th>
            <td>$payment_change</td>
        </tr>
    </table>";
    include('footer.php'); ?>

</body
