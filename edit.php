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

   <div class="">
        <?php foreach($mytable as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Blog Title" name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="textarea" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <button class="button" name="update">Update</button>
            </form>
        <?php } ?>    
   </div>
</body>
</html>