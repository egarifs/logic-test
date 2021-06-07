<!DOCTYPE html>
<!--Created by egarifs25@gmail.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrom</title>
</head>

<body>
    <form method="post">
        Enter the name or number :
        <input type="text" name="val">
        <input type="submit">
    </form>

    <?php

    if ($_POST) {
        $value = $_POST['val'];
        $reverse = strrev($value);
        if ($reverse == $value) {
            echo "$value is Palindrom : $value = $reverse";
        } else {
            echo "$value is not Palindrom : $value != $reverse";

        }
    }
    ?>
</body>

</html>