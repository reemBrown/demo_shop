<?php
class ProductsController extends AppController{

/*@author : Reem Albunni
**@desc   : views all products
*/ 

	function index(){
		
		$this->set('result1', $this->Product->find('all'));

		$x=$this->Session->read('User.id');

		if(!empty($x)){

			$this->set('flag','true');

			$this->loadModel('User');
			$result=$this->User->find('first',['conditions'=>['User.id'=>$x]]);
			$welcome_Message='Welcome '.$result['User']['username'];
			$this->set('welcomeMessage',$welcome_Message);

			if($this->request->is('post')){
				$this->redirect(['controller'=>'Products','action'=>'insert_row']);
			}
		}
		
		
	}
/*@author : Reem Albunni
**@desc   : insert a new product
*/

	function insert_row(){

		if($this->request->is('post')){
			$user_id=$this->Session->read('User.id');

			$this->Product->create();
			$this->Product->save($this->data);
			$this->Product->saveField('user_id',$user_id);

			$this->redirect(['controller'=>'Products','action'=>'index']);
		}
	}
/*@author : Reem Albunni
**@desc   : delete a product
**@param  : $product_Id
*/
	function delete_row($product_Id){

		$this->Product->delete($product_Id);

		$this->redirect(['controller'=>'Products','action'=>'index']);
	}

/*@author : Reem Albunni
**@desc   : edit a product
**@param  : $product_Id
*/
	function edit_row($product_Id){

		$element=$this->Product->find('first',['conditions'=>['id'=>$product_Id]]);
		$this->set('result',$element);

		if($this->request->is('post')){

			$this->Product->id=$product_Id;
			$this->Product->save($this->data);


    		$this->redirect(['controller'=>'Products','action'=>'index']);
			
		}
	}
}
