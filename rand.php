<?php

$chars = "qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP_\|/~!@#$%^&*,.";
$lenght = 8;

if (isset($_POST["submit"])) {
    $lenght = (int)$_POST["text"];
    $pass="";
    while($lenght--)
        $pass.=$chars[rand(0, strlen($chars)-1)];
        echo $pass;

}
?>

<form action="" method="post" name="count">

    <input type="text" required name="text">
    <input type="submit" name="submit" value="Генерировать пароль">

</form>
