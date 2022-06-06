<!-- 
1. Ensure that PHP configuration file "php.ini" file is configured to allow uploads.
file_uploads should be "On".

2. Create the HTMl form:
    //! Make sure that the form uses method = "post"
    //?? the form tag should also have attribute enctype = "multipart/form-data". it specifies which content-type to use when submitting the form.
    //todo: use the type="file" attribute in input tag
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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h3>Select file to upload</h3>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="SUBMIT" name="submit" />
    </form>
</body>

</html>

<!-- 
// !    Submitting the upload will result in generation of global predefined variable $_FILES. 
//!     It is an associative array containing items upload via HTTP POST method.


 -->