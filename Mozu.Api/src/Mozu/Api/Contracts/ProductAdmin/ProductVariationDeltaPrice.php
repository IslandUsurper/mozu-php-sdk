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
*	The difference between the base price for the product and this variation of the product, which can be a positive or negative decimal value. For example, if the base price for a t-shirt product is $10, but the XL variation should cost $12, the DeltaPrice value should be "2". However, if the XS variation should only cost $8, the DeltaPrice value should be "-2".
*/
class ProductVariationDeltaPrice
{
	/**
	*"3-letter ISO 4217 standard global currency code. Currently, only ""USD"" (US Dollar) is supported."
	*/
	public $currencyCode;
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
		return $this;
	}

	/**
	*Positive or negative decimal value that represents the difference between this variation and the base product.
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
