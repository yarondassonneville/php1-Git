<?php
    $conn = new PDO('mysql:host=localhost; dbname=imd', 'root', '');

    $posts = $conn->query("select * from posts");

    if( !empty($_POST) && !empty($_POST['title']) && !empty($_POST['post']) ){
        $title = $_POST['title'];
        $post = $_POST['post'];

        $statement = $conn->prepare("insert into posts (title, post) values (:title, :post)");
        $statement->bindParam(":title", $title);
        $statement->bindParam(":post", $post);
        $statement->execute();
    }
    else {
        if( !empty($_POST) ) {
            $error = "Gelieve beide velden in te vullen";
        }
    }
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    <style>
        body {
            font-family:"Lato";
        }

        h2 {
            font-size:1.5em;
            margin-bottom:5px;
        }
        div.container {
            max-width:800px;
            margin:0px auto 20px auto;
        }

        article {
            border-bottom-width:1px;
            border-bottom-color:#999999;
            border-bottom-style:solid;
            margin:10px;
            padding:10px 20px;
        }

        form {
            max-width:800px;
            margin:0px auto;
            padding-bottom:10px;
            background-color: #ebebeb;
        }

        form div {
            margin:10px;
            padding:0px 20px;
        }

        form h1 {
            margin:10px 10px 0px 10px;
            padding:20px;
        }
    </style>
</head>
<body>
<div class="container">
<?php while($p = $posts->fetch(PDO::FETCH_ASSOC)): ?>
<article>
    <h2><?php echo $p['title']; ?></h2>
    <div><?php echo htmlspecialchars($p['post']); ?></div>
</article>
<?php endwhile; ?>
</div>

    <form action="" method="post">
        <?php if(!empty($error)): ?>
        <div class="error"><?php echo $error ?></div>
        <?php endif; ?>
        <h1>Post je bericht:</h1>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="post">Post</label>
            <textarea name="post" id="post" cols="30" rows="10"></textarea>
        </div>
        <div>
        <input type="submit" value="submit">
        </div>
    </form>
</body>
</html>