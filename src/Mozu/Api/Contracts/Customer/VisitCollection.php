<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



class VisitCollection
{
		public $PageCount;
	public function getPageCount() {
		return $this->PageCount;
	}
	
	public function setPageCount($pageCount) {
		$this->PageCount = $pageCount;
		return $this;
	}

		public $PageSize;
	public function getPageSize() {
		return $this->PageSize;
	}
	
	public function setPageSize($pageSize) {
		$this->PageSize = $pageSize;
		return $this;
	}

		public $StartIndex;
	public function getStartIndex() {
		return $this->StartIndex;
	}
	
	public function setStartIndex($startIndex) {
		$this->StartIndex = $startIndex;
		return $this;
	}

		public $TotalCount;
	public function getTotalCount() {
		return $this->TotalCount;
	}
	
	public function setTotalCount($totalCount) {
		$this->TotalCount = $totalCount;
		return $this;
	}

		public $Items;
	public function getItems() {
		return $this->Items;
	}
	
	public function setItems($items) {
		$this->Items = $items;
		return $this;
	}

}

?>