<?php
    $this->assign('title', 'Gordon Doskas | Portfolio');
    //$this->Html->script('main', ['block' => true]); // Loads 'main.js' at end of body
    // $this->_(); // set footer?
?>

<?php $this->start('header'); ?>
    <li><?= $this->element('button', ['url' => '#about', 'label' => 'About', 'class' => 'btn btn-lg btn-default']) ?></li>
    <li><?= $this->element('button', ['url' => '#work', 'label' => 'Work', 'class' => 'btn btn-lg btn-default']) ?></li>
    <li><?= $this->element('button', ['url' => '#contact', 'label' => 'Contact', 'class' => 'btn btn-lg btn-default']) ?></li>
<?php $this->end(); ?>

<section id="about">
    <h1>About Me</h1>
</section>
<section id="work">
    <h1>My Work</h1>
</section>
<section id="contact">
    <h1>Contact Me</h1>
</section>

<?php $this->start('footer'); ?>
    Copyright 2017 Gordon Doskas
<?php $this->end(); ?>
