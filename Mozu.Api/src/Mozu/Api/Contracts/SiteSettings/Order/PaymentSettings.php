<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\SiteSettings\Order;



/**
*	Properties of the payment settings used at order checkout time for the site.
*/
class PaymentSettings
{
	/**
	*Settings that provide for the ability to pay for an order by mail.
	*/
	public $payByMail;
	public function getPayByMail() {
		return $this->payByMail;
	}
	
	public function setPayByMail($payByMail) {
		$this->payByMail = $payByMail;
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

		public $externalPaymentWorkflowDefinitions;
	public function getExternalPaymentWorkflowDefinitions() {
		return $this->externalPaymentWorkflowDefinitions;
	}
	
	public function setExternalPaymentWorkflowDefinitions($externalPaymentWorkflowDefinitions) {
		$this->externalPaymentWorkflowDefinitions = $externalPaymentWorkflowDefinitions;
		return $this;
	}

	/**
	*List of name and account information for a payment gateway. Additional payment gateway providers will be supported in future releases.
	*/
	public $gateways;
	public function getGateways() {
		return $this->gateways;
	}
	
	public function setGateways($gateways) {
		$this->gateways = $gateways;
		return $this;
	}

}

?>
