<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Contracts\Location;



/**
*	Properties of a physical location a tenant uses to manage inventory and fulfills orders, provide store finder functionality, or both..
*/
class Location
{
	/**
	*User-defined code to assign to this location.
	*/
	public $code;

	/**
	*User-defined description of this location.
	*/
	public $description;

	/**
	*The fax number associated with this location.
	*/
	public $fax;

	/**
	*The user-defined name of the location.
	*/
	public $name;

	/**
	*Any tenant-defined notes associated with this location.
	*/
	public $note;

	/**
	*The phone number associated with this location.
	*/
	public $phone;

	/**
	*If true, this location maintains its own product inventory. If the location uses the direct ship fulfillment type, it must also support inventory.
	*/
	public $supportsInventory;

	/**
	*List of tenant-defined tags associated with this location.
	*/
	public $tags;

	/**
	*The physical address properties of the location.
	*/
	public $address;

		public $auditInfo;

	/**
	*List of order fulfillment types associated with this location. The location can have fulfillment types of direct ship (DS), in-store pickup (SP), or both.
	*/
	public $fulfillmentTypes;

	/**
	*The geographical coordinates associated with this location.
	*/
	public $geo;

	/**
	*List of location types associated with this location. You can associate individual locations with any number of location types.
	*/
	public $locationTypes;

	/**
	*List of standard operating hours for each day of the week this location is open for shopper business.
	*/
	public $regularHours;

		public $shippingOriginContact;

}

?>
