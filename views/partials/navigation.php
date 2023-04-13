<?php

$links = [
    '/' => 'Home',
    '/posts' => 'Posts'
];
?>


<nav class="bg-gray-800">
    <div class="ml-10 flex items-baseline space-x-4">

        <?php foreach ($links as $url => $name) : ?>
                <a
                    href="<?= $url?>"
                    class="text-gray-300 px-3 py-2 text-sm font-medium"
                >
                    <?= $name ?>
                </a>
        <?php endforeach; ?>
    </div>

</nav>
