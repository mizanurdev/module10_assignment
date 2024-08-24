<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    // Calculate vowel count
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $str, $matches);
    
    // Reverse the string
    $reversedStr = strrev($str);
    
    // Output the results
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}
