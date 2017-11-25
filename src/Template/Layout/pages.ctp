<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= h($this->fetch('title')) ?></title>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('main.css?v='.time()) ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <header>
        <a href="#about" class="header-brand btn btn-link">GD</a>
        <a href="#about" class="btn btn-link">About</a>
        <a href="#work" class="btn btn-link">Work</a>
        <a href="#contact" class="btn btn-link">Contact</a>
    </header>
    <main>
        <?= $this->fetch('content') ?>
    </main>
    <footer class="text-center">
        Copyright <?= date('Y') ?> Gordon Doskas
    </footer>
    <?= $this->fetch('script') ?>
</body>
</html>
