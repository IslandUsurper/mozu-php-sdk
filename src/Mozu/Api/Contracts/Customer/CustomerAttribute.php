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
*	Properties of an attribute associated with a customer account.
*/
class CustomerAttribute
{
		public $AttributeFQN;
	public function getAttributeFQN() {
		return $this->AttributeFQN;
	}
	
	public function setAttributeFQN($attributeFQN) {
		$this->AttributeFQN = $attributeFQN;
		return $this;
	}

	/**
	*Unique identifier of the customer account attribute.
	*/
	public $AttributeId;
	public function getAttributeId() {
		return $this->AttributeId;
	}
	
	public function setAttributeId($attributeId) {
		$this->AttributeId = $attributeId;
		return $this;
	}

	/**
	*The attribute set associated with the customer account attribute.
	*/
	public $AttributeSetId;
	public function getAttributeSetId() {
		return $this->AttributeSetId;
	}
	
	public function setAttributeSetId($attributeSetId) {
		$this->AttributeSetId = $attributeSetId;
		return $this;
	}

	/**
	*Unique identifier of the customer account attribute.
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
	*List of values for the attribute.
	*/
	public $Values;
	public function getValues() {
		return $this->Values;
	}
	
	public function setValues($values) {
		$this->Values = $values;
		return $this;
	}

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. This value is system-supplied and read-only.
	*/
	public $AuditInfo;
	public function getAuditInfo() {
		return $this->AuditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->AuditInfo = $auditInfo;
		return $this;
	}

}

?>