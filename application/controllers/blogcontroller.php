<?php

class BlogController extends Controller{

	public $postObject;
	public $commentsObject;

    public function post($pID){

		$this->postObject = new Post();
		$this->commentsObject = new Comment();
		$post = $this->postObject->getPost($pID);
		$comments = $this->commentsObject->getComments($pID);
	    $this->set('post',$post);
		$this->set('comments',$comments);
     }

	public function index(){

		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	 }

	public function add(){
		 
		 $this->commentObject = new Comment();
		 $data = array('pID'=>$_POST['pID'],
		 'uID'=>$_POST['uID'],
		 'commentText'=>$_POST['comment'],
		 'date'=>$_POST['date']);
		 $this->commentObject->addComment($data);
		 header('Location: ' .BASE_URL. 'blog/post/' . $_POST['pID']);
     }

	public function delete($commentID) {

		$this->commentObject = new Comment();
		$this->commentObject->deleteComment($commentID);
		//NEW CODE
		$this->set('title', 'The Default Blog View');
		$this->set('posts', $posts);
		$this->set('message', $result);
		header('Location: ' .BASE_URL. 'blog/index');
	 }

		
}

?>
