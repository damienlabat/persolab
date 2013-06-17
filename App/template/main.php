<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang='en' class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang='en' class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang='en' class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang='en' class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Damien Labat - Laboratoire</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link href="./asset/main.css" media="all" type="text/css" rel="stylesheet">



         <!-- Fav and touch icons -->

    </head>
    <body>
        <div id='container'>
            <h1>Laboratoire</h1>

<?php

        foreach ($page->blocs as $bloc)
            echo $bloc;

?>

        </div> <!-- /container -->


        <script>window.jQuery || document.write('<script src="./asset/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>



        <script src="./asset/main.js"></script>



    </body>
</html>
