<?php

// What is a Cookie ? How is it different from Session:
    
//??    A Cookie is often used to identify the user.
//??    A Cookie is a small info file which the server embeds to the user's computer. Each time the same computer requests a page with a browser, it will send the cookie file alongwith that request too. With PHP, you can oth create and retrievecookie values.
// ??   The value of the cookie is automatically URLencoded when sending the cookie and decoded when recieved

//?? Session variables are stored on the server but Cookie info is stored in the user's computer.



// Cookie Variables: are stored in the super GLOBAL $_COOKIE 

/*

todo :Create/ Retrieve Cookie variables?

setcookie() : Create a cookie

e.g. 
!<?php
! $cookie_Name = "user";
! $cookie_Val = "Kunal Dixit";
! setcookie($cookie_Name,$cookie_Val,time()+86400*30),"/");          ****** The setcookie function MUST always appear before the HTML section. The time() function shows the current time stamp. 86400 is equivalent to 1 day anad then multiplying it with 30 days. i.e. the cookie variable shall exist for 30 days from the moment this function is executed. The "/" means the cookie is available in the root, and hence to the entire website (otherwise, select the directory you prefer)
! ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  ...  
</body>
</html>


! isset() function is often used to check if the Cookie has been set or not
! isset($_COOKIE["cookie_Name"])

if (! isset($_COOKIE["$cookie_Name"]){
    echo "Cookie named ".COOKIE["$cookie_Name"]." has not been set".
}else{
    echo "Cookie named ".$_COOKIE["$cookie_Name"]." has a value of ".$_COOKIE["$cookie_Val"].
}


todo:   Reset aka Modify the cookie:

just set (again) the values using setcookie() function

todo: Delete a Cookie:

just set (again) the values using setcookie() function with the expiration date in the past.
 e.g. setcookie("user", "", time() - 3600); time chosen to be 1 hour before.


! Check if Cookies are enabled or Desabled?
setcookie() and then count the super global $_COOKIE array variables.
The small script below can check this:

<?php 

setcookie("testcookie" , "Test" , time() + 3600 , "/");
<html>
<body>
    <?php if(count($_COOKIE>0){
        echo "Cookies are enabled";
    } else{
        echo "Cookies are NOT enabled";   
    };?>
</body>
</html>





*/

?>