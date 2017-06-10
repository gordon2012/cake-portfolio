<?php
    $this->assign('title', 'Gordon Doskas | Portfolio');
    //$this->Html->script('main', ['block' => true]); // Loads 'main.js' at end of body
    // $this->_(); // set footer?

    $this->start('header');
        echo '<h3>HEADER</h3>';
        echo $this->Html->link('Google', 'https://google.com');
    $this->end();

    $this->start('footer');
        echo 'FOOTER';
    $this->end();
?>

<h1>Hello World</h1>
