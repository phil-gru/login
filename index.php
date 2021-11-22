<?php
session_start();
include 'connection.php';

if(!isset($_SESSION['userid'])) {
    header('Location: login.php');
    exit;
}
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];

//Abfrage des Usernames
$user = "SELECT * FROM users WHERE id = $userid";
foreach ($db->query($user) as $row) {
   echo $row['username'];
   $username = $row['username'];
}

  echo " ID: ".$userid;
?>

<a href="logout.php">Logout</a>
