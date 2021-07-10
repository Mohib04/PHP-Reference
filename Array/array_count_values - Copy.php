<?php

$ray = array('10000','20000','30000');
$srd = array('raylifebd.com','anhenterprise.com','srdltd.com','anhenterprise.com','anhenterprise.com','20000','30000','20000','20000','20000','30000','30000');

echo "<pre>";
print_r($ray);
print_r($srd);

///Count Array Values
echo "<pre>";
print_r(array_diff($ray, $srd));


