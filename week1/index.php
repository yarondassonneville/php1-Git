<?php
  /*  $keuze = 1; //Dit is ook true

if($keuze == true){
    echo "Yas";
}

if($keuze != false){
    echo "Ook yas";
}

if($keuze === true){
    echo "Ook nog eens Yas";
    //Hier controleer je ook of het strict gelijk is aan (of het type van de variabele ook dezelfde is als wat de waarde hier en daar is... STRICT kijken
}

//Lussen ==> Queries in databases ==> 1x 
*/
?>    


<?php
//FIZZBUZZ PROGRAMMA
/*for($i = 1; $i <= 100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo $i .' FizzBuzz <br>'; 
    }    
    elseif($i % 3 == 0){
        echo $i .' Fizz <br>'; 
    }
    elseif($i % 5 == 0){
        echo $i .' Buzz <br>'; 
    }
    else{
        echo $i .'<br>';
    }
}*/
?>


<?php
/*
    //Gewone variabelen
    $DB_NAME = "drupal";
    $DB_USER = "root";
    $DB_SERVER = "localhost";
    $DB_PASSWORD = "pass123";

    //Constante variabelen
    define('DB_USER', 'root');
    define('MAX_UPLOAD_SIZE', 2000);

    $upload = 3000;
    if($upload > MAX_UPLOAD_SIZE){
        echo "file too big";
    }
    */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Layout</title>
</head>
<body>
    
    <?php
        include_once("nav.inc.php");
        //klasses includen ==> Geen error's bij dubbele

        //Doe je ook best voor header (komt altijd terug)
    ?>
    
    <section>
        Content homepage: wat komt er terug in de website.
    </section>
    
    <footer>
        &copy; 2016 - Yaron Dassonneville
    </footer>
</body>
</html>