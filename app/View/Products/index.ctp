<p style="text-indent: 80em">
<?php 
 
if(!empty($flag)){
 	echo $welcomeMessage.'  |  ';
	echo $this->Html->link(
    	'logout',
    	'/users/logout'
		);
}
 ?>
 	
</p>

<h3>List Product</h3>

<table class='table'>
	<tr>
	<th>id</th>
	<th>name</th>
	<th>price</th>
	<th>quantity</th>
	<th>description</th>
	<th>Delete or Edit</th>
	</tr>
	<?php foreach($result1 as $p) { ?>
		<tr>
		<td><?php echo $p['Product']['id']; ?></td>
		<td><?php echo $p['Product']['name']; ?></td>
		<td><?php echo $p['Product']['price'];?></td>
		<td><?php echo $p['Product']['quantity'];?></td>
		<td><?php echo $p['Product']['description'];?></td>
		<td><?php 
		if( isset($logged_in)  && $p['Product']['user_id'] == $this->Session->read('User.id') ) {
		    echo '<a href="Products/edit_row/'.$p['Product']['id'].'">Edit | </a>';
			echo '<a href="Products/delete_row/'.$p['Product']['id'].'">Delete  </a>';
		}?></td>
		</tr> 

	<?php }?>

	</table>
<?php
	echo $this->Form->create();
	if(isset($logged_in))
		echo $this->Form->end('insert row'); 
	 
