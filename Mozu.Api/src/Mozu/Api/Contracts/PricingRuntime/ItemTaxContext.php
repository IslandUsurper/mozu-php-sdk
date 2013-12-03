<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PricingRuntime;



/**
*	Properties of the tax context applicable for line items in an order.
*/
class ItemTaxContext
{
	/**
	*Unique identifier of the line item in the order.
	*/
	public $id;
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

		public $productCode;
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		return $this;
	}

	/**
	*Quantity of the line item in the order.
	*/
	public $quantity;
	public function getQuantity() {
		return $this->quantity;
	}
	
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		return $this;
	}

	/**
	*Amount of tax applied to shipping costs for the line item in the order.
	*/
	public $shippingTax;
	public function getShippingTax() {
		return $this->shippingTax;
	}
	
	public function setShippingTax($shippingTax) {
		$this->shippingTax = $shippingTax;
		return $this;
	}

	/**
	*The total tax amount applied to the line item in the order, minus any shipping taxes.
	*/
	public $tax;
	public function getTax() {
		return $this->tax;
	}
	
	public function setTax($tax) {
		$this->tax = $tax;
		return $this;
	}

}

?>
