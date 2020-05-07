<?php

print <<<_HTML_
<form method="POST" action="7-3.php">
<input type="text" name="product_id">
<select name="category">
<option value="ovenmitt">냄비받침</option>
<option value="fryingpan">프라이팬</option>
<option value="torch">주방토치</option>
</select>
<input type="submit" value="제출">

_HTML_;

?>
