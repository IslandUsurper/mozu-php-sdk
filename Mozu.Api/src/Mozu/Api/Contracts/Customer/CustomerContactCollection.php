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



/**
*	Paged list of contact information for a specified customer account.
*/
class CustomerContactCollection
{
	/**
	*The number of pages returned based on the startIndex and pageSize supplied. Signed 64-bit (8-byte) integer. System-supplied and read-only.
	*/
	public $pageCount;
	public function getPageCount() {
		return $this->pageCount;
	}
	
	public function setPageCount($pageCount) {
		$this->pageCount = $pageCount;
		return $this;
	}

	/**
	*Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	*/
	public $pageSize;
	public function getPageSize() {
		return $this->pageSize;
	}
	
	public function setPageSize($pageSize) {
		$this->pageSize = $pageSize;
		return $this;
	}

	/**
	*"Used to create paged results from a query. Indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3."
	*/
	public $startIndex;
	public function getStartIndex() {
		return $this->startIndex;
	}
	
	public function setStartIndex($startIndex) {
		$this->startIndex = $startIndex;
		return $this;
	}

	/**
	*The number of the resource entity items listed in the query collection. Signed 64-bit (8-byte) integer. System-supplied and read-only.
	*/
	public $totalCount;
	public function getTotalCount() {
		return $this->totalCount;
	}
	
	public function setTotalCount($totalCount) {
		$this->totalCount = $totalCount;
		return $this;
	}

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;
	public function getItems() {
		return $this->items;
	}
	
	public function setItems($items) {
		$this->items = $items;
		return $this;
	}

}

?>
