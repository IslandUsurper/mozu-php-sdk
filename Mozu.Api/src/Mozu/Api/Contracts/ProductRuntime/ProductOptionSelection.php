<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	The selection the shopper made from a list of options set up in product admin.
*/
class ProductOptionSelection
{
	/**
	*"The fully qualified name of the attribute, which is a user defined attribute identifier."
	*/
	public $attributeFQN;
	public function getAttributeFQN() {
		return $this->attributeFQN;
	}
	
	public function setAttributeFQN($attributeFQN) {
		$this->attributeFQN = $attributeFQN;
		return $this;
	}

	/**
	*Identifier of the value of this attribute.
	*/
	public $attributeValueId;
	public function getAttributeValueId() {
		return $this->attributeValueId;
	}
	
	public function setAttributeValueId($attributeValueId) {
		$this->attributeValueId = $attributeValueId;
		return $this;
	}

	/**
	*The custom value the shopper entered for an option set up in product admin.
	*/
	public $shopperEnteredValue;
	public function getShopperEnteredValue() {
		return $this->shopperEnteredValue;
	}
	
	public function setShopperEnteredValue($shopperEnteredValue) {
		$this->shopperEnteredValue = $shopperEnteredValue;
		return $this;
	}

	/**
	*The attribute value.
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
