<?php

try{
    $db = new PDO('mysql:host=127.0.0.1;dbname=restaurant','root','0000');
} catch(PDOException $e){
    print "데이터 베이스에 접속할 수 없습니다 ". $e -> getMessage();
}
?>
