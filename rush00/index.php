<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" charset="utf-8"/>
	<title>::42 Online Shop::</title>
</head>
<body>
	<div id="header">

		<a href="index.php" id="logo"></a>
		
		<div id="call">Online Shop</div>

		<div id="top-menu">
			<a href="login.html">Login</a>
			<div class="top-menu-line"></div>
			<a href="create.html">Register</a>
			<div class="top-menu-line"></div>
			<a href="#">Basket</a>
			<div class="top-menu-line"></div>
			<a href="my_page.html">Admin Page</a>
		</div>			
	</div>

	<div id="content">
		<div id="leftblock">
			<div class="cat-title"><a href="#">All goods</a></div>
		</div>
		<div id="leftblock">
			<div class="cat-title"><a href="#">Caps</a></div>
		</div>
		<div id="leftblock">
			<div class="cat-title"><a href="#">Pants</a></div>
		</div>
		<div id="leftblock">
			<div class="cat-title"><a href="#">T-Shirts</a></div>
		</div>
	</div>
	<div id="rightblock">
		<?php
			$arr  = unserialize(file_get_contents("private/goods"));

			foreach ($arr as $key => $value) {
				echo "<div class='product'>";
				echo	'<a href="#" class="product-title">' . $value["name"] . '</a>';
				echo	'<a href="#"><img src='. $value['url'] . ' alt=""></a>';
				echo	'<div class="price">Price: '. $value["price"] . '$</div>';
				echo	'<a href="#" class="to-cart">Add to cart</a>';
				echo '</div>';
			}
		?>
	</div>
</body>
</html>
