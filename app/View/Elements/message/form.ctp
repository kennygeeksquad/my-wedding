<?php

echo $this->Form->create('message', array('class'=>'pure-u-1-2', 'inputDefaults'=>array('label'=>false)));
echo $this->Form->input('message', array('type'=>'textarea', 'placeholder'=>'Please type your message here.'));
echo '<div class="pure-u-1-2">';
echo $this->Form->input('name', array('placeholder'=>'Name/Names'));
echo '</div>';
echo '<div class="pure-u-1-2">';
echo $this->Form->submit('Submit');
echo '</div>';
echo $this->Form->end();