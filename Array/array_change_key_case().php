<?php

$ray = array(
    "compnayName" => "RaylifeBd",
    "Location"    => "Mohammadpur"

);
///Change the case array's index
print_r(array_change_key_case($ray, CASE_UPPER));
print_r(array_change_key_case($ray, CASE_LOWER));
