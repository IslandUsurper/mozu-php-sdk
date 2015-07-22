<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\CommerceRuntime\Fulfillment;



/**
*	Properties of an item shipped in a physical package.
*/
class PackageItem
{
	/**
	*This specifies the fulfillment type of digital package item.
	*/
	public $fulfillmentItemType;

	/**
	*The line id associated with the fulfillment.
	*/
	public $lineId;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*The specified quantity of objects and items. This property is used for numerous object types including products, options, components within a product bundle, cart and order items, returned items, shipping line items, items in a digital product. and items associated with types and reservations.
	*/
	public $quantity;

}

?>