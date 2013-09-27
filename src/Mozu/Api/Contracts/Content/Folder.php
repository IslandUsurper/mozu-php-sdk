<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Content;



/**
*	The properties of a folder including the name of its parent document list, its name, its unique identifier, the ID of its parent folder, and the file location path where it can be found in the folder hierarchy.
*/
class Folder
{
	/**
	*The name of the document list that contains the folder.
	*/
	public $DocumentListName;
	public function getDocumentListName() {
		return $this->DocumentListName;
	}
	
	public function setDocumentListName($documentListName) {
		$this->DocumentListName = $documentListName;
		return $this;
	}

	/**
	*Unique identifier of the folder.
	*/
	public $Id;
	public function getId() {
		return $this->Id;
	}
	
	public function setId($id) {
		$this->Id = $id;
		return $this;
	}

	/**
	*The name of the folder.
	*/
	public $Name;
	public function getName() {
		return $this->Name;
	}
	
	public function setName($name) {
		$this->Name = $name;
		return $this;
	}

	/**
	*If applicable, the parent folder that contains this folder.
	*/
	public $ParentId;
	public function getParentId() {
		return $this->ParentId;
	}
	
	public function setParentId($parentId) {
		$this->ParentId = $parentId;
		return $this;
	}

	/**
	*The content path associated with the folder.
	*/
	public $Path;
	public function getPath() {
		return $this->Path;
	}
	
	public function setPath($path) {
		$this->Path = $path;
		return $this;
	}

}

?>