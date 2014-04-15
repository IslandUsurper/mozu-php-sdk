<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\PaymentService;



/**
*	Account information for the payment.
*/
class GatewayAccount
{
	/**
	*2 letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	*/
	public $countryCode;

	/**
	*Identifier of the payment gateway.
	*/
	public $gatewayDefinitionId;

	/**
	*Identifier of the entity.
	*/
	public $id;

	/**
	*If true, the product is marked as available for sale. Setting a product to IsActive = false will prevent it from being shown on the customer facing storefront.
	*/
	public $isActive;

	/**
	*List of credential fields for the payment gateway account.
	*/
	public $credentialFields;

}

?>
