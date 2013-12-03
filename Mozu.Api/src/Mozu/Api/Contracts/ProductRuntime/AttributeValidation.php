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
*	Validates the attribute configured for the product in the storefront against the attribute configured in product admin.
*/
class AttributeValidation
{
	/**
	* System-supplied and read-only.
	*/
	public $maxDateValue;
	public function getMaxDateValue() {
		return $this->maxDateValue;
	}
	
	public function setMaxDateValue($maxDateValue) {
		$this->maxDateValue = $maxDateValue;
		return $this;
	}

	/**
	*The maximum number of characters for the numeric length.
	*/
	public $maxNumericValue;
	public function getMaxNumericValue() {
		return $this->maxNumericValue;
	}
	
	public function setMaxNumericValue($maxNumericValue) {
		$this->maxNumericValue = $maxNumericValue;
		return $this;
	}

	/**
	*The maximum number of characters for the string length.
	*/
	public $maxStringLength;
	public function getMaxStringLength() {
		return $this->maxStringLength;
	}
	
	public function setMaxStringLength($maxStringLength) {
		$this->maxStringLength = $maxStringLength;
		return $this;
	}

	/**
	* System-supplied and read-only.
	*/
	public $minDateValue;
	public function getMinDateValue() {
		return $this->minDateValue;
	}
	
	public function setMinDateValue($minDateValue) {
		$this->minDateValue = $minDateValue;
		return $this;
	}

	/**
	*The minimum number of characters for the numeric length.
	*/
	public $minNumericValue;
	public function getMinNumericValue() {
		return $this->minNumericValue;
	}
	
	public function setMinNumericValue($minNumericValue) {
		$this->minNumericValue = $minNumericValue;
		return $this;
	}

	/**
	*The minimum character length of the string.
	*/
	public $minStringLength;
	public function getMinStringLength() {
		return $this->minStringLength;
	}
	
	public function setMinStringLength($minStringLength) {
		$this->minStringLength = $minStringLength;
		return $this;
	}

	/**
	*Regular expression used to process attribute values that require special formatting such as phone numbers.
	*/
	public $regularExpression;
	public function getRegularExpression() {
		return $this->regularExpression;
	}
	
	public function setRegularExpression($regularExpression) {
		$this->regularExpression = $regularExpression;
		return $this;
	}

}

?>
