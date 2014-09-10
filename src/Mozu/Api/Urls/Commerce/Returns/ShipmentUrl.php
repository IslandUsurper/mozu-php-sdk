<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Returns;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ShipmentUrl  {

	/**
		* Get Resource Url for GetShipment
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $returnId Unique identifier of the return associated with the replacement shipment to retrieve.
		* @param string $shipmentId Unique identifier of the return replacement shipment to retrieve.
		* @return string Resource Url
	*/
	public static function getShipmentUrl($responseFields, $returnId, $shipmentId)
	{
		$url = "/api/commerce/returns/{returnId}/shipments/{shipmentId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false);
		$mozuUrl->formatUrl("responseFields", $responseFields)
				->formatUrl("returnId", $returnId)
				->formatUrl("shipmentId", $shipmentId);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePackageShipments
		* @param string $returnId Unique identifier of the return for which to create replacement package shipments.
		* @return string Resource Url
	*/
	public static function createPackageShipmentsUrl($returnId)
	{
		$url = "/api/commerce/returns/{returnId}/shipments";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false);
		$mozuUrl->formatUrl("returnId", $returnId);

		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteShipment
		* @param string $returnId Unique identifier of the return associated with the replacement shipment to delete.
		* @param string $shipmentId Unique identifier of the return replacement shipment to delete.
		* @return string Resource Url
	*/
	public static function deleteShipmentUrl($returnId, $shipmentId)
	{
		$url = "/api/commerce/returns/{returnId}/shipments/{shipmentId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false);
		$mozuUrl->formatUrl("returnId", $returnId)
				->formatUrl("shipmentId", $shipmentId);

		return $mozuUrl;
	}
	
}

?>

