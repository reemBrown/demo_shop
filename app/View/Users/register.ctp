<center ><legend>Registration</legend>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('email');
echo $this->Form->end('submit'); 
?> 
<font color="red"><?php echo $this->Session->flash('flash');?></font>
<?php
echo '<br>';
echo "If you have account then ";
echo $this->Html->link(
    'Sign in',
    '/users/login',
    array('class' => 'button', 'target' => '_blank')
);

?>
</center>

 
