<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Settings\Checkout;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerCheckoutSettingsUrl  {

	/**
		* Get Resource Url for GetCustomerCheckoutSettings
		* @return string Resource Url
	*/
	public static function getCustomerCheckoutSettingsUrl()
	{
		$url = "/api/commerce/settings/checkout/customercheckoutsettings";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCustomerCheckoutSettings
		* @return string Resource Url
	*/
	public static function updateCustomerCheckoutSettingsUrl()
	{
		$url = "/api/commerce/settings/checkout/customercheckoutsettings";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		return $mozuUrl;
	}
	
}

?>

