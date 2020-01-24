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
print_r($array_area->area[2]);
//print_r($array_area);
?>