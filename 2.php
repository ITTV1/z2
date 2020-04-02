<?php

//
//Массивы и переменные
//
//
//array compact(mixed $v1  [, mixed $v2, ...]  )

//    $a = "IT TV";
//    $b = "php programmist";
//    $c = compact("a", "b");
//    print_r($c);



//
//        $a = "IT TV";
//        $b = "php programmist";
//        $c = "ubuntu";
//        $d = "html";
//        $p = ["b", ["c", "d"]];
//        $w = compact("a", $p);
//        print_r($w);


//
//void extract(array $arr, [, int $t] [, $prefix])
//
//
//
//
//
//    EXTR_PREFIX_ALL
//    EXTR_PREFIX_SAME
//    EXTR_SKIP
//    EXTR_OVERWRITE


//
//    extract($_SERVER);
//    extract($HTTP_POST_VARS, EXTR_PREFIX_ALL, "E");
//    echo $E_COMSPEC;




array array_change_key_case(array $arr, int $case=CASE_LOWER);


CASE_LOWER
CASE_UPPER


























