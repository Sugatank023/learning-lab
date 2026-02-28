<h1>テーブル</h1>
<?php
$max_y = 10;
$max_x = 10;
?>
<table>
    <tr>
    <?php
    for ($x = 1; $x <= $max_x; $x++) {
        echo "<th>".$x."</th>";
    }
    ?>
    </tr>
    
    <?php
    for ($y = 1; $y <= $max_y; $y++) {
        echo "<tr>";
        for ($x = 1; $x <= $max_x; $x++) {
            echo "<td>".$y."×".$x."=".($y*$x)."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>