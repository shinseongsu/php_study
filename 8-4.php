<?php

try{
    $db = new PDO('mysql:host=127.0.0.1;dbname=restaurant','root','0000');
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $affectedRows = $db -> exec("INSERT INTO dishes(dish_name, price, is_spicy)
                                 VALUES('참께 퍼프',2.50,0)");
}catch(PODException $e){
    print "데이터를 삽입할 수 없습니다: ". $e-> getMessage();
}

?>