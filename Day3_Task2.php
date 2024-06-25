<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <style>
        table {
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        .cms {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

<h1>Application Name: CMS Class List</h1>

<?php
require 'students.php';
?>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Track</th>
    </tr>
    <?php

    foreach ($students as $student) {
        echo '<tr class="' . ($student['track'] == 'CMS' ? 'cms' : '') . '">';
        echo '<td>' . htmlspecialchars($student['name']) . '</td>';
        echo '<td>' . htmlspecialchars($student['email']) . '</td>';
        echo '<td>' . htmlspecialchars($student['track']) . '</td>';
        echo '</tr>';
    }

    /*Note to self: htmlspecialchars() is a PHP function that converts special characters to HTML entities.
    It is used to prevent cross-site scripting (XSS) attacks.*/

    ?>

    
</table>

</body>
</html>
