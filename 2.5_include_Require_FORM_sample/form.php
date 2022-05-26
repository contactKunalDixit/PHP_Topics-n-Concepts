
 <?php 
 include "../Include/Incl.php";
// require "./Incl.php";

// Include or require;

// require_once OR include_once shsould be used as they are better options than include or require. 

// If the same file is being included at two diffrent junctions, it will lead to fatal error because the file cannot be included more than once. So, if the chance is that you would be including/requiring a file more than once, then PLEASE use include_once OR require_once to avoid any FATAL error.


 echo "<h1>$title</h1>"; ?>

    <h2>
    <?php echo "Welcome".$_GET['fname'].$_GET['lname'] ?>
    </h2>
    <h1>Hello Server</h1>


</body>
</html>