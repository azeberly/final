<?php

class ManageCategoriesController extends Controller{

	protected $categoryObject;
	protected $access = 1;

	    public function index(){

		    $this->categoryObject = new categories();
            $category = $this->categoryObject->getCategories();
		    $this->set('task', 'save');
		    $this->set('pageTitle', 'Category Management');
		    $this->set('categories', $category);
        }

	    public function getCategories(){

		    $this->categoryObject = new Categories;
		     $outcome = $this->categoryObject->getCategories();
	    }

	    public function edit($cID){

		    $this->categoryObject = new Categories;
		    $outcome = $this->categoryObject->getCategory($cID);
		    $this->set('category', $outcome);
		    $this->set('cat', 'Edit category');
		    $this->set('task', 'update');
	    }

	    public function update(){
		
			$this->categoryObject = new Categories();
			$data = array('name' => $_POST['category_name'], 'categoryID' => $_POST['category_categoryID']);
			$result = $this->categoryObject->update($data);
			$categories = $this->categoryObject->getCategories();
			$this->set('task', 'save');
			$this->set('pageTitle', 'Category Management');
			$this->set('categories', $categories);
			$this->set('message', $result);
		}

        public function add(){

	        $new = $_POST['category'];
	        $this->categoryObject = new Categories;
	        $outcome = $this->categoryObject->addCategory($new);

		    if(isset($outcome) and !empty($outcome)){
			    $this->set('message','Category added.');
		    }
		    else{
			    $this->set('message','Category add failed.');
		    }
		    $outcome = $this->categoryObject->getCategories();
		    $this->set('categories',$outcome);
		    header('Location: ' . BASE_URL . 'managecategories/index/');
	    }

	    public function delete($categoryID){

		    $this->categoryObject = new categories();
		    $this->categoryObject->deleteCategory($categoryID);
		    $this->set('message', 'Category deleted.');
		    header('Location: ' . BASE_URL . 'managecategories/index/');
	    }
}

?>
