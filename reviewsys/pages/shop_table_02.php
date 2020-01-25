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
               <td class='detail'><a href='detail_02.php?id={${$tt}['id']}'>詳細</a></td>
               </tr>";
    }
}
?>
    </table >