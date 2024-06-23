<?php

// Task 1

phpinfo();



//Task 2
define('site_name','mySiteName');
echo Site_Name;



//Task 3
$age = 10;

if ($age < 5) {
    echo "Stay at home";
} 
else if ($age == 5) {
    echo "Go to kindergarten";
} 

else if ($age >= 6 && $age <= 12) {
    
    switch ($age) {
        case 6:
            echo "Go to Grade 1";
            break;
        case 7:
            echo "Go to Grade 2";
            break;
        case 8:
            echo "Go to Grade 3";
            break;
        case 9:
            echo "Go to Grade 4";
            break;
        case 10:
            echo "Go to Grade 5";
            break;
        case 11:
            echo "Go to Grade 6";
            break;
        case 12:
            echo "Go to Grade 7";
            break;
        default:
            echo "Invalid age";
    }
} 
else {
    echo "Too old for school";
}
?>
