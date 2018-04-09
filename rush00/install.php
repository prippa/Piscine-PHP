<?php
	function install () {
		$goods_path = "private/goods";
		$acc = array();

		$tmp['id'] = 1;
		$tmp['name'] = "Black Cap";
		$tmp['cat'] = "cap";
		$tmp['price'] = 3;
		$tmp['url'] = "img/cap_1.jpg";
		$acc[] = $tmp;

		$tmp['id'] = 2;
		$tmp['name'] = "Blue Cap";
		$tmp['cat'] = "cap";
		$tmp['price'] = 2;
		$tmp['url'] = "img/cap_2.jpg";
		$acc[] = $tmp;

		$tmp['id'] = 3;
		$tmp['name'] = "Adidas Pants";
		$tmp['cat'] = "pants";
		$tmp['price'] = 10;
		$tmp['url'] = "img/pants_1.jpg";
		$acc[] = $tmp;

		$tmp['id'] = 4;
		$tmp['name'] = "Nike Pants";
		$tmp['cat'] = "pants";
		$tmp['price'] = 10;
		$tmp['url'] = "img/pants_2.jpg";
		$acc[] = $tmp;

		$tmp['id'] = 5;
		$tmp['name'] = "Gray T-Shirt";
		$tmp['cat'] = "t_shirt";
		$tmp['price'] = 7;
		$tmp['url'] = "img/t_shirt_1.jpg";
		$acc[] = $tmp;

		$tmp['id'] = 6;
		$tmp['name'] = "Blue T-Shirt";
		$tmp['cat'] = "t_shirt";
		$tmp['price'] = 7;
		$tmp['url'] = "img/t_shirt_2.jpg";
		$acc[] = $tmp;

		$tmp['id'] = 7;
		$tmp['name'] = "Black T-Shirt";
		$tmp['cat'] = "t_shirt";
		$tmp['price'] = 5;
		$tmp['url'] = "img/t_shirt_3.jpg";
		$acc[] = $tmp;

		$tmp['id'] = 10;
		$tmp['name'] = "Gold Costume";
		$tmp['cat'] = "t_shirt:cap";
		$tmp['price'] = 999999999;
		$tmp['url'] = "img/ultra_good.jpg";
		$acc[] = $tmp;

		$usr1 = array();
		$usr['login'] = "root_1";
		$usr['is_adm'] = "true";
		$usr['money'] = 0;
		$usr['passwd'] = hash('whirlpool', 'zaq123');
		$usr1[] = $usr;


		if (!file_exists("private")) {
			mkdir("private");
		}

		file_put_contents($goods_path, serialize($acc));
		file_put_contents('private/passwd', serialize($usr1));
	}
?>