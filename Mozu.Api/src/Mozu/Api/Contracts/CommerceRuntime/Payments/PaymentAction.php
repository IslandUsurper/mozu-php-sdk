<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Payments;



/**
*	Properties of the payment action performed for an order.
*/
class PaymentAction
{
	/**
	*The name of the payment action, such as "AuthorizeAndCapture".
	*/
	public $actionName;
	public function getActionName() {
		return $this->actionName;
	}
	
	public function setActionName($actionName) {
		$this->actionName = $actionName;
		return $this;
	}

	/**
	*The total monetary amount of the payment transaction.
	*/
	public $amount;
	public function getAmount() {
		return $this->amount;
	}
	
	public function setAmount($amount) {
		$this->amount = $amount;
		return $this;
	}

		public $cancelUrl;
	public function getCancelUrl() {
		return $this->cancelUrl;
	}
	
	public function setCancelUrl($cancelUrl) {
		$this->cancelUrl = $cancelUrl;
		return $this;
	}

	/**
	*If applicable, the check number associated with the payment action.
	*/
	public $checkNumber;
	public function getCheckNumber() {
		return $this->checkNumber;
	}
	
	public function setCheckNumber($checkNumber) {
		$this->checkNumber = $checkNumber;
		return $this;
	}

		public $currencyCode;
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
	
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
		return $this;
	}

	/**
	*Date and time the payment gateway interaction was performed.
	*/
	public $interactionDate;
	public function getInteractionDate() {
		return $this->interactionDate;
	}
	
	public function setInteractionDate($interactionDate) {
		$this->interactionDate = $interactionDate;
		return $this;
	}

	/**
	*Unique ID that references an original transaction in the event of a credit back.
	*/
	public $referenceSourcePaymentId;
	public function getReferenceSourcePaymentId() {
		return $this->referenceSourcePaymentId;
	}
	
	public function setReferenceSourcePaymentId($referenceSourcePaymentId) {
		$this->referenceSourcePaymentId = $referenceSourcePaymentId;
		return $this;
	}

		public $returnUrl;
	public function getReturnUrl() {
		return $this->returnUrl;
	}
	
	public function setReturnUrl($returnUrl) {
		$this->returnUrl = $returnUrl;
		return $this;
	}

	/**
	*Properties of a manually performed interaction with the payment gateway.
	*/
	public $manualGatewayInteraction;
	public function getManualGatewayInteraction() {
		return $this->manualGatewayInteraction;
	}
	
	public function setManualGatewayInteraction($manualGatewayInteraction) {
		$this->manualGatewayInteraction = $manualGatewayInteraction;
		return $this;
	}

	/**
	*The billing information associated with this payment action.
	*/
	public $newBillingInfo;
	public function getNewBillingInfo() {
		return $this->newBillingInfo;
	}
	
	public function setNewBillingInfo($newBillingInfo) {
		$this->newBillingInfo = $newBillingInfo;
		return $this;
	}

}

?>
