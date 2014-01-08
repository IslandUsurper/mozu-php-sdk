<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Admin\Products\ProductOptionUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Options resource to configure the option attributes and vocabulary values for an individual product associated with the product type that uses the option attribute. Options are used to generate variations of a product.
*/
class ProductOptionClient {

	/**
	* Retrieves a list of all option attributes configured for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return MozuClient
	*/
	public static function getOptionsClient($dataViewMode, $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::getOptionsUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of an option attribute configuration for the specified product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return MozuClient
	*/
	public static function getOptionClient($dataViewMode, $productCode, $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::getOptionUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Configures an option attribute for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param ProductOption $productOption Properties of the option attribute to define for the product.
	* @return MozuClient
	*/
	public static function addOptionClient($dataViewMode, $productOption, $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::addOptionUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productOption)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of an option attribute configured for a product.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param ProductOption $productOption Properties of the product option attribute configuration to update.
	* @return MozuClient
	*/
	public static function updateOptionClient($dataViewMode, $productOption, $productCode, $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::updateOptionUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productOption)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the configuration of an option attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public static function deleteOptionClient($dataViewMode, $productCode, $attributeFQN, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::deleteOptionUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

