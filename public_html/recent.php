<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'modernhospital');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $mysqli->real_escape_string($_POST['title']);
    $description = $mysqli->real_escape_string($_POST['description']);
    $user_id=$_SESSION['docid'];
        $sql = "INSERT INTO posts (postsTitle, postsCount,user_id) VALUES ('$title','$description','$user_id')";
        //print_r($sql);exit();
        if($mysqli->query($sql) == true)
        {
        header("location:profile.php");
        }
}
?>