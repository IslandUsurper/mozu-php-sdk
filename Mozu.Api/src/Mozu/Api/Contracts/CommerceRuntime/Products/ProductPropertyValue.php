<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Products;



/**
*	Values of a product property attribute.
*/
class ProductPropertyValue
{
	/**
	*Property string value in the language specified in the locale code for the product storefront.
	*/
	public $stringValue;
	public function getStringValue() {
		return $this->stringValue;
	}
	
	public function setStringValue($stringValue) {
		$this->stringValue = $stringValue;
		return $this;
	}

	/**
	*Value of the product property.
	*/
	public $value;
	public function getValue() {
		return $this->value;
	}
	
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}

}

?>
