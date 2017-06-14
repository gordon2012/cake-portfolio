<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= h($this->fetch('title')) ?></title>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    <?= $this->Html->css('main.css') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <header>
        <nav>
            <div class="brand">
                <a class="btn btn-lg btn-success" href="#">Gordon Doskas</a>
            </div>
            <ul>
                <?= $this->fetch('header') ?>
            </ul>
        </nav>
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
