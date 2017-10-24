<center ><legend>Login</legend>
<?php

echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Login'); ?>
<font color="red"><?php echo $this->Session->flash('flash');
?></font>
</center>