<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container" style= "background-color:grey;">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/adminpageMenu.php');
    ?>
    <h4>
        <?php
        if(isset($_SESSION['username'])){
            echo "Welkom terug ". $_SESSION['username'];
        }
        ?>
    </h4>
    <br>
    <?php
    include_once ('defaults/pictures.php');
    include_once ('defaults/footer.php');

    ?>
</div>
</body>
</html>
