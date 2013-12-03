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
*	Discount used to calculate SalePrice. Includes coupon code if applicable, amount of the discount, and discount savings. Discounts can be either an absolute price or a percentage off. The sale price beats any discounts.
*/
class Discount
{
	/**
	*The integer amount of the discount. For example, an entry of "10" could represent a discount of $10.00 or a discount of 10%, depending on the type.
	*/
	public $amount;
	public function getAmount() {
		return $this->amount;
	}
	
	public function setAmount($amount) {
		$this->amount = $amount;
		return $this;
	}

	/**
	*The type of discount amount, such as an amount or a percentage.
	*/
	public $amountType;
	public function getAmountType() {
		return $this->amountType;
	}
	
	public function setAmountType($amountType) {
		$this->amountType = $amountType;
		return $this;
	}

	/**
	*The most recent number of redeemed discounts.
	*/
	public $currentRedemptionCount;
	public function getCurrentRedemptionCount() {
		return $this->currentRedemptionCount;
	}
	
	public function setCurrentRedemptionCount($currentRedemptionCount) {
		$this->currentRedemptionCount = $currentRedemptionCount;
		return $this;
	}

	/**
	*Unique identifier of the discount.
	*/
	public $id;
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	*The scope to which the discount applies, which is "Order" for order discounts or "LineItem" for individual product discounts.
	*/
	public $scope;
	public function getScope() {
		return $this->scope;
	}
	
	public function setScope($scope) {
		$this->scope = $scope;
		return $this;
	}

	/**
	*Current status of the product discount. Possible values are "Active", "Scheduled", or "Expired".
	*/
	public $status;
	public function getStatus() {
		return $this->status;
	}
	
	public function setStatus($status) {
		$this->status = $status;
		return $this;
	}

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. System-supplied and read-only.
	*/
	public $auditInfo;
	public function getAuditInfo() {
		return $this->auditInfo;
	}
	
	public function setAuditInfo($auditInfo) {
		$this->auditInfo = $auditInfo;
		return $this;
	}

		public $conditions;
	public function getConditions() {
		return $this->conditions;
	}
	
	public function setConditions($conditions) {
		$this->conditions = $conditions;
		return $this;
	}

	/**
	*Complex type that contains content for a language specified by LocaleCode.
	*/
	public $content;
	public function getContent() {
		return $this->content;
	}
	
	public function setContent($content) {
		$this->content = $content;
		return $this;
	}

	/**
	*Properties of the target object to which the discount applies, such as a product or an order.
	*/
	public $target;
	public function getTarget() {
		return $this->target;
	}
	
	public function setTarget($target) {
		$this->target = $target;
		return $this;
	}

}

?>
