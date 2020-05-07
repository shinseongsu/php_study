<?php

$flavors = array('Japanese' => array('hot' => '와사비',
                                     'salty' => '간장 소스'),
                 'Chinese'  => array('hot' => '머스터드',
                                     'pepper-salty' => '허브잎'));
foreach($flavors as $culture => $cluture_flavors){
    foreach($cluture_flavors as $flavor => $example){
        print "$culture $flavor 요리의 재료는 $example 입니다. <br>";
    }
}

?>