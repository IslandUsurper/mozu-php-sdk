<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Catalog\Storefront\ProductUrl;
use Mozu\Api\Headers;
use Mozu\Api\DataViewMode;

use Mozu\Api\Contracts\ProductRuntime\LocationInventoryQuery;
use Mozu\Api\Contracts\ProductRuntime\ProductOptionSelections;
use Mozu\Api\Contracts\ProductRuntime\DiscountSelections;
use Mozu\Api\Contracts\ProductRuntime\Product;
use Mozu\Api\Contracts\ProductRuntime\LocationInventoryCollection;
use Mozu\Api\Contracts\ProductRuntime\ConfiguredProduct;
use Mozu\Api\Contracts\ProductRuntime\ProductValidationSummary;
use Mozu\Api\Contracts\ProductRuntime\ProductCollection;
use Mozu\Api\Contracts\ProductRuntime\DiscountValidationSummary;

/**
* Use the Storefront Products  resource to manage the shopper product selection process during a visit to the web storefront. You can update product options as shoppers pick and choose their product choices. A shopper cannot add a product to a cart until all of its required options have been selected.
*/
class ProductClient {

	/**
	* Retrieves a list of products that appear on the web storefront according to any specified filter criteria and sort options.
	*
	* @param DataViewMode $dataViewMode
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductsClient($dataViewMode, $filter =  null, $startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$url = ProductUrl::getProductsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Retrieves the active inventory level information associated with the product or location specified in the request.
	*
	* @param DataViewMode $dataViewMode
	* @param string $locationCodes Array of location codes for which to retrieve product inventory information.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields 
	* @return MozuClient
	*/
	public static function getProductInventoryClient($dataViewMode, $productCode, $locationCodes =  null, $responseFields =  null)
	{
		$url = ProductUrl::getProductInventoryUrl($locationCodes, $productCode, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Retrieves information about a single product given its product code.
	*
	* @param DataViewMode $dataViewMode
	* @param bool $allowInactive If true, returns an inactive product as part of the query.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields 
	* @param bool $skipInventoryCheck If true, skip the inventory validation process for the specified product.
	* @param string $variationProductCode Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
	* @return MozuClient
	*/
	public static function getProductClient($dataViewMode, $productCode, $variationProductCode =  null, $allowInactive =  null, $skipInventoryCheck =  null, $responseFields =  null)
	{
		$url = ProductUrl::getProductUrl($allowInactive, $productCode, $responseFields, $skipInventoryCheck, $variationProductCode);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	/**
	* Creates a new product configuration each time a shopper selects a product option value. After the shopper defines values for all required product options, the shopper can add the product configuration to a cart.
	*
	* @param bool $includeOptionDetails If true, the response returns details about the product. If false, returns a product summary such as the product name, price, and sale price.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields 
	* @param bool $skipInventoryCheck If true, skip the inventory validation process for the specified product.
	* @param ProductOptionSelections $productOptionSelections For a product with shopper-configurable options, the properties of the product options selected by the shopper.
	* @return MozuClient
	*/
	public static function configuredProductClient($productOptionSelections, $productCode, $includeOptionDetails =  null, $skipInventoryCheck =  null, $responseFields =  null)
	{
		$url = ProductUrl::configuredProductUrl($includeOptionDetails, $productCode, $responseFields, $skipInventoryCheck);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($productOptionSelections);

	}
	
	/**
	* Validate the final state of shopper-selected options.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param bool $skipInventoryCheck If true, skip the inventory validation process for the specified product.
	* @param ProductOptionSelections $productOptionSelections For a product with shopper-configurable options, the properties of the product options selected by the shopper.
	* @return MozuClient
	*/
	public static function validateProductClient($productOptionSelections, $productCode, $skipInventoryCheck =  null, $responseFields =  null)
	{
		$url = ProductUrl::validateProductUrl($productCode, $responseFields, $skipInventoryCheck);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($productOptionSelections);

	}
	
	/**
	* Evaluates whether a collection of discounts specified in the request can be redeemed for the supplied product code.
	*
	* @param bool $allowInactive If true, this operation returns inactive product discounts as part of the POST.
	* @param int $customerAccountId Unique ID of the customer account associated with the shopper requesting the discount.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields 
	* @param bool $skipInventoryCheck If true, do not validate the product inventory when evaluating the list of discounts.
	* @param string $variationProductCode Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
	* @param DiscountSelections $discountSelections List of discount IDs to evaluate for the specified product.
	* @return MozuClient
	*/
	public static function validateDiscountsClient($discountSelections, $productCode, $variationProductCode =  null, $customerAccountId =  null, $allowInactive =  null, $skipInventoryCheck =  null, $responseFields =  null)
	{
		$url = ProductUrl::validateDiscountsUrl($allowInactive, $customerAccountId, $productCode, $responseFields, $skipInventoryCheck, $variationProductCode);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($discountSelections);

	}
	
	/**
	* 
	*
	* @param DataViewMode $dataViewMode
	* @param string $responseFields 
	* @param LocationInventoryQuery $query 
	* @return MozuClient
	*/
	public static function getProductInventoriesClient($dataViewMode, $query, $responseFields =  null)
	{
		$url = ProductUrl::getProductInventoriesUrl($responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($query)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);

	}
	
	
}

?>

