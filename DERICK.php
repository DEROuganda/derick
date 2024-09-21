<?php
function name(){
    $my_name="AHABWE DERICK";
    return $my_name;
}
function my_age($c_year,$birth_year){
    $dob=28/7/2000;
    $age=$c_year-$birth_year;
    return $age;
}
function my_address(){
    $address="KITOHA-KAMPALA";
    return $address;
}

print("welcome ".name()." to ".my_address());
print("<br> You are ".my_age(2024,2000)." years old");



?>