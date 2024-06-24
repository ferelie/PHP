<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // Task 1 =================================================================
        echo "<h1>Task 1</h1>";

        // There are 2 ways to add a new line in php (Windows)
        // 1: is by using "\r\n" instead of just "\n"
        // 2: is by concatinating "PHP_EOL" like this:

        $text =  "This is the first line. \r\n This is the second line". PHP_EOL . "This is the third line.";
        echo $text;
        echo '<br><hr>';

        // Task 2 =================================================================
        echo "<h1>Task 2</h1>";

        // 1: substr(string, start, length)
        $string = "My Name is Abdallah!";
        $substring = substr($string, 11,9);
        echo $substring . '<br>'; // Expected output: Abdallah!


        // 2: strtolower(string) / strtoupper(string)
        $string = "Abdallah!";
        echo strtolower($string). '<br>'; // Expected output: abdallah!
        echo strtoupper($string). '<br>'; // Expected output: ABDALLAH!

        // 3: trim(string)
        $string = "   Too many spaces before and after  ";
        $trimmedString = trim($string);
        echo $trimmedString . '<br>'; 
        echo '<hr>';

        // Task 3 =================================================================
        echo "<h1>Task 3</h1>";
        
        // Two ways to get the server variables in a readable way
        // 1: Using a loop:
        foreach ($_SERVER as $key => $value) {
            echo '[' . $key . ']' . ' => ' . $value . "<br>";
        }
        
        // 2: Using print_r() with <pre> tag
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        echo '<hr>';

        // Task 4 =================================================================
        echo "<h1>Task 4</h1>";
        
        $numArray = array(12, 45, 10, 25);
        print_r($numArray);
        echo '<br>';
        
        $sum = array_sum($numArray);
        echo "Sum of array values: " . $sum . "<br>";

        $average = $sum / count($numArray);
        echo "Average of array values: " . $average . "<br>";

        
        rsort($numArray, SORT_NUMERIC);
        echo "Array sorted from highest to lowest: ";
        print_r($numArray);
        echo '<br><hr>';

        // Task 5 =================================================================
        echo "<h1>Task 5</h1>";

        $agesArray = array( "Sarah" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40);
        
        $valuesSortedArray = $agesArray;
        asort($valuesSortedArray);

        echo "Sorted ascending by values:<br>";
        foreach ($valuesSortedArray as $key => $value) {
            echo $key . " => " . $value . " ";
        }
        echo '<br>';

        $keysSortedArray = $agesArray;
        ksort($keysSortedArray);

        echo "Sorted ascending by keys:<br>";
        foreach ($keysSortedArray as $key => $value) {
            echo $key . " => " . $value . " ";
        }
        echo '<br>';

        rsort($valuesSortedArray, SORT_NUMERIC);
        foreach ($valuesSortedArray as $key => $value) {
            echo $key . " => " . $value . " ";
        }
        echo '<br>';

        rsort($keysSortedArray, SORT_NUMERIC);
        foreach ($keysSortedArray as $key => $value) {
            echo $key . " => " . $value . " ";
        }
        echo '<br><hr>';

            
    ?>
</body>
</html>

