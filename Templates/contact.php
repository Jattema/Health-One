<!doctype html>
<html lang="en">
<head>
    <?php
    include ('../Templates/defaults/head.php');
    ?>
    <?php
echo "<div class='container'>";
include ('../Templates/defaults/header.php');
include ('../Templates/defaults/menu.php');

?>
</head>
<body style= "background-color:grey;">

<div class="col-md-5 order-md-1" >
                            <p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.6391890218893!2d4.330076815787973!3d51.
                                    9952296797182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0xf69943896f1def32!2sZuidhoornseweg
                                    %206A%2C%202625dj%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1sen!2snl!4v1634412179669!5m2!1sen!2snl" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </p>
                        </div>
    <div class="mb-3">
<form class="container">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Naam:</label>
        <input type="text" class="form-control" id="Name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We delen uw contact gegevens nooit met anderen.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Uw vraag:</label>
        <textarea class="form-control" id="textareaInput"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<hr>
<?php
include ('../Templates/defaults/footer.php');
echo "</div>";
?>
</body>
</html>