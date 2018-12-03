<?php

class BlogController extends Controller{
	
	public $postObject;
	public $commentObject;

   	public function post($pID){
		$this->postObject = new Post();
		$post = $this->postObject->getPost($pID);	    
		$this->set('post',$post);

		$this->commentObject = new Comment();
		$comments = $this->commentObject->getUserComments($pID);
		$this->set('comments', $comments);  
   	}
	
	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Blog');
		$this->set('posts',$posts);
	}

	public function addComment(){
		$this->commentObject = new Comment();
		date_default_timezone_set('America/Indiana/Indianapolis');
		$data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date' => Date('Y-m-d H:i:s'),'postID'=>$_POST['pID']);
		$result = $this->commentObject->saveComment($data);
		$this->set('result',$result);
		header('Location: '.BASE_URL.'blog/');
	}
	
	public function removeComment(){
		$this->commentObject = new Comment();
		$data = array('commentID'=>$_POST['commentID']);
		$result = $this->commentObject->deleteComment($data);
		$this->set('result',$result);
	}


	
}

?>