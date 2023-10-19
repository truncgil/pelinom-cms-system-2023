<?php function levels() {
    // user no, full control, write, read, modify
    return [
    'Admin' =>                          [1,1,1,1,1],
       
    ];
} 

function level_keys() {
    return array_keys(levels());
}