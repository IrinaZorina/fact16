<?php
function hello($x)
{
    echo "hello $x!";
}

hello("bob");
// ''''''''''''''''''''''''''''
function summ(&$a)
{
    $a +=10;
    echo$a."<br>";
}

$b=15;
echo $b."<br>";
summ($b);
echo $b."<br>";
// +++++++++++++++++++++++++++++++++++
function arri($arg)
{
    foreach($arg as $key){
        echo "<li> $key </li>";
    }
}

$arg=['php', 'java', 'css', 'html',];
arri($arg);
// ++++++++++++++++++++++++++++++++++++
$greet= function($q)
{ echo "hello .$q";
};
$s=4;
$greet($s);
// ++++++++++++++++++++++++++++++++++++++
function f($i)
{
    if($i<=5){
        
        f($i+1);
        echo $i."<br>";
    }
}
f(1);