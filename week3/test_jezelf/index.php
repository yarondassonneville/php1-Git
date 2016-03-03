<?php
    $conn = new PDO('mysql:host=localhost; dbname=imd', 'root', '');

    $posts = $conn->query("select * from posts");

    if( !empty($_POST) ){
        $title = $_POST['title'];
        $post = $_POST['post'];

        $statement = $conn->prepare("insert into posts (title, post) values (:title, :post)");
        $statement->bindParam(":title", $title);
        $statement->bindParam(":post", $post);
        $statement->execute();
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
            margin:0px auto 50px auto;
        }

        article {
            border-bottom-width:1px;
            border-bottom-color:#999999;
            border-bottom-style:solid;
            margin:10px;
            padding:20px;
        }

        form {
            max-width:800px;
            margin:0px auto;
        }

        form div {
            margin:10px;
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
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="post">Post</label>
            <textarea name="post" id="post" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="submit">
    </form>
</body>
</html>