<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Orders\AppliedDiscountUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use this subresource to apply coupons to or remove coupons from an order based on a supplied coupon code.
*/
class AppliedDiscountClient {

	/**
	* Apply a coupon to the order.
	*
	* @param string $couponCode 
	* @param string $orderId Unique identifier of the order to associate the coupon. System-supplied and read-only.
	* @param string $updateMode Specifies whether to apply the coupon by updating the original order, updating the order in draft mode, or updating the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version 
	* @return MozuClient
	*/
	public static function applyCouponClient( $couponCode,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AppliedDiscountUrl::applyCouponUrl($couponCode, $orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Removes a coupon previously applied to the order.
	*
	* @param string $couponCode 
	* @param string $orderId Unique identifier of the order with the coupon to remove.
	* @param string $updateMode Specifies whether to remove the coupon by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version 
	* @return MozuClient
	*/
	public static function removeCouponClient( $couponCode,  $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AppliedDiscountUrl::removeCouponUrl($couponCode, $orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Removes all coupons previously applied to the order.
	*
	* @param string $orderId Unique identifier of the order with the coupons to remove.
	* @param string $updateMode Specifies whether to remove coupons by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal", "ApplyToDraft", or "ApplyAndCommit".
	* @param string $version 
	* @return MozuClient
	*/
	public static function removeCouponsClient( $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = AppliedDiscountUrl::removeCouponsUrl($orderId, $updateMode, $version);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

