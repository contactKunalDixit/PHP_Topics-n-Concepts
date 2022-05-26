<!-- 
HTTP is a STATELESS protocol. 
That means when you send a request to a web server and the web server sends back the response, it compeletly forgets about you.  All that it cares about is that a request was made and it was responded to. After that it ceases to register that. 
After a request -response cycle is completed, it will not know who the user was , what was asked etc.
It doesnt register or records the past requests and corresponding reponses recieved. 

BUT then, how does BIG companies keep a past track record of thier users?
They can do it because they are working through thier respective Apps and not just simply working alone on Web Servers.
Thier Apps just dont RUN on the Web Servers but rather run in some RUNTIME ENVIRONMENT.
PHP is a RUNTIME environment. Its an application platform. This is one of the reasons why we have runtime environment - To MAINTAIN STATE IN OUR APPLICATIONS - Which actually is the sole reasons why apps are created - TO MAINTAIN STATE.
SO THE ONLY REASON WE HAVE RUNTIME ENVIRONMENTS LIKE PHP, RUBY ON RAIL, NODEJS, ASP.NET etc IS TO WRITE STATEFULL APPLICATIONS WHICH CAN RUN ON WEB SERVERS.      
But that's how big companies like google, AMazon etc keep a track and record of thier users through thier Apps which run on the web servers but help these companies maintain a STATE.

In PHP, we maintain a STATE by another superGlobal named $_SESSION.

//! A Session is a way to store information (in variables) to be used across multiple pages.

//! Unlike a cookie, the information is not stored in the user's computer BUT on the SERVER's Side.

//! When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

//! Session variables solve this problem by storing user information at the Server's end, to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

//! Tip: If you need a permanent storage, you may want to store the data in a database.

//! How does it work? How does it know it's me?

//! Most sessions set a user-key on the user's computer that looks something like this: 765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.

STEP1:  DO session_start() at the start of the PHP file in order to ensure that php runtime environment does stores the session information within that superglobal.
use session_start() on every php file where we want to use session info ans it needs to be the very first thing you do in that file. Many developers would make it a habt to make it the first line in the PHP file. We'd like to set it at the start BEFORE any information is sent to server or recieved from there in order to ensure nothing is missed out.
So IDEALLY , session_start() should come even before headers. 
ALWAYS MAKE IT THE VERY FIRST LINE, ELSE THERE WILL AN ERROR.  

Q: WHAT IS SESSION DATA?
A: SESSION DATA can be anything but it is usually used to store the user data like user credentials or emails etc. info which would not occupy much of the memory or disk space. The idea is to store a state by storing least amount of Info.  

SESSION DATA IS ALSO USED FOR AUTHENTICATING THE USER.
 
NOTE: IMPORTANT 

// ?? SESSIONS are unique for each unique visitor.i.e. If user is on a browser and opens another tab in the same browser session, It'll still be treated as same browser session. Hence, there wouldnt be any need to provide credentials again.
But if we open the incognito mode in the same browser or else open a different browser say microsoft edge or firefox, then that'll be treated as a new browser session.
You dont need to worry about the leakage. i.e. If you've set anything in a session, you dont need to worry about it leaking into another session. That's Because PHP will ensure that those sessions are completely independent of each other. 


//! LOGOUT of the session:

//! Destroy a PHP Session
//! To remove all global session variables and destroy the session, use session_unset() and session_destroy():

session_start();
session_unset();
session_destroy();
 -->