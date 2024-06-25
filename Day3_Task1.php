

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Application Name: PHP Class Registration</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><span>*</span>
        <br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><span>*</span>
        <br>

        <label for="group">Group#:</label>
        <input type="radio" name="group" id="group" value="1"> 1 
        <input type="radio" name="group" id="group" value="2"> 2
        <br>

        <label for="details">Class Details:</label>
        <textarea name="details" id="details" cols="30" rows="5"></textarea>
        <br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" id="gender" value="male"> Male
        <input type="radio" name="gender" id="gender" value="female"> Female
        <br>


        <label for="courses">Select Courses: (Please use "Ctrl" to select multiple values)</label><br>
        <select name="courses[]" id="courses" multiple size="7">
            <option value="PHP">PHP</option>
            <option value="Javascript">Javascript</option>
            <option value="MySQL">MySQL</option>
            <option value="HTML">HTML</option>
            <option value="Python">Python</option>
            <option value="Java">Java</option>
            <option value="C#">C#</option>
        </select><br>
        <br>

        <label for="isAgree">I agree to the terms and conditions</label>
        <input type="checkbox" name="isAgree" id="isAgree"><span>*</span>
        <br>
        <br>


        <input type="submit" value="Submit">
    </form>
    <br>
    <hr>
</body>
</html>

<?php

// Print Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$group = $_POST['group'];
$details = $_POST['details'];
$gender = $_POST['gender'];
$courses = $_POST['courses'];

$error_message = '<span>Please make sure that name is only letters & whitespace and email is valid</span>';

echo "<h2>Submitted Form Data</h2>";
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Group: $group <br>";
echo "Details: $details <br>";
echo "Gender: $gender <br>";
//echo "Courses:"; print_r($courses); --UGLY OUTPUT--
echo "Courses: ";
foreach($courses as $course){
    echo "$course  ";
}
echo "<br>";


// Validation
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    echo $error_message;
    exit;
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo  $error_message;
    exit;
}

if(!isset($_POST['isAgree'])){
    echo "Please agree to the terms and conditions";
    exit;
}

?>