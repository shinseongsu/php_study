<?php

function page_header2($color){
    print '<html><head><title>저의 홈페이지에 오신 것을 환영합니다.</title></head>';
    print '<body bgcolor="#'. $color .'">';
}

page_header2('cc00cc');
print "어서오세요, $user 님";
page_footer();

function page_footer(){
    print '<hr>방문해주셔서 감사합니다.';
    print '</body></html>';
}

?>