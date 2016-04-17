<?php

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Tasks</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
        li {
            list-style: disc;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Your tasks <?php echo " (".count($allitems).") "; ?> :</h1>
            <ul>
                <?php foreach($allitems as $item): ?>
                    <li><?php echo $item['name'] ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="./add">Nieuwe TODO aanmaken</a>
        </div>
    </div>
</div>

</body>
</html>