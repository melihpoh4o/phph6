<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 4-4-2019
 * Time: 10:04
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in from</title>
</head>
<body>
<form action="" method="post" accept-charset="utf-8">
    <table>
        <caption>Login Form</caption>
        <tr>
            <td>Email</td>
            <td><input type="text" name="user" value="" placeholder="User Name" /></td>
        </tr>

        <tr>
            <td>Wachtwoord</td>
            <td><input type="text" name="pass" value="" placeholder="User Name" /></td>
        </tr>

        <tr>
            <td colspan="2"> <input type="submit" name="login" value="Login"> </td>

        </tr>


    </table>
</form>
</body>
<?php

$user = "login";
$pass = "a!A12345";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=loginformulier;port=3306' , $user, $pass);
    foreach($dbh->query('SELECT * from wachtwoorden') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
</html>
