<?php
    $filter = $_GET;

    $checkins = [
                ["user_picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/robertovivancos/128.jpg","name" => "Theresa W.","checkin" => "East River Park", "place" => "Brooklyn, NY", "old" => false ,"photo" => "http://photos.cntraveler.com/2014/09/29/5429c32b425f183f61bf7316_new-york-city-skyline.jpg"],
                ["user_picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/robertovivancos/128.jpg","name" => "Nina M.","checkin" => "Rubirosa", "place" => "New York, NY", "old" => true],
        ["user_picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/robertovivancos/128.jpg","name" => "Sean B.","checkin" => "Blue Bottle Coffee", "place" => "South of Market, San Fransisco", "old" => true],
        ["user_picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/robertovivancos/128.jpg","name" => "Mike A.","checkin" => "Land's Workout", "place" => "San Fransisco", "old" => true]
             ];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foursquare</title>
    <link rel="stylesheet" href="http://yarondassonneville.be/css/reset.css">
    
    <style>
        html{
            font-family: "Lato";
        }
        
        header {
            background-color:#c4c4c4;
            font-size:1em;
            padding:5px;
            margin-bottom:20px;
        }
        article {
            clear:both;
            margin:10px;
            padding-bottom:10px;
        }
        h3 {
            margin:0;
            margin-left:0px;
            font-size:1.05em;
            font-weight:bold;
            color:#1ea4e0;
        }
        
        div {
            margin-left:10px;   
        }
        
        .profile_image {
            float:left;   
        }
        
        .right {
            float:left;   
        }
        
        .checkin {
            font-size:1.35em;
            font-weight:bolder;  
        }
        
        .line {
            height:1px;
            width:100%;
            background-color:grey;
            margin-top:10px;
            margin-left:0px;
            clear:both;
        }
        
        .clearfix {
            clear:both;
            display:block;
        }
        
        footer {
            background-color:#1ea4e0;
            height:100px;
        }
        
        .checkfoto {
            max-width:250px;
            margin-bottom:10px;
        }
        
        p.checkin {
            color:#1ea4e0;
        }
        
        p.place {
            font-weight:bold;
            color:#585858;
            margin-bottom:10px;
        }
        
        article {
            max-width:500px;
            margin:10px auto;
        }

        nav {
            color:white;
        }

        nav a:link,
        nav a:visited,
        nav a:hover,
        nav a:active {
            color:white;
            text-decoration:none;
        }

        nav a:hover {
            color:#f3f3f3;
        }
    </style>

</head>
<body>
    <?php
        include_once("header.inc.php");
    ?>
  <div class="clearfix"> </div>
   <section class="timeline">
       <?php foreach( $checkins as $checkin): ?>
           <?php if(isset($filter["old"])) {
               if($checkin["old"] == $filter["old"]) continue;
           }
           else
           {
           } ?>
       <article>
          <img src="<?php echo $checkin["user_picture"] ?>" alt="Foto" width="60px" class="profile_image">
          <div class="right">
           <h3><?php echo $checkin["name"] ?></h3>
           <p class="checkin"><?php echo $checkin["checkin"] ?></p>
           <p class="place"><?php echo $checkin["place"] ?></p>
           <?php
                if(isset($checkin["photo"])){
                    echo '<img src="' . $checkin["photo"] . '" alt="foto" class="checkfoto">';
                }
            ?>
           </div>
       </article>
       <div class="line clearfix"></div>
       <?php endforeach; ?>
   </section>
   
   <?php
        include_once("footer.inc.php");
    ?>
   
    <?php





        //one line
        /*
            Multiple
            lines
            
            if(isset($naam)){ KRIJGT ALS ANTWOORD OK
            echo "ok";
        }
        else {
            echo "leeg";
        }
        */
        //echo "Hello world?";
        /*$naam = "";
        if(!empty($naam)){
            echo "ok";
        }
        else {
            echo "leeg";
        }*/
    ?>
</body>
</html>