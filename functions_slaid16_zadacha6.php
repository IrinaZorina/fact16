<?php
function slova($str="Hello, World, men!")
{
    echo "Строка: $str", '<br>';
    $arr=explode(' ', $str);
    $N=count($arr);
    print_r($arr);
    echo '<br>';
    return $N;

}
$N=slova();
echo "Количество слов в строке: $N";
?>