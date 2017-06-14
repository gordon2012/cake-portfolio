<?php

if(!isset($class)) $class = '';

echo $this->Html->link($label, $url, ['class' => $class]);
