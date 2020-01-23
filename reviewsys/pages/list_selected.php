<?php require 'header.tpl';?>
<main>
	<div class="clearfix">
<?php
require 'list_all.php';
$area_selected = @$_GET['area'];
if ($area_selected == '-- 地域を選んで下さい --')
    header('Location: list.php');
else
    echo '<h2>' . $area_selected . 'のレストラン</h2>';
echo '<a href="list.php"><button type="button" class="btn btn-success">他の地域を選択</button></a>';
$shop_no_selected[] = shop0;
foreach ($shop_no as $val) {
    if ($$val['area'] == $area_selected) {
        $shop_no_selected[] = $val;
    }
}
$shop_no = $shop_no_selected; 
require 'shop_table.php'; ?>
</main>
<?php require 'footer.tpl';?>
    