<?php

$ray = array(
    'companyName'   =>  'Raylifebd',
    'domainName'    =>  'raylifebd.com',
    'loacation'     =>  'Mohammadpur',
    'country'       =>  'Bangladesh',
);
echo "<pre>";
print_r($ray);
echo "<pre>";
///Divided into subarray which has 1 value
print_r(array_chunk($ray, 1, true));