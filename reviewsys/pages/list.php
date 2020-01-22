<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>レストラン一覧 - レストラン・レビュ・サイト</title>
<link rel="stylesheet" href="../assets/css/style.css" />
<link rel="stylesheet" href="../assets/css/list.css" />
</head>
<body id="list">
	<header>
		<h1>
			<a href="list.php">レストラン・レビュ・サイト</a>
		</h1>
	</header>
	<main>
		<div class="clearfix">
			<h2>レストラン一覧</h2>
			<form action="list_selected.php" name="search_form" method="get">
<?php
$area = [
    '-- 地域を選んで下さい --',
    '福岡',
    '神戸',
    '伊豆'
];
$listbox = "<select name=\"area\">\n";
for ($i = 0; $i < count($area); $i ++) {
    $listbox .= "\t<option value=\"{$area[$i]}\">{$area[$i]}</option>\n";
}
$listbox .= "</select>\n";
echo "{$listbox}";
?>
					<input type="submit" value="検索" />
			</form>
		</div>
<?php
$shop0 = array(
    'id' => 0,
    'area' => '地域',
    'photo_alt' => '"写真の説明"',
    'photo_src' => '"写真のパス"',
    'photo_title' => '写真のタイトル',
    'photo_desc' => '店の説明'
);
$shop1 = array(
    'id' => 1,
    'area' => '福岡',
    'photo_alt' => '"「Wine Bar ENOTECA」の写真"',
    'photo_src' => '"../pages/img/restaurant_1.jpg"',
    'photo_title' => 'Wine Bar ENOTECA',
    'photo_desc' => '常時10種類以上の赤・白ワインをご用意しています。<br />記念日にご来店ください。'
);
$shop2 = array(
    'id' => 2,
    'area' => '神戸',
    'photo_alt' => '" スペイン料理 ポルファボール！」の写真"',
    'photo_src' => '"../pages/img/restaurant_2.jpg"',
    'photo_title' => 'スペイン料理 ポルファボール！',
    'photo_desc' => '味が自慢。スペイン現地で学んだシェフが出す味は本物です。'
);
$shop3 = array(
    'id' => 3,
    'area' => '伊豆',
    'photo_alt' => '"「パス・パスタ」の写真"',
    'photo_src' => '"../pages/img/restaurant_3.jpg"',
    'photo_title' => 'パス・パスタ',
    'photo_desc' => '本当のパスタを味わうならパス・パスタで！<br />休日の優雅なランチタイムに是非どうぞ。'
);
$shop4 = array(
    'id' => 4,
    'area' => '神戸',
    'photo_alt' => '"「レストラン有閑」の写真"',
    'photo_src' => '"../pages/img/restaurant_4.jpg"',
    'photo_title' => 'レストラン「有閑」',
    'photo_desc' => '広い店内で、お昼の優雅なひと時を過ごしませんか？'
);
$shop5 = array(
    'id' => 5,
    'area' => '神戸',
    'photo_alt' => '"「ビストロ　ルーヴル」の写真"',
    'photo_src' => '"../pages/img/restaurant_5.jpg"',
    'photo_title' => 'ビストロ「ルーヴル」',
    'photo_desc' => '高層ビル42階のビストロで、県内が一望できる。恋人とのひと時をここで過ごしませんか。'
);
$shop6 = array(
    'id' => 6,
    'area' => '伊豆',
    'photo_alt' => '"「海沿いのレストラン La Mer」の写真"',
    'photo_src' => '"../pages/img/restaurant_6.jpg"',
    'photo_title' => '海沿いのレストラン La Mer',
    'photo_desc' => '海が見える、海沿いのレストランです。'
);
$shop7 = array(
    'id' => 7,
    'area' => '伊豆',
    'photo_alt' => '"「レストラン さくら」の写真"',
    'photo_src' => '"../pages/img/restaurant_7.jpg"',
    'photo_title' => 'レストラン さくら',
    'photo_desc' => '四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。<br>旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。'
);
// -----
$shop_no[] = shop0;
for ($num_shop = 1; $num_shop <= 7; $num_shop ++) {
    $shop_str = 'shop' . "{$num_shop}";
    $shop_no[] = $shop_str;
}

?>
		<table class="list">
<?php
foreach ($shop_no as $tt) {
    if ($tt != "shop0") {
        echo "<tr>
              <td class='photo'><img width='110' alt={${$tt}['photo_alt']}
				    src={${$tt}['photo_src']}/>
              </td> 
				<td class='info'>
				    <dl>
                    <dt>{${$tt}['photo_title']}</dt>
                    <dd>{${$tt}['photo_desc']} </dd>
                  </dl>
               </td>
               <td class='detail'><a href='detail.php?id={${$tt}['id']}'>詳細</a></td>
               </tr>";
    }
}
?>
    </table >
	</main>
	<footer>
		<div id="copyright">(C) 2019 The Web System Development Course</div>
	</footer>
</body>
</html>