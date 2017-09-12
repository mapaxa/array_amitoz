<?php
    $arr = array();
    for($i=0;$i<=50;$i++){
        /*$x = rand(0, 50);*/
        $arr[$i] = $i; 
    }
print_r($arr);
//функция для деления массива на массивы нужной длины(не учитывает неправильннного вывода файла, например, если одну строку пропустили)
function array_amitoz($incoming_array, $number_of_elements, $start_element=0) {
//создаём осн. массив, в который будут писаться маленькие массивы
    $big_arr = array();
    // промежуточный массив
    $medium_array = array();
    for($i=$start_element; $i<count($incoming_array); $i++){
        $medium_array[] = $incoming_array[$i];
    // пишем в массив определенное кол-во элементов
        if(count($medium_array) == $number_of_elements){
            $big_arr[] = $medium_array;
            $medium_array = [];
        } 
    }
    return $big_arr;
}
//пример
$my_arr = array_amitoz($arr, 6, 15);
print_r($my_arr);
