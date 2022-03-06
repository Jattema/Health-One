<!DOCTYPE html style= "background-color:lightblue";>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
global $products;
?>
<body style= "background-color:lightblue";>
    <div class="container" style= "background-color:lightblue";>
<div class = "card-group">
<div class="col-md-7 order-md-2">
                <img class="img-fluid" src="<?= $product->picture; ?>" alt="image">
     
            </div>
            <div class="col-md-5 order-md-1">
                <p class="lead">
                    
                
                 <?= $product->description?>
                </p>
            </div>
            
</div>

            
<form method="post">
    <label name="review">Name:</label>
    <input name="name"type="text"><br>
    <label name="rating">Rating:</label>
    <input name="rating"type="number"><br>
    <label name="review">Review:</label>
    <textarea name="review" type="text"></textarea>
    <input name="submit" type="submit" value="Submit">
</form>

<?php
global $pdo;
if(isset($_POST['submit'])){
    if (!empty($_POST['name']) && !empty($_POST['review']) && !empty($_POST['rating'])) {
        $name = $_POST['name'];
        $review = $_POST['review'];
        $rating = $_POST['rating']; 

        $sql = $pdo->prepare("INSERT INTO review (reviewname, evaluation, rating, product_id) VALUES ('$name', '$review', '$rating', '$product->name')");
        $sql->execute();
    }
}
?>
    <?php
    include_once ('defaults/footer.php');
    ?>
</body>
</html>