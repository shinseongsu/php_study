<?php

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=restaurant','root','0000');
} catch (PDOException $e) {
    print "접속할 수 없습니다: " . $e->getMessage();
}

$q = $db -> query('SELECT dish_name, price FROM dishes');
while($row = $q -> fetch()){
    print "$row[dish_name], $row[price] <br>";
}

?>