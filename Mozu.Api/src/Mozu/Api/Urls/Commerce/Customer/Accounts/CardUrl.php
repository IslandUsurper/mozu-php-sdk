<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Customer\Accounts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CardUrl  {

	/**
		* Get Resource Url for GetAccountCards
		* @param int $accountId Unique identifier of the customer account.
		* @return string Resource Url
	*/
	public static function getAccountCardsUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/cards";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetAccountCard
		* @param int $accountId 
		* @param string $cardId 
		* @return string Resource Url
	*/
	public static function getAccountCardUrl($accountId, $cardId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/cards/{cardId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("cardId", $cardId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddAccountCard
		* @param int $accountId Unique identifier of the customer account.
		* @return string Resource Url
	*/
	public static function addAccountCardUrl($accountId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/cards";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateAccountCard
		* @param int $accountId Unique identifier of the customer account.
		* @param string $cardId 
		* @return string Resource Url
	*/
	public static function updateAccountCardUrl($accountId, $cardId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/cards/{cardId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("cardId", $cardId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteAccountCard
		* @param int $accountId Unique identifier of the customer account.
		* @param string $cardId Unique identifier of the credit card to delete.
		* @return string Resource Url
	*/
	public static function deleteAccountCardUrl($accountId, $cardId)
	{
		$url = "/api/commerce/customer/accounts/{accountId}/cards/{cardId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("accountId", $accountId);
		$url = $mozuUrl->formatUrl("cardId", $cardId);
		return $mozuUrl;
	}
	
}

?>

