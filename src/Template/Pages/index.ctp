<?php
    $this->assign('title', 'Gordon Doskas | Portfolio');
?>

<section id="about">
    <div class="container">
        <h1>About Me</h1>
        <div class="imgbox text-center">
            <img class="img-responsive" src="https://avatars3.githubusercontent.com/u/9071982?v=3&s=460" alt=""/>
        </div>
        <div class="col-sm-6 col-sm-offset-3 copy">
            <p><strong>Gordon is a creator</strong> of websites, experiences, and worlds with a focus on development and architecture but with an eye for design.</p>
        </div>
        <div class="clearfix"></div>

        <h2>My Skills</h2>
        <div class="skills panel">
            <?php $skills = ['HTML', 'CSS', 'JavaScript', 'Bootstrap', 'JQuery', 'React', 'Webpack', 'Git', 'CakePHP', 'MySQL', 'MongoDB', 'Wordpress']; ?>

            <?php foreach($skills as $skill): ?>
                <div class="col-sm-4"><h2><span class="label label-danger" style="display: block"><?= $skill ?></span></h2></div>
            <?php endforeach ?>

            <div class="clearfix"></div>
        </div>
    </div>
</section>

<section id="work">
    <h1>My Work</h1>

    <div class="container-fluid">
        <div class="row projects">
            <?php $projects = [
                'leaderboard' => 'Camper Leaderboard',
                'markdown' => 'Markdown Previewer',
                'calculator' => 'Calculator',
                'quote' => 'Random Quote Machine',
                'wikiviewer' => 'Wikipedia Viewer',
                'twitch' => 'Twitch.tv Status'];
            ?>
            <?php foreach($projects as $project => $title): ?>
                <div class="col-sm-12 col-md-6 col-lg-4 wrap">
                    <div class="item">

                        <?= $this->Html->image($project.'.png', ['alt'=>'', 'class'=>'img-responsive']) ?>

                        <a href="http://gordondoskas.com/<?= $project ?>" target="_blank" class="overlay">
                            <h2><?=$title?></h2>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
            <div class="clearfix"></div>
        </div>
    </div>
</section>

<section id="contact">
    <h1>Contact Me</h1>
</section>
