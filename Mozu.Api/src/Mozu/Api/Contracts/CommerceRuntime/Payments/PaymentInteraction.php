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
*	Properties of a resulting payment interaction that occurs when a payment action is performed.
*/
class PaymentInteraction
{
	/**
	*If applicable, the total monetary amount associated with this payment interaction.
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
	*If applicable, the check number associated with this payment interaction.
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
	*If required by the payment gateway, the authorization code of the transaction.
	*/
	public $gatewayAuthCode;
	public function getGatewayAuthCode() {
		return $this->gatewayAuthCode;
	}
	
	public function setGatewayAuthCode($gatewayAuthCode) {
		$this->gatewayAuthCode = $gatewayAuthCode;
		return $this;
	}

	/**
	*AVS codes supplied by the payment gateway.
	*/
	public $gatewayAVSCodes;
	public function getGatewayAVSCodes() {
		return $this->gatewayAVSCodes;
	}
	
	public function setGatewayAVSCodes($gatewayAVSCodes) {
		$this->gatewayAVSCodes = $gatewayAVSCodes;
		return $this;
	}

	/**
	*CVV2 codes supplied by the payment gateway.
	*/
	public $gatewayCVV2Codes;
	public function getGatewayCVV2Codes() {
		return $this->gatewayCVV2Codes;
	}
	
	public function setGatewayCVV2Codes($gatewayCVV2Codes) {
		$this->gatewayCVV2Codes = $gatewayCVV2Codes;
		return $this;
	}

	/**
	*Unique identifier of the gateway interaction. Used for credit card transactions where the payment creates a GatewayInteractionId for each interaction. System-supplied and read-only.
	*/
	public $gatewayInteractionId;
	public function getGatewayInteractionId() {
		return $this->gatewayInteractionId;
	}
	
	public function setGatewayInteractionId($gatewayInteractionId) {
		$this->gatewayInteractionId = $gatewayInteractionId;
		return $this;
	}

	/**
	*Response code from the gateway associated with the payment interaction. For example, if the gateway returns "Not Authorized," an interaction for voiding the payment transaction would result.
	*/
	public $gatewayResponseCode;
	public function getGatewayResponseCode() {
		return $this->gatewayResponseCode;
	}
	
	public function setGatewayResponseCode($gatewayResponseCode) {
		$this->gatewayResponseCode = $gatewayResponseCode;
		return $this;
	}

	/**
	*Unique identifier of the gateway transaction associated with the payment interaction.
	*/
	public $gatewayTransactionId;
	public function getGatewayTransactionId() {
		return $this->gatewayTransactionId;
	}
	
	public function setGatewayTransactionId($gatewayTransactionId) {
		$this->gatewayTransactionId = $gatewayTransactionId;
		return $this;
	}

	/**
	*Unique identifier of the payment interaction.
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
	*Date and time the payment interaction occured.
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
	*The type of payment interaction, such as Capture or CheckReceived.
	*/
	public $interactionType;
	public function getInteractionType() {
		return $this->interactionType;
	}
	
	public function setInteractionType($interactionType) {
		$this->interactionType = $interactionType;
		return $this;
	}

	/**
	*If true, the payment interaction was manually defined s part of offline order processing.
	*/
	public $isManual;
	public function getIsManual() {
		return $this->isManual;
	}
	
	public function setIsManual($isManual) {
		$this->isManual = $isManual;
		return $this;
	}

	/**
	*If true, this payment interaction repeats on a scheduled interval.
	*/
	public $isRecurring;
	public function getIsRecurring() {
		return $this->isRecurring;
	}
	
	public function setIsRecurring($isRecurring) {
		$this->isRecurring = $isRecurring;
		return $this;
	}

	/**
	*Note content entered for a payment interaction.
	*/
	public $note;
	public function getNote() {
		return $this->note;
	}
	
	public function setNote($note) {
		$this->note = $note;
		return $this;
	}

	/**
	*Unique identifier of the order associated with this payment interaction.
	*/
	public $orderId;
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		return $this;
	}

		public $paymentEntryStatus;
	public function getPaymentEntryStatus() {
		return $this->paymentEntryStatus;
	}
	
	public function setPaymentEntryStatus($paymentEntryStatus) {
		$this->paymentEntryStatus = $paymentEntryStatus;
		return $this;
	}

	/**
	*Unique identifier of the payment associated with this transaction.
	*/
	public $paymentId;
	public function getPaymentId() {
		return $this->paymentId;
	}
	
	public function setPaymentId($paymentId) {
		$this->paymentId = $paymentId;
		return $this;
	}

	/**
	*Unique identifier of previous interaction that this payment interaction is modifying. For example, when refunding a payment, the crediting interaction would reference the capture interaction.
	*/
	public $paymentTransactionInteractionIdReference;
	public function getPaymentTransactionInteractionIdReference() {
		return $this->paymentTransactionInteractionIdReference;
	}
	
	public function setPaymentTransactionInteractionIdReference($paymentTransactionInteractionIdReference) {
		$this->paymentTransactionInteractionIdReference = $paymentTransactionInteractionIdReference;
		return $this;
	}

	/**
	*The status of this payment interaction. Possible values are "Success" or "Failure".
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

}

?>
