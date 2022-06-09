<?php
 require_once __DIR__ .'/db/db-disc.php' ;
//  var_dump($discs)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- END BOOTSTRAP -->


    <title>Discs</title>
</head>
<body>

    <div class="" id="app">

        <!-- HEADER  -->
        <?php require_once __DIR__ .'/html/header.php'; ?>
        <!-- END HEADER  -->

        <!-- MAIN  -->
        <?php require_once __DIR__ .'/html/main.php'; ?>
        <!-- END MAIN  -->

    </div>

    <script src="main.js"></script>
</body>
</html>


<!-- **Seconda Milestone:**
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue CDN.
Questo file lo chiamate index-vue.html che chiamerà via axios un file che si chiamerà api.php.
api.php includerà lo stesso “database” che viene incluso anche in index.php -->





<!-- **Prima Milestone:**
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
In questa milestone non ci sarà nessuna chiamata axios il file php stamperà direttamente il “database”
Questo file lo chiamate index.php. Il “database” dei dischi è meglio che sia un file esterno che viene incluso -->

