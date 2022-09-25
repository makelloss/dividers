<?php
$x = rand(1, 40);
$deviders = "";

for($i = 1; $i <= $x; $i++)
{
    if($i == $x){
        $deviders = $deviders."{$i}";
        $i++;
        continue;
    }
    if($x % $i == 0){
        $deviders = $deviders."$i, ";
    }
}

print "$x - $deviders";