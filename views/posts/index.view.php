<?php view('/partials/header.php'); ?>
<?php view('/partials/navigation.php'); ?>
<?php view('/partials/banner.php'); ?>

<?php foreach ($posts as $post) : ?>

    <h1><?= $post['title']; ?></h1>

    <p><?= $post['body']?></p>

<?php endforeach; ?>

<?php view('/partials/footer.php'); ?>