<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin;



/**
*	A product type is like a product template that can be reused in the product admin service. Assign a product type to have certain attributes.
*/
class AttributeInProductType
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
	*If true, this property is hidden on the storefront. If false, this property is not hidden from the storefront.
	*/
	public $isHiddenProperty;
	public function getIsHiddenProperty() {
		return $this->isHiddenProperty;
	}
	
	public function setIsHiddenProperty($isHiddenProperty) {
		$this->isHiddenProperty = $isHiddenProperty;
		return $this;
	}

	/**
	*If true, this entity is inherited from the base type. If false, this entity is not inherited from the base type.
	*/
	public $isInheritedFromBaseType;
	public function getIsInheritedFromBaseType() {
		return $this->isInheritedFromBaseType;
	}
	
	public function setIsInheritedFromBaseType($isInheritedFromBaseType) {
		$this->isInheritedFromBaseType = $isInheritedFromBaseType;
		return $this;
	}

	/**
	*If true, this attribute has more than one possible value.
	*/
	public $isMultiValueProperty;
	public function getIsMultiValueProperty() {
		return $this->isMultiValueProperty;
	}
	
	public function setIsMultiValueProperty($isMultiValueProperty) {
		$this->isMultiValueProperty = $isMultiValueProperty;
		return $this;
	}

	/**
	*If true, the entity is required by the admin. If false, the entity is not required by the admin.
	*/
	public $isRequiredByAdmin;
	public function getIsRequiredByAdmin() {
		return $this->isRequiredByAdmin;
	}
	
	public function setIsRequiredByAdmin($isRequiredByAdmin) {
		$this->isRequiredByAdmin = $isRequiredByAdmin;
		return $this;
	}

	/**
	*The sequence of this attribute within its product type.
	*/
	public $order;
	public function getOrder() {
		return $this->order;
	}
	
	public function setOrder($order) {
		$this->order = $order;
		return $this;
	}

	/**
	*The wrapper for the properties of the product attribute to set up or generate from the system in the product admin. Properties include namespace, attribute code, attribute sequence, site group ID, input type, value type, data type, boolean flags, and metadata key value pairs.
	*/
	public $attributeDetail;
	public function getAttributeDetail() {
		return $this->attributeDetail;
	}
	
	public function setAttributeDetail($attributeDetail) {
		$this->attributeDetail = $attributeDetail;
		return $this;
	}

	/**
	*The list of vocabulary values available for the attribute associated with the product type.
	*/
	public $vocabularyValues;
	public function getVocabularyValues() {
		return $this->vocabularyValues;
	}
	
	public function setVocabularyValues($vocabularyValues) {
		$this->vocabularyValues = $vocabularyValues;
		return $this;
	}

}

?>
