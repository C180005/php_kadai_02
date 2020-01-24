<?php 
class Restaurant {
    public $shop0 = array(
        'id' => 0,
        'area' => '地域',
        'photo_alt' => '"写真の説明"',
        'photo_src' => '"写真のパス"',
        'photo_title' => '写真のタイトル',
        'photo_desc' => '店の説明'
    );
    public $shop1 = array(
        'id' => 1,
        'area' => '福岡',
        'photo_alt' => '"「Wine Bar ENOTECA」の写真"',
        'photo_src' => '"../pages/img/restaurant_1.jpg"',
        'photo_title' => 'Wine Bar ENOTECA',
        'photo_desc' => '常時10種類以上の赤・白ワインをご用意しています。<br />記念日にご来店ください。'
    );
    public $shop2 = array(
        'id' => 2,
        'area' => '神戸',
        'photo_alt' => '" スペイン料理 ポルファボール！」の写真"',
        'photo_src' => '"../pages/img/restaurant_2.jpg"',
        'photo_title' => 'スペイン料理 ポルファボール！',
        'photo_desc' => '味が自慢。スペイン現地で学んだシェフが出す味は本物です。'
    );
    public $shop3 = array(
        'id' => 3,
        'area' => '伊豆',
        'photo_alt' => '"「パス・パスタ」の写真"',
        'photo_src' => '"../pages/img/restaurant_3.jpg"',
        'photo_title' => 'パス・パスタ',
        'photo_desc' => '本当のパスタを味わうならパス・パスタで！<br />休日の優雅なランチタイムに是非どうぞ。'
    );
    public $shop4 = array(
        'id' => 4,
        'area' => '神戸',
        'photo_alt' => '"「レストラン有閑」の写真"',
        'photo_src' => '"../pages/img/restaurant_4.jpg"',
        'photo_title' => 'レストラン「有閑」',
        'photo_desc' => '広い店内で、お昼の優雅なひと時を過ごしませんか？'
    );
    public $shop5 = array(
        'id' => 5,
        'area' => '神戸',
        'photo_alt' => '"「ビストロ　ルーヴル」の写真"',
        'photo_src' => '"../pages/img/restaurant_5.jpg"',
        'photo_title' => 'ビストロ「ルーヴル」',
        'photo_desc' => '高層ビル42階のビストロで、県内が一望できる。恋人とのひと時をここで過ごしませんか。'
    );
    public $shop6 = array(
        'id' => 6,
        'area' => '伊豆',
        'photo_alt' => '"「海沿いのレストラン La Mer」の写真"',
        'photo_src' => '"../pages/img/restaurant_6.jpg"',
        'photo_title' => '海沿いのレストラン La Mer',
        'photo_desc' => '海が見える、海沿いのレストランです。'
    );
    public $shop7 = array(
        'id' => 7,
        'area' => '伊豆',
        'photo_alt' => '"「レストラン さくら」の写真"',
        'photo_src' => '"../pages/img/restaurant_7.jpg"',
        'photo_title' => 'レストラン さくら',
        'photo_desc' => '四季折々の自然を楽しむ伊豆市に、ひっそりと佇む隠れ家レストラン。<br>旅行でいらっしゃった方も、お近くの方も、お気軽にお立ち寄りください。'
    );
}
$array_restaurant = new Restaurant();
// var_dump($array_restaurant->shop0);
// print_r($array_restaurant->shop0);
 print_r($array_restaurant->shop7['area']);
?>