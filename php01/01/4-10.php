<?php

$meals = array('Walunt Bun' => 1,
               'Cashew Nuts amd White Mushrooms' => 4.95,
               'Dired Mulberries' => 3.00,
               'Eggplant with Chili Sauce' => 6.50);

foreach($meals as $dish => $price){
    $meals[$dish] = $meals[$dish] * 2;
}

foreach($meals as $dish => $price){
    printf("%s 메뉴의 변경된 가격은 \s%.2f입니다.\n", $dish, $price);
}

?>