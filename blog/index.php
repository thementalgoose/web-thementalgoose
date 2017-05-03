<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <?php include "../php/header.php"; ?>

    <?php 
        require ('../php/Parsedown.php');
    ?>
</head>
<body>

    <?php include "../php/nav.php"; ?>

    <div class="container-fluid background-primary" style="height: 30%;">
        <div class="container" style="height: 50%;">

        </div>
        <div class="container text-center" style="height: 50%;">
            <h1 style="color: #FFF;">Blog</h1>
        </div>

        <div class="container">
            <div class="col-sm-4 col-xs-2">
                <h2>Posts</h2>
                <h4><a href="#">Continuous Deployment on a VPS</a></h4>
            </div>
            <div class="col-sm-8 col-xs-10">
            <?php
                $parsedown = new Parsedown();
                $file_contents = file_get_contents('posts/continuousdeployment.md'); 
                echo $parsedown -> text($file_contents);
            ?>
            </div>
        </div>
    </div>

    <?php include "../php/scripts.php"; ?>

</body>
</html>