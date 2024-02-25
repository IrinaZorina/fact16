<?php

// Дано N действительных случайных чисел в диапазоне от -100 до 100. 
// Найти минимальное положительное число и максимальное отрицательное число.
$arr56=[];
for ($i = 0; $i < 5; $i++) {
    $arr56[$i] = mt_rand(-10, 10);
}

print_r($arr56); 

$max=-11;
$min=11;
for ($i=0;$i < 5; $i++){
   
    if ($arr56[$i] < $min and  $arr56[$i] > 0){
           $min=$arr56[$i];
    }
  
};   
echo "Минимальное положительное число  $min";
echo '<br>';


for ($i=0;$i < 5; $i++){
    if ($arr56[$i] > $max and  $arr56[$i] < 0){
         $max=$arr56[$i];
    }      
};   
echo '</pre>';
echo "Максимальное отрицательное число  $max";






echo " Задача. Для группы учащихся известны годовые оценки по следующим предметам: математика,
 физика, химия, информатика.
  Найти среднюю в группе оценку по каждому из предметов.
   Суммирование оценок по каждому предмету.";
   echo '<pre>';

//Задаём массив , в котором будут указаны средние оценки группы 
// предмету физика.
echo "Оценки группы по физика";
$arr1= [ // задаём массив группы и оценок
    'Иванов'=> '5',
    'Петров'=> '4',
    'Сидоров'=> '3',
    'Арефьев'=> '5',   'Маркин'=> '4'
];
echo '<pre>';
print_r ($arr1);
echo '<pre>';
echo "Средняя оценка группы по физике = " . array_sum($arr1)/count($arr1); // Считаем сумму оценок и делим на количество оценок
echo '<pre>';
echo "Сумма оценки по предмету физика " . array_sum($arr1);// считаем сумму оценок по предмету физика.
echo '<pre>';

// дальше делаем по аналогии, как с предметом физика


echo "Оценки группы по химии";
echo '<pre>';
$arr2=[
    'Иванов'=> '4',
    'Петров'=> '3',
    'Сидоров'=> '5',
    'Арефьев'=> '4',
    'Маркин'=> '3',
];
print_r ($arr2); '<br>';
echo '<pre>';
echo "Средняя оценка группы по химии = " . array_sum($arr2)/count($arr2); 
echo '<pre>';
echo "Сумма оценки по предмету химия = " . array_sum($arr2);
echo '<pre>';

//Математика 
echo "Оценки группы по математике";
echo '<pre>';
$arr3=[
    'Иванов'=> '5',
    'Петров'=> '4',
    'Сидоров'=> '4',
    'Арефьев'=> '4',
    'Маркин'=> '5',
];
echo '<pre>';
print_r ($arr3); '<br>';
echo '<pre>';
echo "Средняя оценка группы по математике = " . array_sum($arr3)/count($arr3); 
echo '<pre>';
echo "Сумма оценки по предмету математика = " . array_sum($arr3);
echo '<pre>';


echo "Известна среднемесячная температура воздуха на следующих островах Карибского моря: Куба, Тринидад, Ямайка,
 Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов.";

// Ход решения: задаём массив по каждому острову, ключами делаем месяца, а температуру значением. Высчитываем макс.темп. по каждому острову 
//и вкладываем в новый массив.
// Куба
$arr5=[
    'Январь'=> '23',
    'Февраль'=> '24',
    'Март'=> '24',
    'Апрель'=> '26',
    'Май'=> '26',
    'Июнь'=> '27',
    'Июль'=> '28',
    'Август'=> '28',
    'Сентярь'=> '25',
    'Октябрь'=> '25',
    'Ноябрь'=> '24',
    'Декабрь'=> '24',
];
$f=max($arr5);
// echo $f;

// дальше делаем по аналогии
//Тринидад
$arr6 =[
    'Январь'=> '24',
    'Февраль'=> '22',
    'Март'=> '20',
    'Апрель'=> '17',
    'Май'=> '13',
    'Июнь'=> '10',
    'Июль'=> '10',
    'Август'=> '12',
    'Сентярь'=> '13',
    'Октябрь'=> '16',
    'Ноябрь'=> '19',
    'Декабрь'=> '22',
];
$w=max($arr6);
// echo '<pre>';
//  Ямайка

$arr7=[
    'Январь'=> '25',
    'Февраль'=> '26',
    'Март'=> '26',
    'Апрель'=> '27',
    'Май'=> '27',
    'Июнь'=> '28',
    'Июль'=> '29',
    'Август'=> '29',
    'Сентярь'=> '28',
    'Октябрь'=> '27',
    'Ноябрь'=> '27',
    'Декабрь'=> '26',
];
$r=max($arr7);
// Гаити
$arr8=[
    'Январь'=> '26',
    'Февраль'=> '27',
    'Март'=> '27',
    'Апрель'=> '28',
    'Май'=> '29',
    'Июнь'=> '29',
    'Июль'=> '30',
    'Август'=> '30',
    'Сентярь'=> '29',
    'Октябрь'=> '29',
    'Ноябрь'=> '28',
    'Декабрь'=> '27',
];
$p=max($arr8);
//Формирую один общий массив 
$y=[
    'Куба'=> ['Максимальная температура'=> $f],
    'Тринидад'=> ['Максимальная температура'=> $w],
    'Ямайка'=> ['Максимальная температура'=> $r],
    'Гаити'=> ['Максимальная температура'=> $p],
];
print_r($y);
