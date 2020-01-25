<?php require 'header_02.php';?>
<main>
	<div class="clearfix">
<?php
require 'list_all_02.php';
$area_selected = @$_GET['area'];
if ($area_selected == '-- 地域を選んで下さい --')
    header('Location: list_02.php');
else
    echo '<h2>' . $area_selected . 'のレストラン</h2>';
echo '<a href="list_02.php"><button type="button" class="btn btn-success">他の地域を選択</button></a>';
$shop_no_selected[] = shop0;
foreach ($shop_no as $val) {
    if ($$val['area'] == $area_selected) {
        $shop_no_selected[] = $val;
    }
}
require 'shop_table_02.php'; ?>
</main>
<?php require 'footer_02.php';?>
    