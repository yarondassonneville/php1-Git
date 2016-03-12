<?php
    include_once("classes/Job.class.php");

    if(!empty($_POST)){
        if(!empty($_POST["title"]) && !empty($_POST["time"]) && !empty($_POST["description"])){
            $job = new Job();
            $job->Title = $_POST["title"];
            $job->Time = $_POST["time"];
            $job->Description = $_POST["description"];
            $job->Save();
        }
    }

    $jobAll = new Job();
    $results = $jobAll->GetAll();

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

<form action="" method="post">
    <input type="text" name="title" placeholder="Job Title">
    <input type="text" name="time" placeholder="From - Until">
    <input type="text" name="description" placeholder="Description">
    <input type="submit" value="Submit">
</form>
<!-- The Timeline -->

<ul class="timeline">
    <!-- Item 1 -->
    <?php foreach($results as $key=>$result): ?>
        <?php if($key%2 == 0): ?>
    <li>
        <div class="direction-r">
            <div class="flag-wrapper">
                <span class="flag"><?php echo $result["title"] ?></span>
                <span class="time-wrapper"><span class="time"><?php echo $result["time"] ?></span></span>
            </div>
            <div class="desc"><?php echo $result["description"] ?></div>
        </div>
    </li>
            <?php else: ?>
            <li>
                <div class="direction-l">
                    <div class="flag-wrapper">
                        <span class="flag"><?php echo $result["title"] ?></span>
                        <span class="time-wrapper"><span class="time"><span class="time"><?php echo $result["time"] ?></span></span>
                    </div>
                    <div class="desc"><?php echo $result["description"] ?></div>
                </div>
            </li>
            <?php endif; ?>
    <?php endforeach; ?>
    <!-- Item 2 -->


    <!-- Item 3 -->
    <!--<li>
        <div class="direction-r">
            <div class="flag-wrapper">
                <span class="flag">Harvard University</span>
                <span class="time-wrapper"><span class="time">2008 - 2011</span></span>
            </div>
            <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
        </div>
    </li>-->

</ul>
</body>
</html>