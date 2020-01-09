<?php
namespace App\Controller;
use App\Controller\AppController;
 
 class postsController extends AppController{

 	public function index(){
 		$this ->set('posts', $this->Posts->find('all'));
 	}
 	public function add(){
 		$post = $this->Posts->newEntity();
 		if($this->request->is('post')){
 			$post = $this->Posts->patchEntity($post, $this->request->getData());
 			if ($this->Posts->save($post)){
 				$this->Flash->success('Post Added Successfully',['key'=>'message']);
 				return $this ->redirect(['action'=>'index']);

 			}
 			$this->Flash->error(__('Unable to add your post!'));
 		}
 		$this->set('post', $post);
 	}
 	public function view($id = Null){
 		$posts = $this->Posts->get($id);
 		$this->Set('post',$posts);
 	}
 	
 	public function edit($id = Null){
 		$post = $this->Posts->get($id);
 		if ($this->request->is(['post', 'put'])){
 			{
        $this->Posts->patchEntity($post, $this->request->getData());
        if ($this->Posts->save($post)) {
            $this->Flash->success(__('Your article has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update your article.'));
    	}
 		$this->set('post','post');
 	}
 }
 	public function delete($id){
 	$this->request->allowMethod(['post','delete']);
 	$post = $this->Posts->get($id);
 	$this->Posts->delete($post);
 	return $this ->redirect(['action'=>'index']);
 }
}
?>