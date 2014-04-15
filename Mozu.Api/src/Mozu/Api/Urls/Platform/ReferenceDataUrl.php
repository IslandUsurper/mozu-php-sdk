<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Platform;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class ReferenceDataUrl  {

	/**
		* Get Resource Url for GetAddressSchema
		* @param string $countryCode 2 letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
		* @return string Resource Url
	*/
	public static function getAddressSchemaUrl($countryCode)
	{
		$url = "/api/platform/reference/addressschema/{countryCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("countryCode", $countryCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAddressSchemas
		* @return string Resource Url
	*/
	public static function getAddressSchemasUrl()
	{
		$url = "/api/platform/reference/addressschemas";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehavior
		* @param int $behaviorId ***Always private and should not be published.***
		* @return string Resource Url
	*/
	public static function getBehaviorUrl($behaviorId)
	{
		$url = "/api/platform/reference/behaviors/{behaviorId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("behaviorId", $behaviorId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehaviorCategories
		* @return string Resource Url
	*/
	public static function getBehaviorCategoriesUrl()
	{
		$url = "/api/platform/reference/behaviors/categories";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehaviorCategory
		* @param int $categoryId ***Always private and should not be published.***
		* @return string Resource Url
	*/
	public static function getBehaviorCategoryUrl($categoryId)
	{
		$url = "/api/platform/reference/behaviors/categories/{categoryId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetBehaviors
		* @param string $userType 
		* @return string Resource Url
	*/
	public static function getBehaviorsUrl($userType)
	{
		$url = "/api/platform/reference/behaviors?userType={userType}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("userType", $userType);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetContentLocales
		* @return string Resource Url
	*/
	public static function getContentLocalesUrl()
	{
		$url = "/api/platform/reference/contentLocales";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCountries
		* @return string Resource Url
	*/
	public static function getCountriesUrl()
	{
		$url = "/api/platform/reference/countries";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCurrencies
		* @return string Resource Url
	*/
	public static function getCurrenciesUrl()
	{
		$url = "/api/platform/reference/currencies";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTimeZones
		* @return string Resource Url
	*/
	public static function getTimeZonesUrl()
	{
		$url = "/api/platform/reference/timezones";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetTopLevelDomains
		* @return string Resource Url
	*/
	public static function getTopLevelDomainsUrl()
	{
		$url = "/api/platform/reference/topleveldomains";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUnitsOfMeasure
		* @param string $filter "A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - ""filter=IsDisplayed+eq+true"""
		* @return string Resource Url
	*/
	public static function getUnitsOfMeasureUrl($filter)
	{
		$url = "/api/platform/reference/unitsofmeasure?filter={filter}";
		$mozuUrl = new MozuUrl($url, UrlLocation::HOME_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		return $mozuUrl;
	}
	
}

?>

