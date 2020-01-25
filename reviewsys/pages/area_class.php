<?php

class area
{

    public $area = [
        '-- 地域を選んで下さい --',
        '福岡',
        '神戸',
        '伊豆'
    ];
}
$array_area = new area();
for ($i = 0; $i <= 4; $i ++) {
    $area[] = $array_area->area[$i];
}
?>