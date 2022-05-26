 <!-- // ! $_GET is a super global and is an associative ARRAY which captures all the info sent by user through GET request -->


 <!-- In a normal browser usage session, Whenever a user opens any website or a link on a website, he is more often than not sending GET request to the backend, ehich then eventually replies back by sending the appropriate HTML,  CSS, and JS OR may be generates HTML at backend through PHP .


NOW GET request just sends a request for retrieving a piece of data and nothing else. It cannot be used to alter or manipulate the backend data or used for update of any kind.

GET IS JUST FOR "RETRIEVING" the data. WE dont use it for sending sensitive info as the data is visible in the query string section of the URL.

BUT

While this session happens, the ONLY MAJOR rule to care about is what user sends as a request to the backend.

BASIC RULE: (applies to user sessions too) : Any info that we dont control, we have to treat it as MALICIOUS, hence the strong validation checks that are required.

The Primary way through which we get user information is known as Query String.
Query string is the part of URL that comes after "?". It usually contains the key value pairs, that the web application will be going to do something with.

In normal applications, such key value pairs or query parameters are not present there by default. We need to program them and they need to be specified in the programming of the app. i.e. a specific key value pair would mean a request for some specific data piece, which will be returned as a response from a server; BUT this understanding has to be included in the programming structure of the app i.e. a code needs to be written which will search for that specific piece and make the application to react basis the specific request.

In the URL, type "http://localhost:8888/2.6_GET%20n%20POST%20request/GET.php?productID=20&categoryID=elec250&ID=234"

After the "?", its a query String

So it has been established that whatever we get in the URL as a GET request or POST request in the query string comprises of the user Input, and we can do something with that information.

but if the user comes and say our user input feilds arent equipped to validate the user input, and the user puts some malicious script tag and a code within, the URL would send that info to our backend and THIS CAN LEAD TO HUGE ATTACK on the app and beyond. 

THUS, NEVER TRUST YOUR USER TO ENTER THE INPUTS
BUT 
RATHER VALIDATE ALL USER INPUT FIELDS and VALUES.

x x x x x x @@@@@ *** VALIDATION for every user input is SUPER Important, so never forget *** @@@@@@ x x x x x x
REFER PHP FILTERS SECTION IN the original php documentation to get more info. There is a huge lot of different filters that you be amazed to discover which can help you bring validation in your code.



$_GET is a super global and is an associative ARRAY which captures all the info sent by user through GET request

Benefit of using GET method is that we can store the values in cache (local storage) so that if we send the next request, values will be available in cache itself and we wont have to reinitiate server commnication. Sunh option is NOT available for POST method


-->

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

        $name = $email = "";
        // $nameErr = $emailErr = "";

        function test_input($data)
        {
            $data =  $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] = "POST") {
            if (empty($_POST["userName"])) {
                $nameErr = "Name is Required";
            } else {
                $name = test_input($_POST["userName"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["userEmail"])) {
                $emailErr = "Email is needed";
            } else {
                $email = test_input($_POST["userEmail"]);

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }
        } ?>
     <form action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">
         <label for="uName">Name: </label>
         <input type="text" id="uName" name="userName">
         <span class="error">* <?php echo $nameErr; ?></span>
         <br><br>
         <label for="uEmail">Email: </label>
         <input type="text" id="uEmail" name="userEmail">
         <span class="error">* <?php echo $emailErr; ?></span>
         <br><br>
         <button type="submit" name="submit" value="Submit">Add</button>
     </form>

     <?php
        // require_once "userInputFeed.php";


        echo "<h2>Your Input:</h2>";
        echo "User Name: $name";
        echo "<br>";
        echo "User Email: $email";
        echo "<br>";
        ?>

 </body>

 </html>