<?php
    $toDoItems = [
        ["beschrijving" => "To do 1 - item", "uren" => 6, "categorie" => "thuis"],
        ["beschrijving" => "To do 2 - item", "uren" => 4, "categorie" => "school"],
        ["beschrijving" => "To do 3 - item", "uren" => 3, "categorie" => "thuis"],
        ["beschrijving" => "To do 4 - item", "uren" => 1, "categorie" => "werk"],
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
            border-bottom-color:black;
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
    </style>
</head>
<body>
    <div class="container">
        <?php foreach( $toDoItems as $toDoItem): ?>
        <div class="item <?php
        switch ($toDoItem["uren"]) {
            case 0:
                echo "green";
                break;
            case 1:
                echo "green";
                break;
            case 2:
                echo "orange";
                break;
            case 3:
                echo "orange";
                break;
            case 4:
                echo "orange";
                break;
            case 5:
                echo "orange";
                break;
            case 6:
                echo "red";
                break;
        }
        ?>">
            <h><?php echo $toDoItem["beschrijving"] ?></h>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
