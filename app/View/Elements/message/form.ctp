<?php

echo $this->Form->create('message');
echo $this->Form->text('message', array('placeholder'=>'Please type your messages here.'));
echo $this->Form->input('name', array('placeholder'=>'Name/Names'));
echo $this->Form->end();