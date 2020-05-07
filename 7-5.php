<form method="POST" action="7-5.php">
<select name="lunch[]" multiple>
    <option value="바베큐 돼지고기">바베큐 돼지고기 번</option>
    <option value="닭고기">닭고기</option>
    <option value="연꽃씨">연꽃씨</option>
    <option value="단팥">단팥</option>
    <option value="제비집">제비집</option>
</select>
<input type="submit" value="제출">
</form>
원하는 번을 선택하세요.
<br />
<?php

if(isset($_POST['lunch'])){
    foreach($_POST['lunch'] as $choice){
        print "$choice 번을 골랐습니다. <br />";
    }
}

?>