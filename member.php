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
        echo 'First Name : '.$_POST["fname"].'<br>';
        echo 'Last name : '.$_POST["lname"].'<br>';
        echo 'Phone Number : '.$_POST["number"].'<br>';
        echo 'Email : '.$_POST["email"].'<br>';
        echo 'Password : '.$_POST["password"].'<br>';
    
    ?>
</body>
</html>