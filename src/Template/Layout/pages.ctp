<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= h($this->fetch('title')) ?></title>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('main.css') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <header>
        <?= $this->fetch('header') ?>
    </header>

    <main>
        <?= $this->fetch('content') ?>
    </main>

    <footer>
        <?= $this->fetch('footer') ?>
    </footer>
    <?= $this->fetch('script') ?>
</body>
</html>