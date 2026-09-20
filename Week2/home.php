<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

// 1. CONSTANTS EXAMPLE
// Defining a constant using the define() function
// Notice: No $ sign is used for constant names, and UPPERCASE is recommended.
define("PI", 3.14);

echo "Value of PI is: ", PI, "<br><br>"; // Passing multiple parameters to echo

// 2. IF-ELSEIF-ELSE STATEMENT

$marks = 87;

echo "<h3>Grade Evaluation (if-elseif):</h3>";

if ($marks >= 90) {
    echo "Excellent<br><br>";
} elseif ($marks >= 80) {
    echo "Very good<br><br>";
} elseif ($marks >= 50) {
    echo "Minimal pass<br><br>";
} else {
    echo "Fail<br><br>";
}

// 3. SWITCH CASE STATEMENT

echo "<h3>Grade Evaluation (switch-case):</h3>";

switch (true) {
    case ($marks >= 90):
        echo "Grade: Excellent<br><br>";
        break;
    case ($marks >= 80):
        echo "Grade: Very Good<br><br>";
        break;
    case ($marks >= 50):
        echo "Grade: Minimal Pass<br><br>";
        break;
    default:
        echo "Grade: Fail<br><br>";
        break;
}

// 4. FOR LOOPS EXAMPLES

echo "<h3>Multiplication Table (12 Times Table):</h3>";

for ($count = 1; $count <= 12; ++$count) {
    echo "$count times 12 is " . ($count * 12) . "<br>";
}

echo "<h3>Counting from 1 to 15:</h3>";

for ($count = 1; $count <= 15; $count++) {
    echo "$count <br>";
}
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "$i * $j = " . ($i * $j) . "<br>";
    }
}

echo "<br><hr><br>";

// HABKA 2: Row is 1, Column is 1, Result is 1 Format
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "Row is $i, Column is $j, Result is " . ($i * $j) . "<br>";
    }
}
?>
</body>
</html>