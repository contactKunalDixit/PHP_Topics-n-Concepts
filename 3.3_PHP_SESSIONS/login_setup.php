<?php
// <!-- Scenario: we would be using an email address to determine wether the user is logged in -->
session_start();    //Should be the 1st line

$title = "PHP SESSION SuperGlobal";

include_once "../Include/config.php";
include_once "../Include/functions.php"; 

if (is_user_authenticated()){
    redirect("admin.php");
    die();
}// This is in reverse of a function in admin.php which checks that if the user is logged in in the session, then it wont asks for credentials but sinply redirects to admin.php file. If  ot logged in then 

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    

//validation check for Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $statusEmail = "$email is a valid email address";
        }
        else{
           $statusEmail = "$email is not a valid email address";
        };

// Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                    $statusPassword = "<br>".'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                }else{
                    $statusPassword =  'Strong password.';
                };

// Authenticating the user for the session  and POST that deciding what to do if the authentication comes through

    // !compare the credentials with the data store. typically, that's what we do but since there is no database as of now, hece we compare the credentials with the made up data in the config.php file in INC folder.
    // ! We will compare the constant's value with the $email and $password values recieved above, and basis the result of that comparison, we'll either set our session to remember the email address or not AND that's how we'll determine wether the user is logged in or not.
    if (authenticate_user($email,$password)) {     //authenticate_user function is coming in from "Include" folder
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        // ! If authentication succesful; then assign Session's variables and values equivalent to user's credentials.
            //  header("Location:admin.php");            //if authenticated succesfully, we'd like to redirect user to a new page
            // TO RE-direct, we use a header function, and pass a Location that you'd want the user to redirect to. So, to set a header, we use a function "header" and pass the location as the arguement. 
            // Since we would be REdirecting a user many a times in the app. It would make more sense to encapsulate this header instruction into a function, say "redirect()"
        redirect("admin.php");  
        die();      //Equivalent to EXIT as we wouldnt want any further processing; similar to break in JS
    } else {
       $status= "Incorrect User Credentials";
    };
}
include_once "../Include/header.php"; 

//! Observe : Header is being added here and not before 
//! that's because redirect() involves setting the header, and before we send any HTML to the browser, we need to set our headers because that's just the right thing to do. 
//! because all the authentication checks are supposed to performed before the response is sent back from servers
?>
<div class="container">            
<form action="" method="POST" class="formSection">
    <div class="inputFields">
        <label for="email">Email: </label>
        <input type="text" id="email" name="Email">     
    </div>
    <div class="inputFields">
        <label for="password">Password: </label>
        <input type="password" id="password" name="Password">    
    </div>
    <button type="submit" name="login">LOGIN</button>
</form>
<?php echo $statusEmail."<br>".$statusPassword?>

<br>


</div>
</div>
</body>
</html>


