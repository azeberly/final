<?php
class Categories extends Model{

	public function getCategories(){

		$sql = 'SELECT categoryID,name
		FROM categories
		ORDER BY name ASC';
		$results = $this->db->execute($sql);
		while ($row=$results->fetchrow()) {
			$categories[] = $row;
		}
		return $categories;
	}

	public function getCategory($cID){

		$sql = 'SELECT categoryID, name
		FROM categories
		WHERE categoryID=?';
		$outcome = $this->db->getrow($sql,array($cID));
		return $outcome;
	}

	public function update($data){

		$sqlUpdate = 'UPDATE categories
		SET name = ?
		WHERE categoryID = ?';
		$this->db->execute($sqlUpdate,$data);
		return 'Category updated.';
	}

	public function addCategory($category){
		$sql = "INSERT INTO categories (name)
		VALUES (?)";
		$this->db->execute($sql, $category);
		$message = 'Category added.';
		return $message;
	}

	public function deleteCategory($categoryID){

		$sql = 'DELETE FROM categories
                WHERE categoryID = ?';
		$this->db->execute($sql, $categoryID);
		$message = 'Category deleted.';
	}
	
}

?>
