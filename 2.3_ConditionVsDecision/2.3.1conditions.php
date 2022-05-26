<?php
// If the particular file would just have a pure PHP instructions. and not diluted with HTML or JS or any other code, Then the initiating tab can be left opened. You dont really need to have a closing tag but only when the whole file just have PHP code in it. 

$result1 = 1 > 5;
$result2 = 1 < 5;
echo "<h1>$result1</h1>"; // The result being false, will never show
echo "<h1>$result2</h1>"; // Only truthy statements show in form of "1" which means True


if ($result1!=1 && $result2==0) {
    echo "<h1>The 1ST statement is TRUE</h1>";
}else if($result2==1) {
echo "<h1>The 2ND statement is TRUE</h1>";
}


//1 or True means same
// 0 or False means same

// Multiple or extended constions can be used with use of "AND" && / OR "||". 
