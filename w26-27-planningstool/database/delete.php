<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">

    <title>Formulier</title>
    <meta name="description" content="Theus de Zeeuw">
    <meta name="author" content="SitePoint">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″ />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <?php if ($_GET["succes"] == "1") {
        echo '<style> .confirm{ display: block; } </style>';
    }  
    ?>
</head>

<body>  

    <div class="item container">
        <div class="formulier">

            <div class="confirm">
                <p>Succesful added</p>
            </div>

            <form action="include/send.php" method="POST">
                <p>Naam van het spel: <input required list="browsers" name="GameName">
                    <datalist id="browsers">
                        <option value="7 Wonders">
                        <option value="10min Kraak">
                        <option value="Camel Up">
                        <option value="City Of Horror">
                        <option value="Climbers">
                        <option value="Codenames">
                        <option value="Concept">
                        <option value="Counterfeiters">
                        <option value="Dale Of Merchants">
                        <option value="Dixit">
                        <option value="Downforce">
                        <option value="Dragon Flagon">
                        <option value="Fantasy Realms">
                        <option value="Ghost Finding Treasure Hunters">
                        <option value="Gizmos">
                        <option value="Jhon">
                        <option value="Keep Talking And Nobody Explodes">
                        <option value="Lemming Mafias">
                        <option value="Micropolis">
                        <option value="Misterium">
                        <option value="Notalone">
                        <option value="Pandemic">
                    </datalist></p>

                <p>Host: <input required name="Host" placeholder=""></p>

                <p>Spelers: <input type="number" required name="Players" min="2" max="12" placeholder=""></p>

                <p>Tijd (Start): <input type="time" value="" required name="StartTime" placeholder=""></p>

                <p>Tijd (Eind): <input type="time" value="" required name="EndTime" placeholder=""></p>

                <button class="submit">Toevoegen</button>
            </form>
        </div>
    </div>
</body>

</html>