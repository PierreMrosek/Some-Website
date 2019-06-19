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

        #Rahmen{
            background-color: lightcoral;
            position: absolute;
            background-position: center center;
            float: none;
            border: 10px lightgrey;
            border-bottom-style: outset;
            height: 400px;
            width: 400px;
            margin: 10px 10px 10px 10px;

        }

        #textfeld{
            height: 30px;
            width: 150px;
            border: 1px black;
            border-style: outset;
            background-position: top center;
            margin: 100px 0 0 125px;
        }

        #textfeld2{
            height: 30px;
            width: 150px;
            border: 1px black;
            border-style: outset;
            background-position: top center;
            margin: 50px 0 0 125px;

        }

        .textfelder{
            margin: 5px 100px 5px 100px;
            
            
        }

        #Speichern{
            margin: 0 0 0 5px;
        }

        #Abbrechen{
            margin: 0 0 0 185px;
            
        }




    </style>
    <body>

        <?php
        $data = file("NamenUndAdressen.txt");
        
       function feldedit($param) {
            $spalten= explode(";", $param);
            echo $spalten[1]; 
        }
        
        function savelinks(){
            $handlefile = fopen("NamenUndAdressen.txt", "r+" );
            
            /* aufbau des zu speichernden textes
             * text speichern in datei
             */
            $inhalt = "Seite 1;" + $_POST['feld1'] + ";" + "\n";   
            $inhalt += "Seite 2;" + $_POST['feld2'] + ";" + "\n";  
            $inhalt += "Seite 3;" + $_POST['feld3'] + ";" + "\n";
            $inhalt += "Seite 4;" + $_POST['feld4'] + ";" + "\n";
            $inhalt += "Seite 5;" + $_POST['feld5'] + ";" + "\n";
            $inhalt += "Seite 6;" + $_POST['feld6'] + ";" + "\n";
            $inhalt += "Seite 7;" + $_POST['feld7'] + ";" + "\n";
            $inhalt += "Seite 8;" + $_POST['feld8'] + ";" + "\n";
            $inhalt += "Seite 9;" + $_POST['feld9'] + ";" + "\n";
            $inhalt += "Seite 10;" + $_POST['feld10'] + ";" + "\n";
            
            
            fwrite($handlefile, $inhalt);
            fclose($handlefile);
        }
            
        
        ?>


        <div id="Rahmen">

            <input type="text" id="url0" name="feld1" class="textfelder" Value="<?php feldedit($data[0]);?>" >
            
            <input type="text" id="url1" name="feld2" class="textfelder" Value="<?php feldedit($data[1]);?>" >
            
            <input type="text" id="url2" name="feld3" class="textfelder" Value="<?php feldedit($data[2]);?>" >
            
            <input type="text" id="url3" name="feld4" class="textfelder" Value="<?php feldedit($data[3]);?>" > 
            
            <input type="text" id="url4" name="feld5" class="textfelder" Value="<?php feldedit($data[4]);?>" > 
            
            <input type="text" id="url5" name="feld6" class="textfelder" Value="<?php feldedit($data[5]);?>" > 
            
            <input type="text" id="url6" name="feld7" class="textfelder" Value="<?php feldedit($data[6]);?>" > 
            
            <input type="text" id="url7" name="feld8" class="textfelder" Value="<?php feldedit($data[7]);?>" > 
            
            <input type="text" id="url8" name="feld9" class="textfelder" Value="<?php feldedit($data[8]);?>" > 
            
            <input type="text" id="url9" name="feld10" class="textfelder" Value="<?php feldedit($data[9]);?>" > 

            <input type="button" id="Speichern" value="Speichern" onclick="<?php savelinks()?>" >
            <input type="button" id="Abbrechen" value="Abbrechen" onclick="<?php fclose("Bearbeitungsformular.php")?>" >


        </div>













    </body>
</html>