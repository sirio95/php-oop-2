<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Products</title>

    <?php
    require_once 'main_classes.php';

    $cat_food = new Food("croccantini buoni", 5, 19.99, "crocchette multivitaminiche", "2025", "pesce, carne, vitamine");
    $cat_hygene = new Hygene("anti-pulci", 50, 11.99, "spray contro le pulci", "applicare una volta a settimana", "sciacquare abbondantemente le mani dopo l'uso");
    $cat_play = new Play("topo di gomma", 3, 5.99, "topolini di gomma dura, con campanellino all'interno", "tutte le eta'");
    $cat_med = new Meds("pozione polisucco", 33, 15.99, "pozione polisucco per gatti", 2031, "far bere aggiungendo all'acqua o alla pappa", "attendere che faccia effetto e il gatto si trasformerà magicamente in un cane");
    $cat_bed = new Beds("lettiera antiodori", 2.5, 7.99, "lettiera assorbi-odori", "2/3 settimane", "rimuovere non appena di colorazione blu oltremare", "tutte le eta'");

    $dog_food = new Food("tutti i gusti tranne uno", 10, 24.99, "crocchette multigusto", "2026", "tutti tranne uno");
    $dog_hygene = new Hygene("digestivo", 33, 9.99, "digestivo post-crocchette", "far bere dopo il consumo di crocchette", "Provoca flautolenza. Stare alla larga!");
    $dog_play = new Play("sgranocchio da latte", 5, 7.99, "ossi adatti alla stimolazione dentale dei cuccioli", "da 1 a 18 mesi");
    $dog_med = new Meds("collare anti-graffio", 5, 30.99, "collari antigraffio con allaccio ergonomico", "nessuna scadenza", "applicare direttamente al posto del collare per una durata massima di una settimana", "il collare usato non può essere riutilizzato previa estensiva sterlizzazione");
    $dog_bed = new Beds("copertina indistruttibile", 1, 89.99, "Coperta in fibre di vibranio. A prova di Hulk.", "in eterno", "coperta in fibre di vibranio foderate in pile. Comoda e indistruttibile", "sopra i 24 mesi (per non rischiare perdite improvvise di denti)");

    $cat = new Cats($cat_food, $cat_hygene, $cat_play, $cat_med, $cat_bed);
    $dog = new Dogs($dog_food, $dog_hygene, $dog_play, $dog_med, $dog_bed);

    var_dump($cat);
    var_dump($dog);

    ?>

    <style>


    </style>
</head>

<body>
    <h2>Prodotti animali</h2>
    <div class="container">
        <section class="cat">
            <?php
            echo $cat_food->get_html_food()
                . $cat_hygene->get_html_hygene()
                . $cat_play->get_html_play()
                . $cat_med->get_html_meds()
                . $cat_bed->get_html_bed();

            ?>
        </section>
        <section class="dog">
            <?php
            echo $dog_food->get_html_food()
                . $dog_hygene->get_html_hygene()
                . $dog_play->get_html_play()
                . $dog_med->get_html_meds()
                . $dog_bed->get_html_bed();
            ?>
        </section>
    </div>

</body>

</html>