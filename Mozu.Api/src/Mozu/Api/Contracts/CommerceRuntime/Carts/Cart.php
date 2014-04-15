<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Carts;



/**
*	Properties of an active shopping cart.
*/
class Cart
{
		public $channelCode;

		public $couponCodes;

		public $currencyCode;

		public $customerInteractionType;

		public $discountedSubtotal;

	/**
	*The estimated total of the cart after all discounts have been applied.
	*/
	public $discountedTotal;

	/**
	*Estimated amount of discounts applied to all items in the cart. Usually a negative dollar amount or number. System-supplied and read-only.
	*/
	public $discountTotal;

	/**
	*Date in UTC Date/Time when the cart becomes inactive based on a system-calculated interval. For example, if an anonymous shopper has 14 days of inactivity, the cart is considered abandoned after that period of inactivity. System-supplied and read-only.
	*/
	public $expirationDate;

	/**
	*The monetary sum of all fees incurred in the cart.
	*/
	public $feeTotal;

	/**
	*If the handling fee for the cart is subject to sales tax, the total tax amount.
	*/
	public $handlingTaxTotal;

	/**
	*Unique identifier of the shopping cart.
	*/
	public $id;

	/**
	*The total amount of tax for items in the cart.
	*/
	public $itemTaxTotal;

	/**
	*The date in UTC Date/Time when the items in the cart were last validated against the site's product catalog. System-supplied and read-only.
	*/
	public $lastValidationDate;

		public $shippingSubTotal;

	/**
	*The total amount of tax incurred on the shipping charges in the cart.
	*/
	public $shippingTaxTotal;

	/**
	*The total shipping amount estimated for the cart.
	*/
	public $shippingTotal;

	/**
	*Unique identifier of the site.
	*/
	public $siteId;

	/**
	*Estimated amount of the cart without sales tax, shipping costs, and other fees.
	*/
	public $subtotal;

	/**
	*The total sum of sales tax estimated for a cart.
	*/
	public $taxTotal;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Estimated total amount of the cart, including items, sales tax, shipping costs, and other fees.
	*/
	public $total;

	/**
	*Unique identifier of the user associated with the shopping cart.
	*/
	public $userId;

		public $visitId;

		public $webSessionId;

	/**
	*Identifier and datetime stamp information recorded when creating or updating a resource entity. System-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Messages logged or created each time the cart was modified.
	*/
	public $changeMessages;

		public $fulfillmentInfo;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

	/**
	*List of order-level discounts projected to apply to the cart at checkout.
	*/
	public $orderDiscounts;

}

?>
