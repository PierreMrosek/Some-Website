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

        .row{
            border: 1px black;
            height: 250px;
            margin: 0 0 0 0;

        }
        .kachel{
            text-align: center; 
            margin: 10px 10px 10px 10px;
        }

        .Linkbuttons{
            position: static;
            float: right;
            height: 100%;
            width: 108%;



        }
        .Linkbuttons:hover{
            border-color: cyan;
            border-width: 5px;
            transition: border-color 0.1s;

        }

        
        #bearbeiten{
            height: 90px;
            width: 100px;
            background-position: bottom right;
            
        }
    </style>

    <body>
        <?php
        //Hier den PHP code
        
        function seitentext($param) {
            $line= explode(";", $param);
            echo $line[0]; 
        }

        
        $data= file ("NamenUndAdressen.txt");
      
               
        
        
        ?>
        <!-- Ab hier den HTML code --->

        <div class="row">
            <div class="col kachel"><button type="button" id="Link1" class="Linkbuttons" onclick="location.href = 'Weiterleitung1.php';"><?php seitentext($data[0]);?></button></div>
            <div class="col kachel"><button type="button" id="Link2" class="Linkbuttons" onclick="location.href = 'Weiterleitung2.php';"><?php seitentext($data[1]);?></button></div>
            <div class="col kachel"><button type="button" id="Link3" class="Linkbuttons" onclick="location.href = 'Weiterleitung3.php';"><?php seitentext($data[2]);?></button></div>
            <div class="col kachel"><button type="button" id="Link4" class="Linkbuttons" onclick="location.href = 'Weiterleitung4.php';"><?php seitentext($data[3]);?></button></div>
            <div class="col kachel"><button type="button" id="Link5" class="Linkbuttons" onclick="location.href = 'Weiterleitung5.php';"><?php seitentext($data[4]);?></button></div>
        </div>

        <div class="row">
            <div class="col kachel"><button type="button" id="Link6" class="Linkbuttons" onclick="location.href = 'Weiterleitung6.php';"><?php seitentext($data[5]);?></button></div>
            <div class="col kachel"><button type="button" id="Link7" class="Linkbuttons" onclick="location.href = 'Weiterleitung7.php';"><?php seitentext($data[6]);?></button></div>
            <div class="col kachel"><button type="button" id="Link8" class="Linkbuttons" onclick="location.href = 'Weiterleitung8.php';"><?php seitentext($data[7]);?></button></div>
            <div class="col kachel"><button type="button" id="Link9" class="Linkbuttons" onclick="location.href = 'Weiterleitung9.php';"><?php seitentext($data[8]);?></button></div>
            <div class="col kachel"><button type="button" id="Link10" class="Linkbuttons" onclick="location.href = 'Weiterleitung10.php';"><?php seitentext($data[9]);?></button></div>
        </div>

        <div class="col kachel"><button type="button" id="bearbeiten" onclick="location.href = 'Bearbeitungsformular.php';">Bearbeiten</button></div>

    </div>         











</body>
</html>
