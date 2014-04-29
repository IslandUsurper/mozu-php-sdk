<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductVariationClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the product variations sub-resource to manage the variations of a product based on its attributes. For example, a t-shirt product could be offered in six variations: Small Black, Medium Black, Large Black, Small White, Medium White, and Large White.
*/
class ProductVariationResource {

		private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the details of a product variation based on the supplied product code and variation key.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @return ProductVariation 
	*/
	public function getProductVariation($dataViewMode, $productCode, $variationKey)
	{
		$mozuClient = ProductVariationClient::getProductVariationClient($dataViewMode, $productCode, $variationKey);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of the product variations configured for the specified product code.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return ProductVariationPagedCollection 
	*/
	public function getProductVariations($dataViewMode, $productCode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null)
	{
		$mozuClient = ProductVariationClient::getProductVariationsClient($dataViewMode, $productCode, $startIndex, $pageSize, $sortBy, $filter);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Modifies the collection of variations for the specified product code. Because this PUT replaces the existing resource, supply all information necessary to maintain for the product variation.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param ProductVariationCollection $productVariations Wrapper for the collection of variations configured for the specified product code.
	* @return ProductVariationCollection 
	*/
	public function updateProductVariations($dataViewMode, $productVariations, $productCode)
	{
		$mozuClient = ProductVariationClient::updateProductVariationsClient($dataViewMode, $productVariations, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Modifies the details of a variation, based on the supplied variation key, for the specified product code.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	* @param ProductVariation $productVariation Wrapper for the properties of the specified product variation.
	* @return ProductVariation 
	*/
	public function updateProductVariation($dataViewMode, $productVariation, $productCode, $variationKey)
	{
		$mozuClient = ProductVariationClient::updateProductVariationClient($dataViewMode, $productVariation, $productCode, $variationKey);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Deletes a variation, based on the supplied variation key, for the specified product code.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
	*/
	public function deleteProductVariation($dataViewMode, $productCode, $variationKey)
	{
		$mozuClient = ProductVariationClient::deleteProductVariationClient($dataViewMode, $productCode, $variationKey);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>
