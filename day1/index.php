<?php

// Task 1

phpinfo();



//Task 2
define('Website_Title','My PHP Website');
echo Website_Title;



//Task 3
$age = 10;

if ($age < 5) {
    echo "Stay at home";
} 
else if ($age == 5) {
    echo "Go to kindergarten";
} 
    
else if ($age >= 6 && $age <= 60) {
    
    $grade = $age - 5;
    
else {
    echo "Too old for school";
}
?>
