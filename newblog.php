<?php
    include "backend.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image" href="favicon_package_v0.16/favicon-32x32.png">
    <title>Sports Unlimited Blogging</title>
    <h1>Blogging Starts Here.</h1>
</head>
<body>

   <div>
        <form method="POST">
            <input name="title" cols="10" rows="5">
            <textarea name="content" cols="80" rows="120"></textarea>
            <button class="button" name="new_post">Add Post</button>
        </form>
   </div>

</body>
</html>