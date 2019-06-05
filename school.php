<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 4-4-2019
 * Time: 08:59
 */


$user = "zomaar";
$pass = "zomaarwat";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3306' , $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>