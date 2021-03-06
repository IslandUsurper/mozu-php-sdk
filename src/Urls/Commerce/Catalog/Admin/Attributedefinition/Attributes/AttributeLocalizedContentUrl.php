<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class AttributeLocalizedContentUrl  {

	/**
		* Get Resource Url for GetAttributeLocalizedContents
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @return string Resource Url
	*/
	public static function getAttributeLocalizedContentsUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/LocalizedContent";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAttributeLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getAttributeLocalizedContentUrl($attributeFQN, $localeCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/LocalizedContent/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function addLocalizedContentUrl($attributeFQN, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/LocalizedContent?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateLocalizedContents
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @return string Resource Url
	*/
	public static function updateLocalizedContentsUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/LocalizedContent";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateLocalizedContentUrl($attributeFQN, $localeCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/LocalizedContent/{localeCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteLocalizedContent
		* @param string $attributeFQN Fully qualified name for an attribute.
		* @param string $localeCode Language used for the entity. Currently, only "en-US" is supported.
		* @return string Resource Url
	*/
	public static function deleteLocalizedContentUrl($attributeFQN, $localeCode)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/LocalizedContent/{localeCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("attributeFQN", $attributeFQN);
		$url = $mozuUrl->formatUrl("localeCode", $localeCode);
		return $mozuUrl;
	}
	
}

?>

