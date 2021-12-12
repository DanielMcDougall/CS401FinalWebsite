<?php

    include "backend.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="favicon_package_v0.16/favicon-32x32.png">
    <link rel="stylesheet" href="/css/style.css">
    <title>Sports Unlimited Blogging</title>
    <h1>Blogging Starts Here.</h1>
</head>
<body>

   <div class="container mt-5">

        <?php foreach($mytable as $q){?>
            <div>
                <h1><?php echo $q['title'];?></h1>

                <div>
                    <a href="edit.php?id=<?php echo $q['id']?>" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="button" name="delete">Delete</button>
                    </form>
                </div>

            </div>
            <p><?php echo $q['content'];?></p>
        <?php } ?>    

        <a href="home.php" class="button">Go Home</a>
   </div>
</body>
</html>