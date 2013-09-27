<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Products;

use Mozu\Api\Urls\BaseUrl;

class ProductVariationUrl extends BaseUrl {

	/**
		* Get Resource Url for GetProductVariation
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
		* @return string Resource Url
	*/
	public static function getProductVariationUrl($productCode, $variationKey)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/variations/{variationKey}";
		$url = parent::formatUrl($url, "productCode", $productCode);
		$url = parent::formatUrl($url, "variationKey", $variationKey);
		return $url;
	}
	
	/**
		* Get Resource Url for GetProductVariations
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize Specifies the number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
		* @param int $startIndex Indicates the zero-based offset in the complete result set where the returned entities begin, when creating paged results from a query. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
		* @return string Resource Url
	*/
	public static function getProductVariationsUrl($filter, $pageSize, $productCode, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/variations?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = parent::formatUrl($url, "filter", $filter);
		$url = parent::formatUrl($url, "pageSize", $pageSize);
		$url = parent::formatUrl($url, "productCode", $productCode);
		$url = parent::formatUrl($url, "sortBy", $sortBy);
		$url = parent::formatUrl($url, "startIndex", $startIndex);
		return $url;
	}
	
	/**
		* Get Resource Url for UpdateProductVariations
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @return string Resource Url
	*/
	public static function updateProductVariationsUrl($productCode)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/variations";
		$url = parent::formatUrl($url, "productCode", $productCode);
		return $url;
	}
	
	/**
		* Get Resource Url for UpdateProductVariation
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
		* @return string Resource Url
	*/
	public static function updateProductVariationUrl($productCode, $variationKey)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/variations/{variationKey}";
		$url = parent::formatUrl($url, "productCode", $productCode);
		$url = parent::formatUrl($url, "variationKey", $variationKey);
		return $url;
	}
	
	/**
		* Get Resource Url for DeleteProductVariation
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $variationKey System-generated key that represents the attribute values that uniquely identify a specific product variation.
		* @return string Resource Url
	*/
	public static function deleteProductVariationUrl($productCode, $variationKey)
	{
		$url = "/api/commerce/catalog/admin/products/{productCode}/variations/{variationKey}";
		$url = parent::formatUrl($url, "productCode", $productCode);
		$url = parent::formatUrl($url, "variationKey", $variationKey);
		return $url;
	}
	
}

?>
