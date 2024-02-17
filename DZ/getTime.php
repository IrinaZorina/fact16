<?php
$hours = getdate()["hours"]+2; //чтобы было не московское время
if ($hours > 8 && $hours < 20)
{
    $classThime =  "whiteThime";
    $colorClassText =  "class = \"blackText\"";
    $colorText =  "blackText";
}
else
{
    $classThime =  "blackThime";
    $colorClassText =   "class = \"whiteText\"";
    $colorText =   "whiteText";
}
?>