<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    process_form();
} else {
    show_form();
}

function process_form(){
    print $_POST['my_name']."님 안녕하세요";
}

function show_form(){
    print <<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
    이름 : <input type="text" name="my_name">
    <br />
    <input type="submit" value="인사">
    </form>
_HTML_;
}

?>