<!doctype html>
<html lang="en">
<head>
    <?php
    include ('../Templates/defaults/head.php');
    ?>
    <style>
        table{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        tr, td {
            padding: 12px 20px;
        }
        .opening{
            color:green;
        }
        .sluiten{
            color: red;
        }
    </style>
</head>
<body style= "background-color:grey;">
<div class="container bg-light">
    <?php
    include ('../Templates/defaults/header.php');
    include ('../Templates/defaults/menu.php');
    ?>
    <div class="container bg-dark">
    <h2 class="text-center bg-dark text-danger py-2">Openingstijden</h2>
    <br><br>
        <table class="text-light">
            <tr>
                <td> </td>
                <td>Open</td>
                <td>Sluit</td>
            </tr>
            <tr>
                <td>Maandag</td>
                <td class="opening">9:00</td>
                <td class="sluiten">21:00</td>
            </tr>
            <tr>
                <td>Dinsndag</td>
                <td class="opening">9:00</td>
                <td class="sluiten">21:00</td>
            </tr>
            <tr>
                <td>Woensdag</td>
                <td class="opening">9:00</td>
                <td class="sluiten">21:00</td>
            </tr>
            <tr>
                <td>Donderdag</td>
                <td class="opening">9:00</td>
                <td class="sluiten">21:00</td>
            </tr>
            <tr>
                <td>Vrijdag</td>
                <td class="opening">9:00</td>
                <td class="sluiten">18:00</td>
            </tr>
            <tr>
                <td>zaterdag</td>
                <td class="opening">10:00</td>
                <td class="sluiten">18:00</td>
            </tr>
            <tr>
                <td>Zondag</td>
                <td class="opening">10:00</td>
                <td class="sluiten">18:00</td>
            </tr>
        </table>

    </div>
    <hr>
    <?php
    include ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>
