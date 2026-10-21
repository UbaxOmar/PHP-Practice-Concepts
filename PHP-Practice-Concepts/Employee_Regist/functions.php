<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// functions.php - Contains all calculations and salary category functions

// 1. Calculate Gross Salary
function calculateGrossSalary($basicSalary, $allowance) {
    return $basicSalary + $allowance;
}

// 2. Calculate Net Salary (Includes Gross Salary + Bonus - Deduction)
function calculateNetSalary($grossSalary, $bonus, $deduction) {
    return $grossSalary + $bonus - $deduction;
}

// 3. Calculate Bonus based on rules
function calculateBonus($basicSalary) {
    if ($basicSalary >= 1000) {
        return $basicSalary * 0.10; // 10% bonus
    } elseif ($basicSalary >= 500 && $basicSalary <= 999.99) {
        return $basicSalary * 0.05; // 5% bonus
    } else {
        return 0; // No bonus
    }
}

// 4. Check Salary Status category based on Net Salary
function checkSalaryStatus($netSalary) {
    if ($netSalary >= 1500) {
        return "High Salary";
    } elseif ($netSalary >= 800 && $netSalary <= 1499.99) {
        return "Medium Salary";
    } else {
        return "Low Salary";
    }
}
?>
</body>
</html>