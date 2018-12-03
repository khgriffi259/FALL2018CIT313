<?php
class CategoriesController extends Controller{
	
	protected $categoryObject;

	public function index(){
		$this->categoryObject = new Categories();
		$categories = $this->categoryObject->getCategories();
		$this->set('title', 'Manage Categories');
		$this->set('categories', $categories);
	}

	public function getCategories(){
		$this->categoryObject = new Categories();
		$outcome = $this->categoryObject->getCategories();
		}
		
	// public function edit($cID){
	public function edit(){
		$cID=$_POST['categoryID'];
		
		$this->categoryObject = new Categories();
		$outcome = $this->categoryObject->getCategory($cID);
		$this->set('category', $outcome);
		$this->set('task', 'update');
	}

	public function update(){
		$cID = $_POST['categoryID'];
		$name = $_POST['categoryname'];
		$this->categoryObject = new Categories();
		$outcome = $this->categoryObject->update($cID,$name);

		if($outcome){
			$this->set('message','Category updated.');
		}
		else{
			$this->set('message','Category update failed.');
		}
		$outcome = $this->categoryObject->getCategories();
		$this->set('categories',$outcome);
	}

	public function add(){
		$new = $_POST['newCategory'];
		$this->categoryObject = new Categories();
		$outcome = $this->categoryObject->addCategory($new);

		if(isset($outcome) and !empty($outcome)){
			$this->set('message','Category added.');
		}
		else{
			$this->set('message','Category add failed.');
		}
		
		$outcome = $this->categoryObject->getCategories();
		$this->set('categories',$outcome);
	}

	public function delete(){
		$data = array('categoryID'=>$_POST['categoryID']);
		$this->categoryObject = new Categories();
		$result = $this->categoryObject->deleteCategory($data);
		$this->set('message',$result);
		header('Location: '.BASE_URL.'manageposts/');
	}

}
?>