<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" charset="utf-8"/>
	<title>Basket</title>
</head>
<body>
	<div id="header">
        <a href="index.php" id="logo"></a>      
        <div id="call">Online Shop</div>
    </div>
    <div id="rightblock-basket">
    	<h2>Basket</h2>
		<?php
			require_once('count_price.php');
			session_start();
			foreach ($_SESSION['basket'] as $key => $value) {
				echo "<div class='product'>";
				echo	'<a href="#" class="product-title">' . $value["name"] . '</a>';
				echo	'<a href="#"><img src='. $value['url'] . ' alt=""></a>';
				echo	'<div class="price">Price: '. $value["price"] . '$</div>';
				echo	'<form action="basket_add.php?id=' . $value["id"] .'" method="get">';
				echo 	'<a style="width: 50px; height: 35px; float: right;" href="basket_add+.php?id=' . $value["id"] . '" class="to-cart">+</a>';
				echo 	"</form>";
				echo	'<form action="basket_add.php?id=' . $value["id"] .'" method="get">';
				echo 	'<a style="width: 50px; height: 35px; float: left;" href="basket_rm.php?id=' . $value["id"] . '" class="to-cart">-</a>';
				echo 	"</form>";
				echo 	'<p class="user-text" style="text-align: center;">' . $value["quantity"] . '</p>';
				echo '</div>';
			}
			echo '</div>' . '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><p style="text-align: center; font-size: 30px;">Price: ' . count_price() . '$</p>';
		?>
	<div class="op">
		<form action="basket_serialize.php" method="get">
			<input type="submit" name="submit" value="OK"/>
		</form>
	</div>
</body>
</html>