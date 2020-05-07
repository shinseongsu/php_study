<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    list($form_errors, $input) = validate_form();
    if($form_errors){
        show_form($form_errors);
    } else {
        process_form($input);
    }
} else {
    show_form(false);
}


function process_form(){
    print $_POST['my_name']."님 안녕하세요.";
}

function show_form($errors){
    if($errors){
        print '다음 항목을 수정해주세요.: <ul><li>';
        print implode('</li><li>', $errors);
        print '</li></ul>';
    }
print <<<_HTML_
    <form method="POST" action="$_SERVER[PHP_SELF]">
    이름 : <input type="text" name="my_name">
    <br/>
    <input type="submit" value="인사">
    </form>
_HTML_;

}

function validate_form(){
    $errors = array();
    $input = array();

    $input['age'] = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    if(is_null($input['age']) || ($input['age'] === false)){
        $errors[] = '나이를 정확하게 입력해주세요.';
    }

    $input['price'] = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    if(is_null($input['price']) || ($input['price'] == false)){
        $errors[] = '가격을 정확하게 입력해주세요.';
    }

    $input['name'] = trim($_POST['name']?? '');
    if(strlen($input['name'])==0){
        $errors[] = '이름을 입력해주세요.';
    }

    return array($errors, $input);
}

?>