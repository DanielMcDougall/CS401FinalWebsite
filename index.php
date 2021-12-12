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
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a class="active" href="about.php">About</a>
</div>

<div style="padding-left:16px">
  <h2>Sports Unlimited: Home of All Things Sports</h2>
  <p></p>
</div>

    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="working" role="alert">
                    Post Added!
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="newblog.php" class="button">Create a New Entry</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($mytable as $q){ ?>
                <div class="centercontent">
                    <div class="postformat">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="button">Read More</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
       
    </div>

</body>
</html>
