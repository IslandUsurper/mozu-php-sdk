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

class PackageUrl  {

	/**
		* Get Resource Url for GetPackage
		* @param string $orderId Unique identifier of the order associated with the package to retrieve.
		* @param string $packageId Unique identifier of the package to retrieve.
		* @return string Resource Url
	*/
	public static function getPackageUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetAvailablePackageFulfillmentActions
		* @param string $orderId 
		* @param string $packageId 
		* @return string Resource Url
	*/
	public static function getAvailablePackageFulfillmentActionsUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}/actions";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetPackageLabel
		* @param string $orderId Unique identifier of the order associated with the package label to retrieve.
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @return string Resource Url
	*/
	public static function getPackageLabelUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}/label";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for CreatePackage
		* @param string $orderId Unique identifier of the order associated with this package.
		* @return string Resource Url
	*/
	public static function createPackageUrl($orderId)
	{
		$url = "/api/commerce/orders/{orderId}/packages";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdatePackage
		* @param string $orderId Unique identifier of the order associated with the package to update.
		* @param string $packageId Unique identifier of the package of order items to update.
		* @return string Resource Url
	*/
	public static function updatePackageUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeletePackage
		* @param string $orderId Unique identifier of the order associated with the package to delete.
		* @param string $packageId Unique identifier of the package to delete.
		* @return string Resource Url
	*/
	public static function deletePackageUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}";
		$url = MozuUrl::formatUrl($url, "orderId", $orderId);
		$url = MozuUrl::formatUrl($url, "packageId", $packageId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

