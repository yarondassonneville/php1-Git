<?php
    $toDoItems = [
        ["beschrijving" => "To do 1 - item", "uren" => 7, "categorie" => "thuis"],
        ["beschrijving" => "To do 2 - item", "uren" => 4, "categorie" => "school"],
        ["beschrijving" => "To do 3 - item", "uren" => 3, "categorie" => "thuis"],
        ["beschrijving" => "To do 4 - item", "uren" => 0.5, "categorie" => "werk"],
        ["beschrijving" => "To do 5 - item", "uren" => 2, "categorie" => "werk"],
        ["beschrijving" => "To do 6 - item", "uren" => 1, "categorie" => "school"]
    ]
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <style>
        .item {
            /*width:100%;*/
            font-size:20px;
            border-bottom-color: rgba(59, 59, 59, 0.68);
            border-bottom-width: 1px;
            border-bottom-style:solid;
            padding:15px 5px;
            font-family:"Lato";
            color:white;
        }

        .green {
            background-color:#41bc41;
        }

        .orange {
            background-color:#fcb021;
        }

        .red {
            background-color:#e63333;
        }

        h2 {
            float:left;
        }

        p.where {
            float:right;
        }

        .clearfix {
            clear:both;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php foreach( $toDoItems as $toDoItem): ?>
        <div class="item <?php
        switch ($toDoItem["uren"]) {
            case $toDoItem["uren"] > 6:
                echo "red";
                break;
            case $toDoItem["uren"] >= 2:
                echo "orange";
                break;
            case $toDoItem["uren"] > 0:
                echo "green";
                break;
        }
        ?>">
            <h2><?php echo $toDoItem["beschrijving"] ?></h2>
            <p class="where"><?php echo $toDoItem["categorie"] ?></p>
            <div class="clearfix"></div>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
