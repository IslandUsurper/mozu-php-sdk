<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\CustomerAccountUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Customer Accounts resource to manage the components of shopper accounts, including attributes, contact information, company notes, and groups associated with the customer account.
*/
class CustomerAccountClient {

	/**
	* Retrieves a list of customer accounts.
	*
	* @param string $fields The fields to include in the response.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize 
	* @param string $q A list of customer account search terms to use in the query when searching across customer name and email. Separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAccountsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $fields =  null, $q =  null, $qLimit =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getAccountsUrl($fields, $filter, $pageSize, $q, $qLimit, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieve details of a customer account.
	*
	* @param int $accountId Unique identifier of the customer account to retrieve.
	* @return MozuClient
	*/
	public static function getAccountClient($accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @return MozuClient
	*/
	public static function getLoginStateClient($accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getLoginStateUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $emailAddress 
	* @return MozuClient
	*/
	public static function getLoginStateByEmailAddressClient($emailAddress, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getLoginStateByEmailAddressUrl($emailAddress);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $userName 
	* @return MozuClient
	*/
	public static function getLoginStateByUserNameClient($userName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::getLoginStateByUserNameUrl($userName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new customer account based on the information specified in the request.
	*
	* @param CustomerAccount $account Properties of the customer account to update.
	* @return MozuClient
	*/
	public static function addAccountClient($account, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::addAccountUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param CustomerLoginInfo $customerAuthInfo 
	* @return MozuClient
	*/
	public static function addLoginToExistingCustomerClient($customerAuthInfo, $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::addLoginToExistingCustomerUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerAuthInfo);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	*/
	public static function recomputeCustomerLifetimeValueClient($accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::recomputeCustomerLifetimeValueUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param bool $isLocked 
	*/
	public static function setLoginLockedClient($isLocked, $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::setLoginLockedUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($isLocked);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param bool $isPasswordChangeRequired 
	*/
	public static function setPasswordChangeRequiredClient($isPasswordChangeRequired, $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::setPasswordChangeRequiredUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($isPasswordChangeRequired);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param CustomerAccountAndAuthInfo $accountAndAuthInfo 
	* @return MozuClient
	*/
	public static function addAccountAndLoginClient($accountAndAuthInfo, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::addAccountAndLoginUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($accountAndAuthInfo);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param array|CustomerAccountAndAuthInfo $customers 
	* @return MozuClient
	*/
	public static function addAccountsClient($customers, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::addAccountsUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customers);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param ResetPasswordInfo $resetPasswordInfo 
	*/
	public static function resetPasswordClient($resetPasswordInfo, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::resetPasswordUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($resetPasswordInfo);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param CustomerAccount $account Properties of the customer account to update.
	* @return MozuClient
	*/
	public static function updateAccountClient($account, $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::updateAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes a customer account. A customer account cannot be deleted if any orders exist, past or present.
	*
	* @param int $accountId Unique identifier of the customer account to delete.
	*/
	public static function deleteAccountClient($accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerAccountUrl::deleteAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

