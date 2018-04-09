<?php
	require_once('install.php');
	if (!file_exists("private/goods") || !file_exists("private/passwd")) {
		install();
	}
	session_start();
	if(!$_SESSION['loggued_user']){
		$_SESSION['is_adm'] = 'false'; 
	}
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
			<?php
				if ($_SESSION['loggued_user']) {
				$acc  = unserialize(file_get_contents("private/passwd"));
				foreach ($acc as $key => $value) {
					if ($_SESSION['loggued_user'] == $value['login']){
						echo '<p class="user-text">' . $value['login'] . '</p>';

						echo '<p class="user-text">' . $value['money'] . '$</p>';
						break ; 
					}
				}
					echo '<a href="logout.php">Logout</a>';
					echo '<div class="top-menu-line"></div>';
				}
				else {
					echo '<a href="login.php">Login</a>';
					echo '<div class="top-menu-line"></div>';

					echo '<a href="create.php">Register</a>';
					echo '<div class="top-menu-line"></div>';
				}
			?>
			<a href="basket.php">Basket</a>
			<div class="top-menu-line"></div>
			<a href="my_page.php">Admin Page</a>
		</div>
	</div>
	<div id="content">
		<div id="leftblock">
			<div class="cat-title"><a href="index.php">All goods</a></div>
		</div>
		<div id="leftblock">
			<div class="cat-title"><a href="index.php?name=cap">Caps</a></div>
		</div>
		<div id="leftblock">
			<div class="cat-title"><a href="index.php?name=pants">Pants</a></div>
		</div>
		<div id="leftblock">
			<div class="cat-title"><a href="index.php?name=t_shirt">T-Shirts</a></div>
		</div>
	</div>
	<div id="rightblock">
		<?php
		$arr  = unserialize(file_get_contents("private/goods"));
	
		if (isset($_GET['name']) === false) {
			foreach ($arr as $key => $value) {
				echo "<div class='product'>";
				echo	'<a href="#" class="product-title">' . $value["name"] . '</a>';
				echo	'<a href="#"><img src='. $value['url'] . ' alt=""></a>';
				echo	'<div class="price">Price: '. $value["price"] . '$</div>';
				echo	'<a href="basket_add.php?id=' . $value["id"] . '" class="to-cart">Add to cart</a>';
				echo '</div>';
			}
		 } else {
				foreach ($arr as $key => $value) {
				$all = array_diff(explode(':', $value['cat']), array(''));
					foreach ($all as $va) {
					if ($_GET['name'] == $va) {
						echo "<div class='product'>";
						echo	'<a href="#" class="product-title">' . $value["name"] . '</a>';
						echo	'<a href="#"><img src='. $value['url'] . ' alt=""></a>';
						echo	'<div class="price">Price: '. $value["price"] . '$</div>';
						echo	'<a href="basket_add.php?id=' . $value["id"] . '" class="to-cart">Add to cart</a>';
						echo '</div>';
					}
				}
			}
		}
		?>
	</div>
	<?php
        if ($_GET['message'] == 'add') {
            echo '<script> alert("Addet to Cart!"); </script>';
        }
        else if ($_GET['message'] == 'no-money') {
        	echo '<script> alert("NO!"); </script>';
        }
        else if ($_GET['message'] == 'buy-ok') {
        	echo '<script> alert("Buy was successful."); </script>';
        }
    ?>
</body>
</html>
