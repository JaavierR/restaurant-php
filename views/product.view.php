<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/header.php' ?>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="/productos" class="text-blue-500 hover:underline">Volver...</a>
            </div>

            <p>
                <?= $product['name'] ?>
            </p>
        </div>
    </main>

<?php require 'partials/footer.php' ?>