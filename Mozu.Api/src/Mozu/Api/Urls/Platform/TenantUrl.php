<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class TenantUrl  {

	/**
		* Get Resource Url for GetTenant
		* @param int $tenantId Unique identifier of the Mozu tenant.
		* @return string Resource Url
	*/
	public static function getTenantUrl($tenantId)
	{
		$url = "/api/platform/tenants/{tenantId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("tenantId", $tenantId);
		return $mozuUrl;
	}
	
}

?>

