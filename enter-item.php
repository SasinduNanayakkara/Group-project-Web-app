<?php

require_once("include/connection.php");
?>

<?php

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $code = mysqli_real_escape_string($connection, $_POST['code']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
    $location = mysqli_real_escape_string($connection, $_POST['location']);

    $query = "INSERT INTO keyboards (keyboard_name , item_code, price, keyboard_location)
                    VALUES('{$name}', '{$code}','{$price}','{$location}')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "OK";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="enter-item.php" method="post">
        <label for="name">name</label>
        <br>
        <input type="text" name="name" id="">
        <br>
        <label for="code">code</label>
        <br>
        <input type="text" name="code" id="">
        <br>
        <label for="price">price</label>
        <br>
        <input type="text" name="price" id="">
        <br>
        <label for="location">location</label>
        <br>
        <input type="text" name="location" id="">
        <br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>

</html>