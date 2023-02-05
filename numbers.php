<?php
//Write a program that adds and prints numbers only divisible by 3 and 5 between 1 and 1000

$sum = 0;
for ($num=1; $num<=1000; $num++)
{
    if($num % 3 == 0 && $num % 5 == 0)
    echo $num, " ";
    $sum += $num;
}
echo"<br>";
echo "The sum is $sum";
?>