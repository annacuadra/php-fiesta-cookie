<?php

function hp_sum($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8,$num9,$num10){
echo $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10;}

echo "HP Sum: ", hp_sum(49,62,82,52,64,84,48,63,83,20), "<br>"; 

function ave_attack($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8,$num9,$num10,$num11){
    echo  ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10)/$num11;
}
echo "AVERAGE ATTACK: ", ave_attack(49,62,82,52,64,84,48,63,83,20,10);
?>