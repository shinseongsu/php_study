<?php

$meal = array('breakfast' => 'Walnut Bun',
              'lunch' => 'Cashew Nuts and White Mushrooms',
              'snack' => 'Dried Mulberries',
              'dinner' => 'Eggplant with Chili Sauce');

print "정렬 전 <br />";
foreach($meal as $key => $value){
    print " \$meal: $key $value <br />";
}

arsort($meal);

print "정렬 전 <br />";
foreach($meal as $key => $value){
    print " \$meal: $key $value <br />";
}


?>