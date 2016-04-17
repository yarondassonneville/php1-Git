<?php

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Tasks</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Add a new task:</h1>
            <?php echo validation_errors(); ?>
            <form method="post" action="">
                <?php if( !empty($feedback) ): ?>
                <div class="alert alert-success"><?php echo $feedback; ?></div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="todo_name">Add to do item:</label>
                    <input type="text" class="form-control" name="todo_name" id="todo_name" placeholder="To Do name">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            <a href="./">Go back to all tasks</a>
        </div>
    </div>
</div>

</body>
</html>