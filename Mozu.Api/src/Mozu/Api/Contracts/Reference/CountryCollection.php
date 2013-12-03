<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Reference;



/**
*	The paged collection of country codes and their corresponding names.
*/
class CountryCollection
{
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
