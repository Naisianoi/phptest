<?php
//Write a program that combines two arrays into one.
function arrayUnion($array1,$array2){
    //The array_merge() function merges one or more arrays into one array.
    $merge = array_merge($array1,$array2);
    echo "<pre>";
    //The print_r() function prints the information about a variable in a more human-readable way. Variable handling.
    print_r($merge);

    //The array_diff() function compares the values of two (or more) arrays, and returns the differences.
    $difference = array_diff($array1,$array2);
    echo "<pre>";
    print_r($difference);


    //The array_unique() function removes duplicate values from an array.
    $res = array_unique($merge);
    echo "<pre>";
    print_r($res);
}

$array1 = array('jet', 'kettle', 'lion');
$array2 = array('ostrich', 'kettle', 'jet');

arrayUnion($array1,$array2);

?>