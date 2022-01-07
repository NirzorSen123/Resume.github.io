<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:" .$name. "<" .$email. ">\r\n";

$recipient = "nirzor255sen@gmail.com";

mail($recipient,$message,$mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/b419a25ad3.js" crossorigin="anonymous"></script>
    <title>Contact us</title>

</head>

<body>
    
            <div class="contact-col2">
                <h1>Thank you for contact with us. We will get back to you as soon as possible.</h1>
                <p class="back">Go back to the <a href="contact.html">Contact page</a>.</p>
           </div>
    


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
        </script>
    <script src="script.js"></script>


    
</body>

</html>








';





?>
