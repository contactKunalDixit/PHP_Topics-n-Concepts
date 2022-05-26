<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX2</title>
</head>
<body>
    <?php echo'<p>This is a simple static statement written in PHP</p>';?>

<!-- ******************************************************************************************** -->

<!-- CHAP 1: SYNTAX and VARIABLES -->
    <?php echo'<h2>The white spaces dont matter much, but one needs to get familiar with the general syntax and behaviour of PHP.</h2>';?>

    <h2><?php echo'The above statement can also be written as this';?></h2>
    <h4><?php echo "<ul>
        <li><p>Putting extra carrots in the actual code would only effect how the source code would appear, NOT the actual output on the browser. The browser doesn't get affected by the extra white spaces or the extra carrots symbols</p></li>
        <li><p>Every individual code piece wrapped by 'PHP' tag is known as code aka code statement but they form part of the common local space; thus variable names declared/ used in each of these specific code statements have to differ</p></li>
        <li><p>Ensure that you are closing every php statement with an ';'. This represents end of php statement </p></li>
        <li><p>You can use double quotes just like you would use back ticks as template literals for dynamic srings and values</p></li>
        <li><p>This entire list has been dynamically written in php</p></li>
    </ul>" ;?></h4>
<?php echo '<h3>But the role of php is just NOT to write these static html messages. The real power of PHP lies in it being able to dymically outputting the data to be displayed, basis the source data coming from connected database server</h3>';?>

<?php echo "<p><b>Thus we use variables in php as thier stored values can vary depending what is comung from the database servers</b></p>"."<br>";

echo "PHP is a loosely typed language i.e. one doesnt need to specify the variable type at the time of declaring the variables. PHP, automatically ssociates  data type to the variable, depending upon its value. Since, the data types are not set in a strict sense, You can do things like adding a string to an integer without causing a fatal error "."<br>";
echo"In PHP7, type declerations ere added. This gives an option to specify data type expected when declaring a function, and by enabling the strict requirement, PHP can be made to throw a Fatal Error on type mismatch"."<br>";
?>




<?php 
$name="Kunal";
echo "<h2>Hello, $name</h2>"; // <!-- This just works same as template literals in JavaScript-->
?>
<h1><?php echo "The alternative way of doing this is by CONCATENATION' ie. a '.' operator"." BEING CONCATENATED WITH ".$name;?></h1>


    
</body>
</html>