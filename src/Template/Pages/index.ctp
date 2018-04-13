<?php
    $this->assign('title', 'Gordon Doskas | Portfolio');
?>

<style>
    .about {
        background-image:
            linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
            url(<?= $this->Url->image('dawn.jpg') ?>);
    }
</style>
<main class="about">
    <h1>Gordon Doskas</h1>

    <img src="https://avatars3.githubusercontent.com/u/9071982?v=3&s=460" alt="Gordon Doskas">

    <h2>Front End Web Developer</h2>
    <h3 class="gamedev">Independent Game Developer</h3>
    <h3 class="dreams">Oneironautical Adventurer</h3>

    <div class="copy">
        <p>
            I am a Front End Web Developer at Salt Creek Media Inc.
        </p>
        <p>
            When I'm not building marketing landing pages for clients, I can be found adding features to our many web applications.
        </p>
        <p>
            I often work with fundamental technologies such as HTML, JavaScript, PHP, and CSS, in addition to frameworks and libraries including CakePHP, Bootstrap, and JQuery. I exclusively employ version control using Git and GitHub, and participate in Scrum stand up meetings.
        </p>
        <p>
            I have also learned other front end technologies that I have used in my many side projects such as React, Redux, SASS, npm, Gulp, Webpack, and more.
        </p>
        <p>
            I am also an aspiring Video Game Developer. I have dabbled in many game creation technologies such as Unity 3D, Unreal, Phaser.io, and GameMaker. I am currently in the planning phase of my very first game: an evolution based side scrolling platformer starring two lucid dreaming Italian Greyhounds.
        </p>
    </div>

    <div class="cta cta1"><?= $this->Html->link('Check out my Work', '/work') ?></div>
    <div class="cta cta2"><?= $this->Html->link('Contact me', '/contact') ?></div>
</main>
