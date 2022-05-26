
<div class="container">
<?php 
        $title = "POST Input";
        include "../Include/header.php";
        
      ?>
            
<form action="" method="POST" class="formSection">
  
    <div class="inputFields">
        <label for="email">Email: </label>
        <input type="text" id="email" name="Email">     <!-- In the email input, we have set "type" as "text" and not "email" because we can put validation restrictions for type "text" but not for type "email". Type "email" has been introduced in html5 and it becomes browser's responsibility to check for email validation but since not all browsers support html5, hence we should stick to the conventional method and put our email validation checks whih is only possible if we set type as "text "   -->
    </div>
    <div class="inputFields">
        <label for="password">Password: </label>
        <input type="password" id="password" name="Password">    
    </div>
    
    <button type="submit" name="login">LOGIN</button>
    
    <!-- Notice the button above doesnt have any "name" attribute because there is a SINGLE form and there isnt need for that attribute.
    But in case there would be more than one form being handled by the same php file, then We'll have to include a "name" attribute for each of the submit button. The same specific "name" value would help us diffrentiate each of the specific forms -->
</form>

<?php 
   // $_SERVER is another SUPER GLOBAL and the standard key "REQUEST_METHOD" within helps capture the request method. 
// The below should be used if there is ONLY a single form in the PHP file. 

// if ($_SERVER["REQUEST_METHOD"]=="POST"){
//    if ( !filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL))   {         //VALIDATION CHECK FOR AN EMAIL
//       echo "Please enter a valid Email address";
//     }else{
//       echo $_POST["Email"];
//     };
// }

  
// ?>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
$email = $_POST["Email"];
echo $email."<br>";

if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
    echo("Email is not valid")."<br>";
    

} else {
    echo("Email is valid");
}
}

?>
<br>

<!-- Alternately to above, especially in the case of multiple forms in the same php file; we can also check, which form was submitted by using isset()i.e. checking for a specific superGlobal $_POST[<Key>]'s value. This way we can also track if there has been request recieved for logging in -->

<?php 
// if(isset($status)) {
//       echo $status;
// };
?>
</div>

    </div>
</body>
</html>