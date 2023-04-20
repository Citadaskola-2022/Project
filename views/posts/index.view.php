<?php view('/partials/header.php'); ?>
<?php view('/partials/navigation.php'); ?>
<?php view('/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-7 sm:px-6 lg:px-8">
        <?php foreach ($posts as $post) : ?>
            <h1><?= $post['title']; ?></h1>
            <p><?= $post['body']?></p>
        <?php endforeach; ?>
    </div>
</main>

<?php view('/partials/footer.php'); ?>