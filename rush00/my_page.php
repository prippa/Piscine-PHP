<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" charset="utf-8"/>
    <title>Admin Page</title>
</head>
<body>
    <div id="header">
        <a href="index.php" id="logo"></a>      
        <div id="call">Online Shop</div>         
    </div>
    <div class="op">
        <h2>Delete_usr</h2>
        <form action="delusr.php" method="POST">
            <input placeholder="Username" type="text" name="login" value="" />
            <br />
            <input type="submit" name="submit" value="OK"/>
        </form>
        <h2>Change_usr_status</h2>
        <form action="status_change_usr.php" method="POST">
            <input placeholder="Username" type="text" name="login" value="" />
            <br />
            'Up' to promote, 'Down' to demote:
            <input placeholder="act" type="text" name="act" value="" />
            <input placeholder="newlogin" type="text" name="newlogin" value="" />
            <br />
            <input placeholder="money" type="text" name="money" value="" />
            <br />
            <input placeholder="passwd" type="text" name="passwd" value="" />
            <br />
            <input type="submit" name="submit" value="OK"/>
        </form>
        <h2>ADD_MONEY</h2>
        <form action="add_money.php" method="POST">
            <input placeholder="Money)" type="text" name="amm" value="" />
            <br />
            <input type="submit" name="submit" value="OK"/>
        </form>
         <h2>ADD_USR</h2>
         <form action="create_usr+.php" method="GET">
            <input placeholder="login" type="text" name="login" value="" />
            <br />
            <input placeholder="is_adm" type="text" name="is_adm" value="" />
            <br />
            <input placeholder="money" type="text" name="money" value="" />
            <br />
            <input placeholder="passwd" type="text" name="passwd" value="" />
            <br />
            <input type="submit" name="submit" value="OK"/>
        </form>
        <h2>ADD_PRODUCT</h2>
         <form action="pr_add.php" method="GET">
            <input placeholder="id" type="text" name="id" value="" />
            <br />
            <input placeholder="name" type="text" name="name" value="" />
            <br />
            <input placeholder="cat" type="text" name="cat" value="" />
            <br />
            <input placeholder="price" type="text" name="price" value="" />
            <br />
            <input placeholder="url" type="text" name="url" value="" />
            <br />
            <input type="submit" name="submit" value="OK"/>
        </form>
        <h2>MOD_PRODUCT</h2>
        <h2>id_mandatory</h2>
        <form action="pr_mod.php" method="GET">
            <input placeholder="id" type="text" name="id" value="" />
            <br />
            <input placeholder="name" type="text" name="name" value="" />
            <br />
            <input placeholder="cat" type="text" name="cat" value="" />
            <br />
            <input placeholder="price" type="text" name="price" value="" />
            <br />
            <input placeholder="url" type="text" name="url" value="" />
            <br />
            <input type="submit" name="submit" value="OK"/>
        </form>
        <h2>Del_PRODUCT</h2>
        <h2>id_mandatory</h2>
        <form action="pr_del.php" method="GET">
            <input placeholder="id" type="text" name="id" value="" />
            <br />
            <input type="submit" name="submit" value="OK"/>
        </form>
        <h2>Orders</h2>
        <form action="orderv.php" method="GET">
            <input type="submit" name="submit" value="ORDER"/>
        </form>
        <h2>USR_LIST</h2>
        <form action="print_usr.php" method="GET">
            <input type="submit" name="submit" value="LIST"/>
        </form>
    </div>
</body>
</html>