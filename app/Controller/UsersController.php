<?php

class UsersController extends AppController {

	function index() {

		$this->redirect(['controller'=>'Users','action'=>'register']);	
	}

/*@author : Reem Albunni
 *@desc   : login user
*/
	function login() {
		if($this->request->is('post')){
			$logindata=$this->request->data;
			$s=$this->User->find('first',[
										'conditions'=>[
													   'password'=>$logindata['User']['password']]]);
			if(empty($s)){
				
				$this->Session->setFlash('Username or password is not correct!');
					
			}
			else{

				$this->Session->write('User.id', $s["User"]["id"]);
				$this->redirect(['controller'=>'Products','action'=>'index']);
			}
		}	
	}
/*@author : Reem Albunni
 *@desc   : register a new user
*/
	function register(){
		
		if($this->request->is('post')){
			
			if(empty($this->data['User']['username'])){
				$this->Session->setFlash('Fields are empty!');	
			}
			else{	
				$this->User->create();
				$this->User->save($this->data);
				$this->redirect(['controller'=>'Users','action'=>'login']);	
			}
		}
	}

	/*
	*@author : Reem Albunni
	*@desc   : login
	*/
	function logout(){
		$this->Session->delete('User.id');
		$this->redirect(['controller'=>'Users','action'=>'login']);
	}
}
	
?>