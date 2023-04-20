<?php
use \App\Core\Link;

$currentUrl = parse_url($_SERVER['REQUEST_URI'])['path'];

/** @var Link[] $links */
$links = [
    new Link('Home', '/'),
    new Link('Posts', '/posts'),
    (new Link('EXIT', 'https://ej.uz/salida'))->setExternal(),
];
?>

<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex items-baseline space-x-4">
                    <?php
                        foreach ($links as $link) :
                        $link->setActive($currentUrl);
                    ?>
                        <a
                            href="<?= $link->getUrl() ?>"
                            class="<?= $link->getClasses() ?>"
                            <?= $link->isExternal() ? 'target="_blank"' : '' ?>
                        >
                            <?= $link->getName() ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</nav>
