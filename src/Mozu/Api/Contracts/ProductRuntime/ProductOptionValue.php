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
*	Represents the values that are the product option selections for a shopper to choose when ordering a product.
*/
class ProductOptionValue
{
	/**
	*Unique identifier of the product attribute value.
	*/
	public $AttributeValueId;
	public function getAttributeValueId() {
		return $this->AttributeValueId;
	}
	
	public function setAttributeValueId($attributeValueId) {
		$this->AttributeValueId = $attributeValueId;
		return $this;
	}

	/**
	*The difference between the highest price and the lowest price.
	*/
	public $DeltaPrice;
	public function getDeltaPrice() {
		return $this->DeltaPrice;
	}
	
	public function setDeltaPrice($deltaPrice) {
		$this->DeltaPrice = $deltaPrice;
		return $this;
	}

	/**
	*The difference between the highest weight and the lowest weight.
	*/
	public $DeltaWeight;
	public function getDeltaWeight() {
		return $this->DeltaWeight;
	}
	
	public function setDeltaWeight($deltaWeight) {
		$this->DeltaWeight = $deltaWeight;
		return $this;
	}

	/**
	*If true, the product option value is the default value that the merchant supplied.
	*/
	public $IsDefault;
	public function getIsDefault() {
		return $this->IsDefault;
	}
	
	public function setIsDefault($isDefault) {
		$this->IsDefault = $isDefault;
		return $this;
	}

	/**
	*If true, the product option value is available for a shopper to choose. During configuration, this property will be false if the option value is invalid with other selected options.
	*/
	public $IsEnabled;
	public function getIsEnabled() {
		return $this->IsEnabled;
	}
	
	public function setIsEnabled($isEnabled) {
		$this->IsEnabled = $isEnabled;
		return $this;
	}

	/**
	*If true, the entity is selected. If false, the entity is not selected.
	*/
	public $IsSelected;
	public function getIsSelected() {
		return $this->IsSelected;
	}
	
	public function setIsSelected($isSelected) {
		$this->IsSelected = $isSelected;
		return $this;
	}

	/**
	*The product attribute value entered by the shopper, if applicable.
	*/
	public $ShopperEnteredValue;
	public function getShopperEnteredValue() {
		return $this->ShopperEnteredValue;
	}
	
	public function setShopperEnteredValue($shopperEnteredValue) {
		$this->ShopperEnteredValue = $shopperEnteredValue;
		return $this;
	}

	/**
	*The string value entered for a product option attribute.
	*/
	public $StringValue;
	public function getStringValue() {
		return $this->StringValue;
	}
	
	public function setStringValue($stringValue) {
		$this->StringValue = $stringValue;
		return $this;
	}

	/**
	*The value of a product option attribute.
	*/
	public $Value;
	public function getValue() {
		return $this->Value;
	}
	
	public function setValue($value) {
		$this->Value = $value;
		return $this;
	}

}

?>