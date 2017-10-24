<legend>Insert a new product</legend>
<?php
echo $this->Form->create('Product');
echo $this->Form->input('name');
echo $this->Form->input('price');
echo $this->Form->input('quantity');
echo $this->Form->input('description');
echo $this->Form->end('save');
 ?>