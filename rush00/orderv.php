<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" charset="utf-8"/>
    <title>Order View</title>
</head>
<body>
    <div id="header">
        <a href="index.php" id="logo"></a>
        <div id="call">Online Shop</div>
    </div>
    <h2>Order View</h2>
    <?php
    session_start();
    if ($_SESSION['is_adm'] == 'true'){
        if (!file_exists('private/basket_log')) {
            file_put_contents('private/basket_log', null);
        }
        $arr  = unserialize(file_get_contents("private/basket_log"));
        foreach ($arr as $ll) {
            $tmp = 0;
            echo '<div id="rightblock-basket">';
            echo '<p class="user-text" style="text-align: center; font-size: 24px; margin: 30px;">' . $ll['login'] . '</p>';
            $i = 0;
            for (; $i < count($ll) - 1; $i++){
                echo "<div class='product'>";
                echo '<a href="#" class="product-title">' . $ll[$i]["name"] . '</a>';
                echo '<a href="#"><img src='. $ll[$i]['url'] . ' alt=""></a>';
                echo '<div class="price">Price: '. $ll[$i]["price"] . '$</div>';
                echo '</div>';
                $tmp += $ll[$i]["price"] * $ll[$i]["quantity"];
            }
            echo '</div>';
            if ($i > 5) {
                echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
            }
            echo '<p style="text-align: center; font-size: 30px;">Price: ' . $tmp . '$</p>';
            echo '<hr style="clear: both">';
        }
    }
    ?>
</body>
</html>
