<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    echo ("<pre>");
    print_r($_FILES);
    //An Associative array of items uploaded through POST method 
    $errors = [];
    $fileName = $_FILES["fileToUpload"]["name"];
    $file_tmp = $_FILES["fileToUpload"]["tmp_name"];
    $file_size = $_FILES["fileToUpload"]["size"];
    $fileType = $_FILES["fileToUpload"]["type"];
    $fileExplode = explode(".", $fileName);
    $fileExtn = strtolower(end($fileExplode));
    $fileDestination = getcwd() . "/uploads/" . $fileName;
    echo $fileDestination . "<br>";
    // die();
    $target_dir = getcwd() . "/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    echo $target_file . "<br>";

    // Validation Checks
    //  check for extension types:
    $allowedExtns = ["jpg", "jpeg", "png", "pdf"];
    if (!in_array($fileExtn, $allowedExtns)) {
        $errors[] = "Invalid file extension. Only jpg, jpeg and png allowed";
    };

    // check for file size:
    if ($file_size > 20971520) {
        $errors[] = "FIle size should not be greater than 20MB";
    };

    // If the above validation checks come through succesfully. i.e. if there re NO errors, i.e. the $errors[] is empty till now, then:
    if (empty($errors)) {

        if (move_uploaded_file($file_tmp, $fileDestination)) {
            echo "File Uploaded successfully";
        } else {
            echo "File couldnt be uploaded";
        };
        //Returns True, if uploaded file moved to the new location; else False
    } else {
        echo "<pre>";
        print_r($errors);
    }

    // echo ("<pre>");
    // print_r($fileExtn);
}
