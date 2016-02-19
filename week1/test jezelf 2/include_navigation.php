<?php $fileNow = basename($_SERVER['PHP_SELF']);
    $links = [
        ["href" => "home.php", "name" => "Home"],
        ["href" => "contact.php", "name" => "Contact"]
    ]
?>

<header>
    <nav>
        <?php foreach( $links as $link): ?>
        <a href="<?php echo $link["href"] ?>" <?php
            if($fileNow == $link["href"]){
                echo 'class="activeLink"';
            }
        ?>><?php echo $link["name"] ?></a>
        <?php endforeach; ?>
    </nav>
</header>