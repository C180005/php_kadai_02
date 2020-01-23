<?php require 'header.tpl';?>
	<main>
		<div class="clearfix">
<?php
require 'list_common.php';
$area_selected = @$_GET['area'];
if ($area_selected == '-- 地域を選んで下さい --')
    echo '<h2>地域を選択してください</h2>';
else
    echo '<h2>' . $area_selected . 'のレストラン</h2>';
?>

<a href="list.php"><button type="button" class="btn btn-success">レストラン一覧に戻る</button></a>

<?php
$shop_no_selected[] = shop0;
foreach ($shop_no as $val) {
    if ($$val['area'] == $area_selected) {
        $shop_no_selected[] = $val;
    }
}

?>
			<table class="list">
<?php
foreach ($shop_no_selected as $tt) {
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
    </table></main>
<?php require 'footer.tpl';?>
    