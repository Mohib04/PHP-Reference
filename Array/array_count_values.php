<?php

$ray = array('10000','20000','30000','20000','20000','20000','30000','30000','10000','10000');
$srd = array('raylifebd.com','anhenterprise.com','srdltd.com','anhenterprise.com','anhenterprise.com');

echo "<pre>";
print_r($ray);
print_r($srd);

///Count Array Values
echo "<pre>";
print_r(array_count_values($ray));
print_r(array_count_values($srd));


