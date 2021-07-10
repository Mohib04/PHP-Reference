<?php

$ray = array(
    array(
        'companyName'   =>  'Raylifebd',
        'domainName'    =>  'raylifebd.com',
        'loacation'     =>  'Mohammadpur',
        'country'       =>  'Bangladesh',
        'id'            =>  '10000'
    ),
    array(
        'companyName'   =>  'anhenterprise',
        'domainName'    =>  'anhenterprise.com',
        'loacation'     =>  'Mohammadpur',
        'country'       =>  'Bangladesh',
        'id'            =>  '20000'
    ),
    array(
        'companyName'   =>  'srdltd',
        'domainName'    =>  'srdltd.com',
        'loacation'     =>  'Mohammadpur',
        'country'       =>  'Bangladesh',
        'id'            =>  '30000'
    ),
    
);

echo "<pre>";
print_r($ray);

///created a new array by selected column
echo "<pre>";
print_r(array_column($ray, 'companyName', 'id'));


