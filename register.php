<?php
/* We will include config.php for connection with database.
   We will get datas from index.php file, and insert them into the database when the Sign up button is clicked in the index.php file.
   If any of the fields are empty, we will get a message */

error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once('config.php');

if (isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);
    $tempConfirm = $_POST['confirm_password'];

    if (empty($emri) || empty($username) || empty($email) || empty($password) || empty($tempConfirm)) {
        echo "You have not filled in all the fields.";
    } else {
		$sql = "INSERT INTO users(emri, username, email, password, is_admin, confirm_password) VALUES (:emri, :username, :email, :password, 0, '')";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(':emri', $emri);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);

        if ($insertSql->execute()) {
            header("Location: login.php");
        } else {
            echo "Error occurred while registering.";
        }
    }
}
?>