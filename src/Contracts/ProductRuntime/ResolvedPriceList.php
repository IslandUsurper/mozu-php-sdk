<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\ProductRuntime;



/**
*	Mozu.ProductRuntime.Contracts.ResolvedPriceList ApiType DOCUMENT_HERE 
*/
class ResolvedPriceList
{
	/**
	*The localized description in text for the object, displayed per the locale code. For example, descriptions are used for product descriptions, attributes, and pre-authorization transaction types.
	*/
	public $description;

	/**
	*The display name of the source product property. For a product field it will be the display name of the field. For a product attribute it will be the Attribute Name.
	*/
	public $name;

	/**
	*Mozu.ProductRuntime.Contracts.ResolvedPriceList priceListCode ApiTypeMember DOCUMENT_HERE 
	*/
	public $priceListCode;

	/**
	*Mozu.ProductRuntime.Contracts.ResolvedPriceList priceListId ApiTypeMember DOCUMENT_HERE 
	*/
	public $priceListId;

}

?>