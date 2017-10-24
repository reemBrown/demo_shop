<legend>Edit a product</legend>
id<br>
<?php 
echo $this->Form->create();
echo $result["Product"]["id"]; 	
echo $this->Form->input('name', ['default'=>$result["Product"]["name"]]);
echo $this->Form->input('price', ['default'=>$result["Product"]["price"]]);
echo $this->Form->input('quantity', array('default'=>$result["Product"]["quantity"]));
echo $this->Form->input('description', array('default'=>$result["Product"]["description"]));
echo $this->Form->end('edit');

?>