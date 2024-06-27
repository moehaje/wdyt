<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'WDY' ?></title>
    <link href="/css/output.css" rel="stylesheet">
</head>
<body class="h-full">
    <div class="min-h-full">
        <?php require base_path('views/partials/nav.php') ?>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?= $content ?>
            </div>
        </main>
    </div>
</body>
</html>