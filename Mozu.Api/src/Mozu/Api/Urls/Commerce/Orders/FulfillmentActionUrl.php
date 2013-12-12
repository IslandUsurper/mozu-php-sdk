<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Orders;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class FulfillmentActionUrl  {

	/**
		* Get Resource Url for PerformFulfillmentAction
		* @param string $orderId Unique identifier of the order for which to perform the fulfillment action.
		* @return string Resource Url
	*/
	public static function performFulfillmentActionUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/fulfillment/actions/";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
}

?>
