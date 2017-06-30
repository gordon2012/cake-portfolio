<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= h($this->fetch('title')) ?></title>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    <?= $this->Html->css('main.css?v='.time()) ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="col-sm-6">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        Gordon Doskas
                    </a>
                </div>
            </div>

            <div class="col-sm-2"><a href="#about" class="btn btn-success btn-block navbar-btn">About</a></div>
            <div class="col-sm-2"><a href="#work" class="btn btn-primary btn-block navbar-btn">Work</a></div>
            <div class="col-sm-2"><a href="#contact" class="btn btn-danger btn-block navbar-btn">Contact</a></div>
        </div>
    </nav>

    <main>
        <?= $this->fetch('content') ?>
    </main>

    <footer>
        Copyright 2017 Gordon Doskas
    </footer>



    <?= $this->fetch('script') ?>
</body>
</html>
