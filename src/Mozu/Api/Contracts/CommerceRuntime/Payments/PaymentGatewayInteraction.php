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
*	Properties of an interaction with the payment gateway.
*/
class PaymentGatewayInteraction
{
	/**
	*If required by the payment gateway, the authorization code of the transaction.
	*/
	public $GatewayAuthCode;
	public function getGatewayAuthCode() {
		return $this->GatewayAuthCode;
	}
	
	public function setGatewayAuthCode($gatewayAuthCode) {
		$this->GatewayAuthCode = $gatewayAuthCode;
		return $this;
	}

	/**
	*AVS codes supplied by the payment gateway.
	*/
	public $GatewayAVSCodes;
	public function getGatewayAVSCodes() {
		return $this->GatewayAVSCodes;
	}
	
	public function setGatewayAVSCodes($gatewayAVSCodes) {
		$this->GatewayAVSCodes = $gatewayAVSCodes;
		return $this;
	}

	/**
	*CVV2 codes supplied by the payment gateway.
	*/
	public $GatewayCVV2Codes;
	public function getGatewayCVV2Codes() {
		return $this->GatewayCVV2Codes;
	}
	
	public function setGatewayCVV2Codes($gatewayCVV2Codes) {
		$this->GatewayCVV2Codes = $gatewayCVV2Codes;
		return $this;
	}

	/**
	*Unique identifier of the payment interaction from the payment gateway.
	*/
	public $GatewayInteractionId;
	public function getGatewayInteractionId() {
		return $this->GatewayInteractionId;
	}
	
	public function setGatewayInteractionId($gatewayInteractionId) {
		$this->GatewayInteractionId = $gatewayInteractionId;
		return $this;
	}

	/**
	*Response code from the gateway associated with the payment interaction. For example, if the gateway returns "Not Authorized," an interaction for voiding the payment transaction would result.
	*/
	public $GatewayResponseCode;
	public function getGatewayResponseCode() {
		return $this->GatewayResponseCode;
	}
	
	public function setGatewayResponseCode($gatewayResponseCode) {
		$this->GatewayResponseCode = $gatewayResponseCode;
		return $this;
	}

	/**
	*Unique identifier of the gateway transaction associated with the payment interaction.
	*/
	public $GatewayTransactionId;
	public function getGatewayTransactionId() {
		return $this->GatewayTransactionId;
	}
	
	public function setGatewayTransactionId($gatewayTransactionId) {
		$this->GatewayTransactionId = $gatewayTransactionId;
		return $this;
	}

}

?>