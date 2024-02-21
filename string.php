<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3>Задание 1 22 слайд</h3>";
        //1.Дата строка «fact». Привести строку к виду «Fact».
        $str2 = "fact";
        echo str_replace('fact', "Fact", $str2);
        echo "<br>";
        // $arr = str_split($str, 4);
        // print_r($arr);
        // $str1 = "HELLO";
        // $arr4 = mb_substr($str1, 0, 5);
        // print_r($arr4);
        // // 2. Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». 
        // Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова».
        echo "<h3>Задание 2 22 слайд</h3>";
        $str_fio = "Григорьев Владислав Игоревич";
        $arr = explode(" ", $str_fio);
        $arr2 = $arr[1] . " " . $arr[0];
        echo $arr2;
        echo "<br>";
        //3.Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать).
        echo "<h3>Задание 3 22 слайд</h3>"; 
        $str3 = "Привет мир";
        $arrStr = mb_str_split($str3);
        $cnt = 0;
        for($i = 0; $i < count($arrStr); $i++){
            if($arrStr[$i] === 'и') {
                $cnt++;
            }
        }
        echo $cnt;
        echo "<h3>Задание 4 22 слайд</h3>";
        $str4 = "html css php";
        $strHtml = mb_substr($str4, 0, 4);
        echo $strHtml . "<br>";
        $strCss = mb_substr($str4, 5, 3);
        echo $strCss . "<br>";
        $strPhp= mb_substr($str4, 9, 3);
        echo $strPhp . "<br>";
        
        // $a = 100;//int
    // $b = "$a";//string

    // $c = (string)$b;
    // if ($c === $a) {
    //     echo "+";
    // }
    // if ($c === $b) {
    //     echo "-";
    // }
    // var_dump($a);
    // echo "<br>";
    // var_dump($b);
    // echo "<br>";
    // var_dump($c);
    // echo "<br>";
        // $arr = ['red', 'green', 'blue'];
        // print_r($arr);
        // echo "<br>";
        // $str = implode(", " , $arr);
        // echo $str . "<br>";
        // $arr2 = explode(", ", $str, -2);
        // print_r($arr2);
        // echo $arr[0] . "<br>";
        // echo $arr[1] . "<br>";
        // echo $arr[2] . "<br>";
        // $str = "НАДЕЖНЫЙ ВЕБ-ИНТЕГРАТОР ФАКТ!";
        // echo str_replace(array("НАДЕЖНЫЙ", "ВЕБ-ИНТЕГРАТОР", "ФАКТ!"), array("RELTABLE", "WEB-INTEGRATOR", "FACT!"), $str);
        // echo mb_strpos($str, "А");
        // echo str_replace("ВЕБ", "WEB", $str);
        //  echo mb_substr($str, 0, 4);
        //  echo "<br>";
        // echo substr($str, 0, 4);
        // echo "<br>";
        // $str2 = "<b>HELLO</b>";
        // echo htmlspecialchars($str2);
        // echo "<br>";
        // echo htmlentities($str2);
        // echo "<br>";
        // echo html_tags($str2):
        // echo trim($str2);
        // echo "<br>";
        // echo md5($str2);
        // echo "<br>";
        // echo sha1($str2);
        // echo "<br>";
        // echo password_hash($str2, PASSWORD_BCRYPT);
        // $arr2 = str_split($str2, 2);
        // print_r($arr2);
        // echo mb_strtolower($str);
        //  echo "<h1>Задача 1 24 слайда</h1>";
        // $str = "HELLO WORLD!!";
        // if($str > 5){
        //     echo mb_substr($str, 0, 5). "...";
        // }else {
        //     echo $str;
        // }
        // echo "<br>";
    ?>
</body>
</html>