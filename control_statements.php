<?php

$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
}

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

$score = 75;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 80) {
    echo "Grade: B";
} elseif ($score >= 70) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}


$day = 3;

switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    default:
        echo "Invalid day";
}


for ($i = 0; $i < 5; $i++) {
    echo "The number is: $i \n";
}


$count = 0;

while ($count < 5) {
    echo "Count is: $count \n";
    $count++;
}

$count = 0;

do {
    echo "Count is: $count \n";
    $count++;
} while ($count < 5);


$fruits = array("Apple", "Banana", "Cherry");

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit \n";
}


$grades = array(85, 70, 90, 60, 75);

foreach ($grades as $grade) {
    if ($grade >= 90) {
        echo "Grade: A\n";
    } elseif ($grade >= 80) {
        echo "Grade: B\n";
    } elseif ($grade >= 70) {
        echo "Grade: C\n";
    } else {
        echo "Grade: F\n";
    }
}

?>
