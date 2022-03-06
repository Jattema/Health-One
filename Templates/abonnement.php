<!DOCTYPE html style= "background-color:;">
<html lang="en">
<head>
<?php
include ('../Templates/defaults/header.php');
include_once('defaults/head.php');
include_once('defaults/menu.php');
?>
<style>
        form, table{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        th, td {
    outline: solid 2px lightgreen;
}
th {
color: white
}
td {
color: white
}
    </style>
</head>
<body style= "background-color:grey;">
    <div class="container" style= "background-color:grey;">
    <br><br><br>
    <form method="post">
    <select name="subscribtion_id">
                <option selected disabled value="">Kies een abonnement</option>
                <?php
                global $pdo;
                $sql = $pdo->prepare("SELECT * FROM subscribtions");
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                foreach($result as $data) {
                    echo "
                        <option selected enabled value='$data[tier]'>" . $data['tier'] . "</option>
                    ";
                }
                ?>
            </select>
            <input type="submit" name="submit">
            </form>

            <?php
    global $pdo;
    if(isset($_POST['submit'])){

            $subscribtion = $_POST['subscribtion_id'];

            $sql = $pdo->prepare("SELECT * FROM subscribtions");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $data) {
                if ($data['tier'] == $subscribtion) {
                    $tier = $data['tier'];
                    $price = $data['price'];
                    $benefits = $data['benefits'];
                }
            }
            

            echo "
            <table>
                <tr>
                    <th>Abonnement</th>
                    <th>Prijs</th>
                    <th>Voordelen</th>
                </tr>
                <tr>
                    <td>" . $tier . "</td>
                    <td>" . "€" . $price . ",00" ."</td>
                    <td>" . $benefits . "</td>
                </tr>
            </table>";
         
    }
?>


    </div>
</body>
</html>