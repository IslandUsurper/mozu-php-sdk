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
* Query, create, and update product options.
*/
class ProductOptionClient {

	/**
	* Retrieves a list of options by providing the product type ID.
	*
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @return MozuClient
	*/
	public static function getOptionsClient($dataViewMode,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::getOptionsUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the catalog option by providing the product type ID and the attribute's fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @return MozuClient
	*/
	public static function getOptionClient($dataViewMode,  $attributeFQN,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::getOptionUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Adds or creates a product option.
	*
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @param ProductOption $productOption The product option being added or created.
	* @return MozuClient
	*/
	public static function addOptionClient($dataViewMode, $productOption,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::addOptionUrl($productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productOption)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates a product option by providing the product type ID and the attribute's fully qualified name. There is also a request body to supply additional information.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	* @param ProductOption $productOption The product option being updated.
	* @return MozuClient
	*/
	public static function updateOptionClient($dataViewMode, $productOption,  $attributeFQN,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::updateOptionUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productOption)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes the catalog option by providing the product type ID and the attribute's fully qualified name.
	*
	* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
	* @param string $productCode "Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only."
	*/
	public static function deleteOptionClient($dataViewMode,  $attributeFQN,  $productCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ProductOptionUrl::deleteOptionUrl($attributeFQN, $productCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode)
;
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

