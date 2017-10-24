<center >
<legend>Registration</legend>
<?php
echo $this->Form->create('POST');
echo $this->Form->input('username');
echo $this->Form->input('password',['class'=>'input-group input-group-lg']);
echo $this->Form->input('email');
echo $this->Form->button('submit',['class'=>'btn btn-success']); ?>


</center>