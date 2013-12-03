<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Discounts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class DiscountTargetUrl  {

	/**
		* Get Resource Url for GetDiscountTarget
		* @param int $discountId 
		* @return string Resource Url
	*/
	public static function getDiscountTargetUrl($discountId)
	{
		$url = "/api/commerce/catalog/admin/discounts/{discountId}/target";
		$url = MozuUrl::formatUrl($url, "discountId", $discountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for UpdateDiscountTarget
		* @param int $discountId Unique identifier of the discount. System-supplied and read-only.
		* @return string Resource Url
	*/
	public static function updateDiscountTargetUrl($discountId)
	{
		$url = "/api/commerce/catalog/admin/discounts/{discountId}/target";
		$url = MozuUrl::formatUrl($url, "discountId", $discountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>

