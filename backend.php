<?php
    //these errors give my project problems for some reason
    ini_set("display_errors", "off");
    $dbInit = mysqli_connect("localhost", "root", "", "401db");

    if(!$dbInit){
        echo "<h1>Database connection has failed<h1>";
    }

    $mydb = "SELECT * FROM blogs";
    $mytable = mysqli_query($dbInit, $mydb);

    //set up a new post in the database
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $mydb = "INSERT INTO blogs(title, content) VALUES('$title', '$content')";
        
        mysqli_query($dbInit, $mydb);
        echo $mydb;
        header("Location: index.php?info=added");
        exit();
    }

    //used for pulling back down all existing posts
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $mydb = "SELECT * FROM blogs WHERE id = $id";
        $mytable = mysqli_query($dbInit, $mydb);
    }

    //delete a post that already exists
    if(isset($_REQUEST['delete'])){
        $id = $_REQUEST['id'];
        $mydb = "DELETE FROM blogs WHERE id = $id";
        mysqli_query($dbInit, $mydb);
        header("Location: index.php");
        exit();
    }

    //update an exisiting post with a new tile or content
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $mydb = "UPDATE blogs SET title = '$title', content = '$content' WHERE id = $id";
        mysqli_query($dbInit, $mydb);
        header("Location: index.php");
        exit();
    }

?>