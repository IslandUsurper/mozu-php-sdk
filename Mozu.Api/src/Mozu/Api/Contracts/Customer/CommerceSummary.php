<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Customer;



/**
*	Properties of the commerce summary associated with a customer account, which includes details about the shopper's most recent order, wish lists, and total order value over time.
*/
class CommerceSummary
{
	/**
	*The date and time the shopper last submitted an order for any site associated with the tenant.
	*/
	public $lastOrderDate;

	/**
	*The total number of order the shopper submitted across all sites associated with the tenant.
	*/
	public $orderCount;

		public $visitsCount;

	/**
	*The number of wish lists associated with a customer account. This number represents the total number of a shopper's wish lists across all sites associated with a tenant.
	*/
	public $wishlistCount;

	/**
	*The aggregate total amount of all orders the shopper submitted, across all sites associated with the tenant.
	*/
	public $totalOrderAmount;

}

?>
