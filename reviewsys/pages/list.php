<?php require 'header.tpl';?>
<main>
	<div class="clearfix">
		<h2>地域を選んで下さい</h2>
		<form action="list_selected.php" name="search_form" method="get">
<?php
require 'list_all.php';
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
		
<?php //require 'shop_table.php'; ?>
</main>
<?php require 'footer.tpl';?>