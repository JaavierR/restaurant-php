<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/header.php' ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul class="flex flex-col gap-4">
                <?php foreach ($products as $product): ?>
                    <li class="bg-white rounded-2xl border border-zinc-500/20 shadow-sm p-4">
                        <a href="/producto?id=<?= $product['id'] ?>" class="text-blue-500 hover:underline">
                            <?= $product['name'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>

<?php
require 'partials/footer.php' ?>