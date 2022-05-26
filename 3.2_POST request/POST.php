
<!-- POST request is used to 

when the data needs to be updated
or when a state of the application has to change
or when sensitive info needs to be shared or updated

$_POST, (like $_GET) is also a super global and is an associative ARRAY which captures all the info sent by user through POST request  

By Default, the browser always will be sending the data through a GET request. So, How do you instruct it to send the data through "Post" method ?
Well, the only way to do that is to either do it through JavaScript Or HTML way. In here, We'll be discussing the HTML way.
The only way in HTML to specify and instruct is to use the FORM tag and use the attribute "method = 'POST'" in there. 

<form action="" method = "POST" ></form>

    * mention the file name in "action", where you'd want to share this data. (It'll have the php extension). If you leave it blank like above, then it'll be defaulting to the current page.


    SUMMARY:

    SUPER RULE: 
    
    x x x x x x @@@@@ *** VALIDATION for every user input is SUPER Important, so never forget *** @@@@@@ x x x x x x

    1.  If you have multiple forms in the same PHP file, give a name attribute to the submit buttons so that the same can be identified with the isset() function as shown above.
    2.  Before starting with POST request prcessing, make sure we have a POST request. If you have a single form, check through 
        if ($_SERVER["REQUEST_METHOD"]=="POST"){...}
    BUT
        If you have a multiple forms within the same PHP file, check for the name of the button; 
            if(isset($_POST["login"]){
                ...
            }

-->


