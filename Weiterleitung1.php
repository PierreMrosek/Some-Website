<!DOCTYPE html>

<html>
    <head>
        <title>Hauptseite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <script src="../Kundenprojekt1/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/CSS" href="../Kundenprojekt1/bootstrap/css/bootstrap.min.css">

    <style>  
        body{
            font: 100.01% Verdana, Arial, Helvetica, sans-serif;
            background-color: lightblue;

        }



        #Linkzurück{
            height: 40px;
            width: 80px;
            background-position: top left;
            margin-top: 10px;

        }

        .Linkbuttons:hover{
            border-color: cyan;
            border-width: 1px;
            transition: border-color 0.1s;

        }

        #iframe{
            background-position: center center;
            margin-top: 10px;


        }

    </style>
    <body>


        <?php

        //Hier den PHP code
        function Link1($param) {
            $line = explode(";", $param);
            echo $line[1];
        }

        $data = file("NamenUndAdressen.txt");
        ?>

        <!-- Ab hier den HTML code --->

        <div id="backbutton">
            <div class="col kachel"><button type="button" id="Linkzurück" class="Linkbuttons" onclick="location.href = 'index.php';">zurück</button></div>

        </div>

        <div id="iframe"> 
            <iframe src="<?php Link1($data[0]); ?>"
                    width="100%" height="1000px" name="iFrameWebseite" scrolling="yes" frameborder="0" overflow="hidden">

                ></iframe>
        </div>


    </body>
</html>
