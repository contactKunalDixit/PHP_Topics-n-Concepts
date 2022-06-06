<?php
//*********************         STRING FUNCTIONS                        ********************** */

$greeting = "Hello World";
$name = "Kunal";
$joinedString = $greeting . ", " . $name;
echo ($joinedString . "<br>");

// Use of escape characters: to instruct the presence of "quoted" words within double quotes. e.g. Use ESCAPING character \
$message = "This is a \"php\" session.<br>";
echo $message;
//! to get the length of a string
echo (strlen($joinedString) . "<br>");

//! finds an occurance of a substring in a string
echo (strpos($message, "This") . "<br>");

//In order to avoid confusion about the word position being 0, and 0 appearing because the outcome is false, its good to apply the below condition:
if (strpos($message, "php") !== false) {
    echo "FOUND";
} else {
    echo "Doesnt exists";
}
echo "<br>";

//! To find and extract a substring from a string. Usually its used to extract an file extension name from the full file name:
$fileName = "profile.php";
$extName = substr($fileName, -3);   // if the start is positive, then it returns the substring starting that position and beyond. the 1st leeter id always positioned 0. If its negative, then it works in REVERSE.
echo $extName . "<br> ";

//! Joining and Splitting: Implode and Explode

$fruits = "apple, oranges, Mangoes";
echo $fruits . "<br>";
$fruitsArr = explode(",", $fruits);             // String into Array: Splits a String into substring and RETURNS an Array
print_r($fruitsArr);


$fruitsStr = implode(",", $fruitsArr);          // Array into String: converts and glues all Array items into a String
var_dump($fruitsStr);
print_r($fruitsStr);


?>;

?>