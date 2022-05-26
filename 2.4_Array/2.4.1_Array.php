<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    $title = "Document";
 echo "<h1>$title</h1>";
    
$cars1 = array("Suzuki","Hyundai","Mazda");

$cars2 = ["Mazda","Suzuki","Hyndai"];

$cars3 = ["car1"=>"CHookiNaka","car2"=>"NaakiNaaki","car3"=>"LoopaLoopa"];

$cars4 = array (                //MultiDimensional Array
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

function carShoutOut($array){
    foreach ($array as $key => $value) {
        echo "<h3>$key => $value </h3><br>";
    };
    echo "<br>";
    
};   



// carShoutOut($cars1);
// carShoutOut($cars2);
// carShoutOut($cars3);

// for ($row=0; $row < 4 ; $row++) { 
//     echo "<p> <b> Row Number $row </b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {    
//       echo"<li>".$cars4 [$row] [$col]."</li>";
//     }
//     echo "</ul>";
// };

function func1($item){
    return "<h3>$item</h3>";
};

?>;
</body>
</html>