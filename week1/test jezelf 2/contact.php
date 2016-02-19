<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        a:link,
        a:visited,
        a:hover,
        a:active {
            padding:50px 50px 40px 50px;
            line-height:66px;
            background-color:#363636;
            color:white;
            text-decoration:none;
        }

        a:hover {
            background-color:#2ec144;
        }

        .activeLink {
            background-color:#2ec144 !important;
        }

        .clearfix {
            clear:both;
        }

        .outer {
            margin-bottom:20px;
        }
    </style>
</head>
<body>
<div class="outer">
    <?php include_once("include_navigation.php") ?>
</div>
<h1>Contact</h1>
<?php include_once("include_footer.php") ?>
</body>
</html>