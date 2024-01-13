<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php

    include "konekcija.php";
    include "ubacitabelu.php";

    ?>

    <title>Document</title>
    
</head>
<body>

<label for="meni">izaberi tabelu</label>
<select name="meni" id="meni"> 
    <option value="-1">--Izaberite--</option>
    <option value="<a href='glavna.php?id=1'></a>">--playlist--</option> 
    <option value="<a href='glavna.php?id=2'></a>">--numera--</option> 
    <option value="<a href='glavna.php?id=3'></a>">--album--</option> 
    <option value="<a href='glavna.php?id=4'></a>">--kupac--</option> 
</select><br>


    
</body>
</html>