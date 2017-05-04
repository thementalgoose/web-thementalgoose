<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <?php include "../php/header.php"; ?>

    <?php 
        require ('../php/Parsedown.php');
        class Post {
            public $filename;
            public $title;
        }

        $posts = array();
        foreach (glob("posts/*.md") as $file) {
            $path_parts = pathinfo($file);
            $p = new Post();
            $p -> filename = $path_parts['filename'];
            $f = fopen($file, 'r');
            $p -> title = fgets($f);
            $p -> title = substr($p -> title, 2);
            fclose($f);
            array_push($posts, $p);
        }

        function checkValid($array, $value) 
        {
            foreach ($array as $key => $myValue) {
                $val = $myValue -> filename;
                if (strcmp($val, $value) === 0) {
                    return true;
                }
            }
            return false;
        }
    ?>
</head>
<body style="background: #F5F5F5;">

    <?php include "../php/nav.php"; ?>

    <div class="container-fluid background-primary" style="height: 30%;">
        <div class="container" style="height: 50%;">

        </div>
        <div class="container text-center" style="height: 50%;">
            <h1 style="color: #FFF;">Blog</h1>
        </div>
    </div>
    <div class="background-primary">
        <div class="container">
            <div class="blog-background-top col-sm-offset-3 col-sm-9 col-xs-12">
                <?php 
                    if (isset($_GET['p']) && checkValid($posts, $_GET['p'])) {
                        $file = 'posts/' . $_GET['p'] . '.md';
                        echo "<p class=\"visible-xs\" style=\"padding-top: 20px; padding-bottom: 40px;\"><span class=\"pull-right\"><button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#largeModal\">Posts</button></span></p>";
                        $f = fopen($file, 'r');
                        echo "<h1>" . substr(fgets($f), 2) . "</h1>";
                        fclose($f);
                    } else {
                        echo "<h1>Welcome! <i class=\"fa fa-rocket\" aria-hidden=\"true\"></i> </h1>";
                    }
                ?>
                
            </div>
        </div>
    </div>
    <div class="container">
        <?php 
            if (isset($_GET['p']) && checkValid($posts, $_GET['p'])) {
                echo "<div class=\"hidden-xs col-sm-3\">";
                echo "<h2>Posts</h2>";
                echo "<ul>";
                foreach ($posts as $key => $value) {
                    echo "<li><a href=\"?p=" . $value -> filename . "\">" . $value -> title . "</a></li>";
                }
                echo "</ul>";
                echo "</div>";
            }
        ?>
        <div class="blog-background-bottom col-sm-9 col-xs-12 <?php if (isset($_GET['p']) && checkValid($posts, $_GET['p'])) { echo "margin-bottom-20"; } else { echo "col-sm-offset-3"; } ?>">
            <?php
                if (isset($_GET['p']) && checkValid($posts, $_GET['p'])) {
                    $parsedown = new Parsedown();
                    $file_contents = file_get_contents('posts/' . $_GET['p'] . '.md'); 
                    $lines = explode("\n", $file_contents);
                    $file_contents = implode("\n", array_slice($lines, 1));
                    echo $parsedown -> text($file_contents);
                } else {
                    echo "<p>Here you will find some writings and tutorials that i've done and documented in the past</p>";
                }
            ?>
        </div>
        <?php 
            if (!isset($_GET['p']) || !checkValid($posts, $_GET['p'])) {
                echo "<div class=\"col-xs-12\">";
                echo "<h2>Posts</h2>";
                echo "<ul>";
                foreach ($posts as $key => $value) {
                    echo "<li><a href=\"?p=" . $value -> filename . "\">" . $value -> title . "</a></li>";
                }
                echo "</ul>";
                echo "</div>";
            }
        ?>
    </div>
    <a href="#" class="fab text-center"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
 
    <div id="largeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Posts</h4>
                </div>
                <div class="modal-body">
                    <ul>
                        <?php
                            foreach ($posts as $key => $value) {
                                echo "<li><a href=\"?p=" . $value -> filename . "\">" . $value -> title . "</a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php include "../php/scripts.php"; ?>

</body>
</html>