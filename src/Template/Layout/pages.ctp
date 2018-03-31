<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= h($this->fetch('title')) ?></title>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <header>
        <nav>
            <?= $this->Html->link('GD', '/', ['class'=>'brand']) ?>
            <?= $this->Html->link('About', '/', ['class'=>'link']) ?>
            <?= $this->Html->link('Work', '/work', ['class'=>'link']) ?>
            <?= $this->Html->link('Contact', '/contact', ['class'=>'link']) ?>
        </nav>
    </header>

    <main>
        <?= $this->fetch('content') ?>
    </main>

    <?php $socials = [
        ['display'=>'<i class="fa fa-github"></i>', 'url'=>'https://github.com/gordon2012'],
        ['display'=>'<i class="fa fa-linkedin"></i>', 'url'=>'https://www.linkedin.com/in/gordon-doskas/'],
        ['display'=>'<i class="fa fa-twitter"></i>', 'url'=>'https://twitter.com/gordondoskas'],
        ['display'=>'itch.io', 'url'=>'https://gordondoskas.itch.io/'],
    ]; ?>
    <footer>
        <div class="copyright">Copyright <?= date('Y') ?> <strong>Gordon Doskas</strong></div>
        <div class="social">
            <?php foreach($socials as $social): ?>
                <a href="<?= $social['url'] ?>" target="_blank">
                    <?= $social['display'] ?>
                </a>

            <?php endforeach; ?>
        </div>
    </footer>
    <?= $this->fetch('script') ?>
</body>
</html>
