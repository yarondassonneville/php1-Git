<?php
    $filter = $_GET;
    echo $filter["venue"];

    $events = [
                ["picture" => "http://roundhouse-assets.s3.amazonaws.com/assets/Image/2985.jpg","name" => "Theresa W.","person" => "East River Park", "time" => "20:00", "venue" => "club", "sold" => "Sold Out", "date" => "THU 16 FEB 2016", "logo" => "", "shortText" => "British psych-pop icon is hatching a comeback &amp; a new LP"],
    ["picture" => "http://roundhouse-assets.s3.amazonaws.com/assets/Image/2985.jpg","name" => "Theresa W.","person" => "East River Park", "time" => "20:00", "venue" => "club", "sold" => "Sold Out", "date" => "THU 16 FEB 2016", "logo" => "", "shortText" => "British psych-pop icon is hatching a comeback &amp; a new LP"]
    ];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AB</title>
    <link rel="stylesheet" href="reset.css">
    <style>
        body {
            background-color:#eaeaea; 
            font-family:"Lato";
        }
        .container {
            max-width:960px;
            margin:0px auto;
            background-color:#c9c9c9;
        }
        .clearfix {
            clear:both;   
        }
        
        .image {
            float:left;    
        }
        
        .image img {
             width:300px;
            height:300px;
            background-color:black;
        }
        
        .info {
             float:left;
            margin-left:20px;
        }
        
        article {
            margin-bottom:20px;   
        }
        
        .extra p {
            display:inline-block;   
        }
        
        h2 {
            font-size:1.4em;
            font-weight:bold;
        }
        
        ul {
               
        }
    </style>
</head>
<body>
   <div class="container">
    <div>
        Filter by venue: 
        <a href="index.php?venue=club">Club</a>
        <a href="index.php?venue=main">AB Main Hall</a>
        <a href="index.php?venue=huis">Huis 23</a>
    </div>
    
    <section class="item">
        <?php foreach( $events as $event): ?>
        <article>
        <div class="image">
            <img src="<?php echo $event["picture"] ?>" alt="">
        </div>
        <div class="info">
            <h2><?php echo $event["date"] ?></h2>
            <h3><?php echo $event["name"] ?></h3>
            <ul>
                <li><?php echo $event["person"] ?></li>
            </ul>
            <p><?php echo $event["shortText"] ?></p>
            <div class="extra">
                <p class="time"><?php echo $event["time"] ?></p>
                <p class="venue"><?php echo $event["venue"] ?></p>
                <p class="sold"><?php echo $event["sold"] ?></p>
                <?php
                if($event["logo"] != ""){
                    echo '<img src="' . $event["logo"] . '" alt="foto" class="logo">';
                }
            ?>
            </div>
        </div>
        <div class="clearfix"></div>
        </article>
        <?php endforeach; ?>
    </section>
    </div>
</body>
</html>