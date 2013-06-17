<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8">
        <title>Lab update</title>
        <meta name="description" content="">
        <meta name="robots" content="noindex">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">

        <style>
            pre {
                background: none repeat scroll 0 0 #FFFFDD;
                border: 1px solid #DDDDDD;
                border-radius: 5px 5px 5px 5px;
                font-size: 10px;
                overflow: visible;
                padding: 7px;
            }

           a {
                -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
                -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
                box-shadow:inset 0px 1px 0px 0px #ffffff;
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
                background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
                background-color:#ededed;
                -moz-border-radius:6px;
                -webkit-border-radius:6px;
                border-radius:6px;
                border:1px solid #dcdcdc;
                display:inline-block;
                color:#777777;
                font-family:arial;
                font-size:15px;
                font-weight:bold;
                padding:6px 24px;
                text-decoration:none;
                text-shadow:1px 1px 0px #ffffff;
                width: 150px;
                display: block;
                margin: 0 auto;
                text-align: center;


            }

            a:hover, a:focus {
                background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
                background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
                filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
                background-color:#dfdfdf;
            }
            a:active {
                position:relative;
                top:1px;
            }
        </style>



    </head>
    <body>

        <a href='./'>voir</a>
            <pre><?= htmlentities($this->html) ?></pre>
        <a href='./'>voir</a>
        <br/>
        <a href='./update.php'>update</a>

    </body>
</html>
