<?php

$dinner = array('Sweet Corn and Asparagus',
                'Lemon Chicken',
                'Braised Bamboo Fungus');
$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');

print '정렬 전 <br />';
foreach($dinner as $key => $value){
    print " \$dinner: $key $value <br />";
}

foreach($meal as $key => $value){
    print " \$meal: $key $value <br />";
}

sort($dinner);
sort($meal);

print '정렬 후 <br />';
foreach($dinner as $key => $value){
    print " \$dinner: $key $value <br />";
}

foreach($meal as $key => $value){
    print " \$meal: $key $value <br />";
}

?>