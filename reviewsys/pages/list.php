<?php require 'header.tpl';?>
	<main>
		<div class="clearfix">
			<h2>レストラン一覧</h2>
			<form action="list_selected.php" name="search_form" method="get">
<?php
require 'list_common.php';
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
	<?php require 'footer.tpl';?>