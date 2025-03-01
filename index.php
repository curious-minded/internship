<?php
function printStarPattern($rows) {
    for ($i = 1; $i <= $rows; $i += 2) {
        echo str_repeat("*", $i);
        echo "<br/>";
    }
}

function countCharacters($input) {
    $input = strtolower(str_replace(" ", "", $input)); 
    $charCounts = array_count_values(str_split($input));
    foreach ($charCounts as $char => $count) {
        echo "$char - $count";
        echo "<br/>";
    }
}

function removeSpecialCharacters($input) {
    return preg_replace("/[^a-zA-Z0-9]/", "", $input);
}

function sumOfNumbers($arr) {
    return array_sum($arr);
}

echo "1. Star Pattern:<br/>";
printStarPattern(7);

echo "\n2. Character Occurrences:<br/>";
countCharacters("This is my car");

echo "\n3. Remove Special Characters:<br/>";
$cleanedString = removeSpecialCharacters("Hello@#% World!123");
echo $cleanedString;

echo "<br/>4. Sum of Numbers in Array:<br/>";
$sum = sumOfNumbers([10, 20, 30, 40, 50]);
echo "Sum: $sum\n";

?>
