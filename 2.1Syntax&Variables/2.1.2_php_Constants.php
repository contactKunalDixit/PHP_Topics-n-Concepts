<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo"
<h1>Data Types</h1>";
// $x = 5678;
// var_dump($x);//shows the type of variable


$x = 40;
function sum(){
    global $x; // A variable defined outside the function is in a global scope and NOT local scope of the function, and hence the variable is not accessible from wothin the function unless we use the keyword "global".

    static $y = 30; // every time the function is executed, the values cease to exist. this is the normal behaviour for any function. If you'd like to retain the old value/s, then use the keyword "static"

    echo $x + $y."<br>";
    $y=$y+10;
};
sum();
sum();









    ?>
</body>
</html>