<?php
$hours = getdate()["hours"]+2; //чтобы было не московское время
if ($hours > 8 && $hours < 20)
{
    $classThime =  "whiteThime";
    $colorClassText =  "class = \"blackText\"";
    $colorText =  "blackText";
    $color1 = "<font color=\"#4c4c4c\">";
    $color2 = "<font color=\"black\">";
}
else
{
    $classThime =  "blackThime";
    $colorClassText =   "class = \"whiteText\"";
    $colorText =   "whiteText";
    $color1 = "<font color=\"#aabbaa\">";
    $color2 = "<font color=\"wheat\">";
}
?>