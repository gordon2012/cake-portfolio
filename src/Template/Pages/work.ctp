<?php
    $this->assign('title', 'Gordon Doskas | Portfolio - Work');
?>

<h1 style="text-align: center;">Work</h1>

<?php if(false): ?>
<section id="about">
    <div>
        <div class="about-copy">
            <div class="about-avatar">
                <img src="https://avatars3.githubusercontent.com/u/9071982?v=3&s=460" alt="Gordon Doskas">
                <h1>Gordon Doskas</h1>
            </div>
            <h3>Front End Web Developer</h3>
            <p>I am a Front End Web Developer at Salt Creek Media Inc. Most of my time is spent building landing pages and adding features to web applications using fundamental technologies such as HTML, JavaScript, PHP, and CSS, as well as frameworks like CakePHP, Bootstrap, and JQuery. I exclusively employ version control using Git and GitHub, and participate in daily Scrum stand up meetings.</p>
            <p>I have also learned other front end technologies that I have used in my many side projects such as React, Redux, SASS, npm, Gulp, and Webpack, and more.</p>
            <p>I have completed my B.S. degree in IT: Software Engineering and am currently participating in a self-paced Full Stack Web Development certificate program.</p>
        </div>
    </div>
</section>

<?php $projects = [
    ['url'=>'leaderboard', 'title'=>'Camper Leaderboard', 'repo'=>'https://github.com/gordon2012/leaderboard'],
    ['url'=>'markdown', 'title'=>'Markdown Previewer', 'repo'=>'https://github.com/gordon2012/markdown'],
    ['url'=>'calculator', 'title'=>'Calculator', 'repo'=>'https://github.com/gordon2012/calculator'],
    ['url'=>'quote', 'title'=>'Random Quote Machine', 'repo'=>'https://github.com/gordon2012/quote'],
    ['url'=>'wikiviewer', 'title'=>'Wikipedia Viewer', 'repo'=>'https://github.com/gordon2012/wikiviewer'],
    ['url'=>'twitch', 'title'=>'Twitch.tv Status', 'repo'=>'https://github.com/gordon2012/twitch'],
    ['url'=>'roll-a-ball', 'title'=>'Roll A Ball', 'repo'=>'https://github.com/gordon2012/roll-a-ball'],
    ['url'=>'space-shooter', 'title'=>'Space Shooter', 'repo'=>'https://github.com/gordon2012/space-shooter'],
]; ?>
<section id="work">
    <div>
        <h1 class="text-center">My Work</h1>
        <div class="work-projects">
            <?php foreach($projects as $project): ?>
                <div class="work-projects-wrap">
                    <h2 class="text-center"><?= $project['title'] ?></h2>
                    <div class="work-projects-inner" style="background-image: url(<?= $this->Url->image($project['url'] . '.png') ?>);">
                        <div class="work-modal">
                            <div class="work-link">
                                <a href="http://<?= $project['url'] ?>.gordondoskas.com/" target="_blank">
                                    <i class="fa fa-5x fa-search"></i>
                                </a>
                            </div>
                            <?php if($project['repo']): ?>
                                <div class="work-github">
                                    <a href="<?= $project['repo'] ?>" target="_blank">
                                        <i class="fa fa-5x fa-github"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section id="contact">
    <div>
        <h1>Contact Me</h1>
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/303256/coming_soon.png" alt="">
    </div>
</section>
<?php endif; ?>
