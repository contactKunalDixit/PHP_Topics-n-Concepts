
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ******************************************************************************************** -->

<!-- CHAP 2: PHP ERROR REPORTING -->

<h3>
    <?php 
        
        
        echo "We would not want to display error/s as output in Production environment but we need the error reporting in Development environment."."<br>";


        echo "We can modify the php.conf file >> display_error switch to On and Off to modulate what error message info gets displayed."."<br>" ;
        
        // Try commenting out the variable and then echoing its output. Since, it is not considered to be a fatal error, the php continues its execution and doesnt even report it as fatal error.
        $first_name = "Sonal";
        echo $first_name;

        ?></h3>



</body>
</html>