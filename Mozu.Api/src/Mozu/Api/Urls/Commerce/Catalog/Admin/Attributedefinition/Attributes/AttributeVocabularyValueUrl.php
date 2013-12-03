<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\Attributes;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class AttributeVocabularyValueUrl  {

	/**
		* Get Resource Url for GetAttributeVocabularyValues
		* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
		* @return string Resource Url
	*/
	public static function getAttributeVocabularyValuesUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetAttributeVocabularyValue
		* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
		* @param string $value The actual unique value of the attribute vocabulary to retrieve. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
		* @return string Resource Url
	*/
	public static function getAttributeVocabularyValueUrl($attributeFQN, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		$url = MozuUrl::formatUrl($url, "value", $value);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddAttributeVocabularyValue
		* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
		* @return string Resource Url
	*/
	public static function addAttributeVocabularyValueUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateAttributeVocabularyValues
		* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
		* @return string Resource Url
	*/
	public static function updateAttributeVocabularyValuesUrl($attributeFQN)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for UpdateAttributeVocabularyValue
		* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
		* @param string $value The actual unique value of the attribute vocabulary value to update. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
		* @return string Resource Url
	*/
	public static function updateAttributeVocabularyValueUrl($attributeFQN, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		$url = MozuUrl::formatUrl($url, "value", $value);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteAttributeVocabularyValue
		* @param string $attributeFQN "The fully qualified name of the attribute, which is a user defined attribute identifier."
		* @param string $value The actual unique value of the attribute vocabulary to delete. A single attribute must have a unique value and match the attribute's data type. If a string value returns null, the system will generate a value. The actual string content displayed shoud be stored as "Content" and actual content is required for string values.
		* @return string Resource Url
	*/
	public static function deleteAttributeVocabularyValueUrl($attributeFQN, $value)
	{
		$url = "/api/commerce/catalog/admin/attributedefinition/attributes/{attributeFQN}/VocabularyValues/{value}";
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		$url = MozuUrl::formatUrl($url, "value", $value);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

