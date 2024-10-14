<?php

$string = "  Hello, World! Welcome to PHP string operations.  ";

$trimmedString = trim($string);
echo "Trimmed String: '$trimmedString' <br>";

$length = strlen($trimmedString);
echo "Length of String: $length <br>";

$uppercase = strtoupper($trimmedString);
echo "Uppercase String: '$uppercase' <br>";

$replacedString = str_replace("World", "Universe", $trimmedString);
echo "Replaced String: '$replacedString' \n";

$words = explode(" ", $trimmedString);
echo "Words in String: ";
print_r($words);
?>