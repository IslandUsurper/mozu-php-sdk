<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer\Accounts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerAttributeUrl  {

	/**
		* Get Resource Url for GetAccountAttributeByFqn
		* @param int $accountId 
		* @param string $attributeFQN 
		* @return string Resource Url
	*/
	public static function getAccountAttributeByFqnUrl($accountId, $attributeFQN)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes/{attributeFQN}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		$url = MozuUrl::formatUrl($url, "attributeFQN", $attributeFQN);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetAccountAttribute
		* @param int $accountId Identifier of the customer account associated with the attribute to retrieve.
		* @param int $attributeId Identifier of the customer account attribute to retrieve.
		* @return string Resource Url
	*/
	public static function getAccountAttributeUrl($accountId, $attributeId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes/{attributeId}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		$url = MozuUrl::formatUrl($url, "attributeId", $attributeId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetAccountAttributes
		* @param int $accountId Identifier of the customer account associated with the attributes to retrieve.
		* @param string $filter 
		* @param int $pageSize 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAccountAttributesUrl($accountId, $filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddAccountAttribute
		* @param int $accountId 
		* @return string Resource Url
	*/
	public static function addAccountAttributeUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateAccountAttribute
		* @param int $accountId Identifier of the customer account associated with the attribute.
		* @return string Resource Url
	*/
	public static function updateAccountAttributeUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/attributes";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
}

?>

