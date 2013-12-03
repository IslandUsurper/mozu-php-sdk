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
*	Properties of the tax context applicable for the order.
*/
class OrderTaxContext
{
	/**
	*Tax amount applied to the handling fee defined for orders on this site.
	*/
	public $handlingFeeTax;
	public function getHandlingFeeTax() {
		return $this->handlingFeeTax;
	}
	
	public function setHandlingFeeTax($handlingFeeTax) {
		$this->handlingFeeTax = $handlingFeeTax;
		return $this;
	}

	/**
	*Tax amount applied to the order.
	*/
	public $orderTax;
	public function getOrderTax() {
		return $this->orderTax;
	}
	
	public function setOrderTax($orderTax) {
		$this->orderTax = $orderTax;
		return $this;
	}

	/**
	*Tax amount applied to the shipping costs on the order.
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
	*Properties of the tax context applicable for line items in an order.
	*/
	public $itemTaxContexts;
	public function getItemTaxContexts() {
		return $this->itemTaxContexts;
	}
	
	public function setItemTaxContexts($itemTaxContexts) {
		$this->itemTaxContexts = $itemTaxContexts;
		return $this;
	}

}

?>
