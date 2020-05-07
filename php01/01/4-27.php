<?php

$meals = array('breakfast' => ['호두 번', '커피'],
               'lunch' => ['캐슈너트','양송이 버섯'],
               'snack' => ['말린 오디', '참께 게살 무침']);

$lunches = [ ['닭고기', '가지', '쌀'],
             ['소고기', '부추', '국수',],
             ['가지', '두부'] ];
             
$flavors = array('Japanese' => array('hot' => '와사비',
                                     'salty' => '간장 소스'),
                 'Chinese'  => array('hot' => '머스터드',
                                     'pepper-salty' => '허브잎'));

print $meals['lunch'][1];
print $meals['snack'][0];
print $lunches[0][0];
print $lunches[2][1];
print $flavors['Japanese']['salty'];
print $flavors['Chinese']['hot'];

?>