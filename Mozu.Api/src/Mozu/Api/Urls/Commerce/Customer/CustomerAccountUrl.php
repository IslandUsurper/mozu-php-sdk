<?php

/*
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CustomerAccountUrl  {

	/**
		* Get Resource Url for GetAccounts
		* @param string $fields The fields to include in the response.
		* @param string $filter "A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - ""filter=IsDisplayed+eq+true"""
		* @param int $pageSize 
		* @param string $q 
		* @param int $qLimit 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getAccountsUrl($fields, $filter, $pageSize, $q, $qLimit, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&fields={fields}&q={q}&qLimit={qLimit}";
		$url = MozuUrl::formatUrl($url, "fields", $fields);
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "q", $q);
		$url = MozuUrl::formatUrl($url, "qLimit", $qLimit);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetAccount
		* @param int $accountId Unique identifier of the customer account to retrieve.
		* @return string Resource Url
	*/
	public static function getAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetInStockNotification
		* @param int $accountId 
		* @param int $inStockNotificationSubscriptionId 
		* @return string Resource Url
	*/
	public static function getInStockNotificationUrl($accountId, $inStockNotificationSubscriptionId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/instocknotifications/{inStockNotificationSubscriptionId}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		$url = MozuUrl::formatUrl($url, "inStockNotificationSubscriptionId", $inStockNotificationSubscriptionId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for GetInStockNotifications
		* @param int $accountId 
		* @param string $filter 
		* @param int $pageSize 
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getInStockNotificationsUrl($accountId, $filter, $pageSize, $sortBy, $startIndex)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/instocknotifications?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		$url = MozuUrl::formatUrl($url, "filter", $filter);
		$url = MozuUrl::formatUrl($url, "pageSize", $pageSize);
		$url = MozuUrl::formatUrl($url, "sortBy", $sortBy);
		$url = MozuUrl::formatUrl($url, "startIndex", $startIndex);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"GET") ;
	}
	
	/**
		* Get Resource Url for AddAccount
		* @return string Resource Url
	*/
	public static function addAccountUrl()
	{
		$url = "/api/commerce/customer/accounts/";
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for AddInStockNotification
		* @param int $accountId 
		* @return string Resource Url
	*/
	public static function addInStockNotificationUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/instocknotifications";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for RecomputeCustomerLifetimeValue
		* @param int $accountId 
		* @return string Resource Url
	*/
	public static function recomputeCustomerLifetimeValueUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/recomputelifetimevalue";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"POST") ;
	}
	
	/**
		* Get Resource Url for UpdateAccount
		* @param int $accountId Unique identifier of the customer account.
		* @return string Resource Url
	*/
	public static function updateAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"PUT") ;
	}
	
	/**
		* Get Resource Url for DeleteAccount
		* @param int $accountId Unique identifier of the customer account to delete.
		* @return string Resource Url
	*/
	public static function deleteAccountUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
	/**
		* Get Resource Url for DeleteInStockNotificationSubscription
		* @param int $accountId 
		* @param int $inStockNotificationSubscriptionId 
		* @return string Resource Url
	*/
	public static function deleteInStockNotificationSubscriptionUrl($accountId, $inStockNotificationSubscriptionId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/instocknotifications/{inStockNotificationSubscriptionId}";
		$url = MozuUrl::formatUrl($url, "accountId", $accountId);
		$url = MozuUrl::formatUrl($url, "inStockNotificationSubscriptionId", $inStockNotificationSubscriptionId);
		return new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE") ;
	}
	
}

?>

