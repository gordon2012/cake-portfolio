<?php
    $this->assign('title', 'Gordon Doskas | Portfolio');
?>

<style>
    .about {
        background-image:
            linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url(<?= $this->Url->image('dawn.jpg') ?>);
        background-size: cover;
        background-position: center;
    }
</style>
<main class="about">
    <h1>Gordon Doskas</h1>

    <img src="https://avatars3.githubusercontent.com/u/9071982?v=3&s=460" alt="Gordon Doskas">

    <h2>Front End Web Developer</h2>
    <h3 class="gamedev">Indie Game Developer</h3>
    <h3 class="dreams">Oneironautical Adventurer</h3>

    <div class="copy">
        <p>
            I am a Front End Web Developer at Salt Creek Media Inc. Most of my time is spent building landing pages and adding features to web applications using fundamental technologies such as HTML, JavaScript, PHP, and CSS, as well as frameworks like CakePHP, Bootstrap, and JQuery. I exclusively employ version control using Git and GitHub, and participate in daily Scrum stand up meetings.
        </p>
        <p>
            I have also learned other front end technologies that I have used in my many side projects such as React, Redux, SASS, npm, Gulp, and Webpack, and more.
        </p>
        <p>
            I have completed my B.S. degree in IT: Software Engineering and am currently participating in a self-paced Full Stack Web Development certificate program.
        </p>
    </div>

    <div class="cta cta1"><?= $this->Html->link('Check out my Work', '/work') ?></div>
    <div class="cta cta2"><?= $this->Html->link('Contact me', '/contact') ?></div>
</main>
