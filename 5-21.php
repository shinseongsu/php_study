<?php

$dinner = '갑오징어 카레';

function macrobiotic_dinner(){
    $dinner = "모둠 채소";
    print "저녁메뉴는 $dinner 입니다.";
    print " 하지만 저는 ";
    print $GLOBALS['dinner'];
    print "를 먹겠습니다.<br>";
}

macrobiotic_dinner();
print "일반 저녁 메뉴 : $dinner";

?>