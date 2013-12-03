<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition\Producttypes;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Producttypes\ProductTypePropertyUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Collection of the attributes that are properties in this product type.
*/
class ProductTypePropertyClient {

	/**
	* Retrieves a list of product properties that belong to a product type.
	*
	* @param int $productTypeId Identifier of the product type whose properties are being retrieved as a paged list.
	* @return MozuClient
	*/
	public static function getPropertiesClient($dataViewMode,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypePropertyUrl::getPropertiesUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the single property by providing the property ID and the attribute's user-defined fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param int $productTypeId Identifier of the product type whose single instance of a property is being retrieved.
	* @return MozuClient
	*/
	public static function getPropertyClient($dataViewMode,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypePropertyUrl::getPropertyUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Adds or creates the attribute which exists as properties in the product type.
	*
	* @param int $productTypeId Identifier of the product type whose properties are being added or created to the product type.
	* @param AttributeInProductType $attributeInProductType The attribute in product type refers to the specific product attribute that is being created to exist as a property only available in the product type template.
	* @return MozuClient
	*/
	public static function addPropertyClient($dataViewMode, $attributeInProductType,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypePropertyUrl::addPropertyUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates the single property by providing the property ID and the attribute's user-defined fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param int $productTypeId Identifier of the product type whose single instance of a property is being updated.
	* @param AttributeInProductType $attributeInProductType The properties of the attribute (that exist as properties) are being updated.
	* @return MozuClient
	*/
	public static function updatePropertyClient($dataViewMode, $attributeInProductType,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypePropertyUrl::updatePropertyUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($attributeInProductType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the property by providing the attribute's user-defined fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param int $productTypeId Identifier of the product type whose properties are being deleted.
	*/
	public static function deletePropertyClient($dataViewMode,  $attributeFQN,  $productTypeId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductTypePropertyUrl::deletePropertyUrl($attributeFQN, $productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

