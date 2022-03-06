<!doctype html>

<head>
    <?php
    global $products;
    include ('../Templates/defaults/head.php');
    ?>
</head>
<style>
    .square{
        background-color:grey;
    }
</style>
<body style= "background-color:grey;">
<?php
echo "<div class=' square container'>";
include ('../Templates/defaults/header.php');
include ('../Templates/defaults/menu.php');
?>
<br>
<?php

echo "<div class='row'>";

foreach ($products as $product) {
    echo "<div class='col-lg-2'>";
    echo "<div class='card'>";
    echo "<a href='/product/$product->id'>";
    echo "<img class='card-img img-fluid' src='/img/categories/crosstrainer/$product->picture'>";
    echo "</a>";
    echo "<h3 class='text-center'><i>$product->name</i></h3>";
    echo "</div>";
    echo "</div>";
}
echo "</div>";
?>
<hr>
<?php
include ('../Templates/defaults/footer.php')
?>
</body>
</html>