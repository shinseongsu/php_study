<?php

function page_header5($color, $title, $header = '어서오세요!'){
    print '<html><head><title>'.$title.'에 오신 것을 환영합니다.</title></head>';
    print '<body bgcolor="#'.$color.'">';
    print "<h1>$header</h1>";
}
page_header5('66cc99','저의 멋진 홈페이지');
page_header5('66cc99','저의 멋진 홈페이지','홈페이지 최고예요');

function page_header6($color, $title='저의 홈페이지',$header = '어서오세요'){
    print '<html><head><title>'.$title.'에 오신 것을 환영합니다.</title></head>';
    print '<body bgcolor="'.$color.'">';
    print "<h1>$header</h1>";
}

page_header6('66cc99');
page_header6('66cc99','저의 멋진 홈페이지');
page_header6('66cc99','저의 멋진 홈페이지','홈페이지 최고예요~');

?>