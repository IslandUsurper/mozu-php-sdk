<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductAdmin\Discounts;



/**
*	Properties of a discount redemption.
*/
class Redemption
{
	/**
	*Unique identifier of the discount associated with the redemption.
	*/
	public $discountId;

	/**
	*Number of the order associated with the discount redemption.
	*/
	public $orderNumber;

	/**
	*The date and time on which the discount was redeemed.
	*/
	public $redeemedOn;

	/**
	*Unique identifier of the user who redeemed the discount.
	*/
	public $userId;

}

?>