<?php 

echo $this->Form->create('rsvp', array('class'=>'pure-u-1-2', 'inputDefaults'=>array('label'=>false)));
echo '<div class="pure-u-1-2">';
echo $this->Form->input('name', array('placeholder'=>'Name', 'div'=>array('class'=>'input pure-u-1 name')));
echo $this->Form->input('name2', array('placeholder'=>'Name', 'div'=>array('class'=>'input pure-u-1 name')));
echo $this->Form->input('length', array('type'=>'select', 'options'=>array('A day'=>'A day', '2 days'=>'2 days', '3 days'=>'3 days', '4 days'=>'4 days', '5 days'=>'5 days', '6 days'=>'6 days', '7 days'=>'7 days'), 'default'=>'7 days', 'div'=>array('class'=>'input pure-u-1 length')));
echo '</div>';
echo '<div class="pure-u-1-2">';
echo $this->Form->input('hotel', array('placeholder'=>'Hotel', 'div'=>array('class'=>'input pure-u-1 hotel')));
echo $this->Form->submit('Submit');
echo '</div>';
echo $this->Form->end();