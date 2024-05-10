<?php

if (!isset($_GET['id'])) {

	echo("Cette oeuvre n'existe pas.");
	
    return;
}
  
else {
    if ($_GET['id']<1 or $_GET['id']>15) {

        echo("Cette oeuvre n'existe pas.");
	
        return;
    } 

    else {

        $idoeuvre =($_GET['id']);
    }  
}

require_once('oeuvres.php');
$oeuvre =$oeuvres[$idoeuvre-1];

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>The ArtBox</title>
    </head>
    <body>
        <?php include('header.php'); ?>
        <main>

            <article id="detail-oeuvre">

                <div id="img-oeuvre">
                    <img src="<?=$oeuvre["image"]?>" alt="<?=$oeuvre["name"]?>">
                </div>

                <div id="contenu-oeuvre">
                    <h1><?=$oeuvre["name"]?></h1>
                    <p class="description"><?=$oeuvre["author"]?></p>
                    <p class="description-complete">
                    <?=$oeuvre["description"]?>
                    </p>
                </div>
                
            </article>

        </main>
        <?php include('footer.php'); ?>
    </body>
</html>
