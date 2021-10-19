<?php
$a = 1;
$array = array(1,211,813,-935,76,954,-345,876,432,-584);
foreach($array as $index => $value){
    if ($value > 0){
        $a = $a*1;
    }
    else {
        $a = $a*0;
    }
};
if ($a == 0){
    echo "Да";
}
else{
    echo "Нет";
}
?>