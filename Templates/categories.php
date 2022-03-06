<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');

?>
<style>
    .square{
        background-color:grey;
    }
</style>
<body style= "background-color:grey;">

<div class="container" style= "background-color:grey;">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    ?>

<br>
    <?php
    $categories=getCategories();
    echo "<div class=' square container m-auto row'>";
    global $categories;
    foreach ($categories as $category){
        echo "<div class='card col-lg-3'>";
        echo "<a href='/category/$category->id'>";
        echo "<img class='card-img' src='$category->picture'>";
        echo "</a>";
        echo "<h4 class='text-center'>$category->category_name</h4>";
        echo "</div>";
    }
    echo "</div>";
    ?>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>

