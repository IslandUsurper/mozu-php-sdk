<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\CreditUrl;


/**
* Use the Customer Credits resource to manage the store credit associated with a customer account. Store credit can represent a static amount the customer can redeem at any of the tenant's sites, or a gift card registered for a customer account. At this time, gift card functionality is reserved for future use.
*/
class CreditClient {

	/**
	* Retrieves a list of store credits applied to customer accounts, according any filter and sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getCreditsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CreditUrl::getCreditsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a store credit applied to a customer account.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getCreditClient($code, $responseFields =  null)
	{
		$url = CreditUrl::getCreditUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new store credit for the customer account specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Credit $credit Properties of the store credit of gift card applied to a customer account. At this time, gift card functionality is reserved for future use.
	* @return MozuClient
	*/
	public static function addCreditClient($credit, $responseFields =  null)
	{
		$url = CreditUrl::addCreditUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($credit);
		return $mozuClient;

	}
	
	/**
	* Associates an unclaimed customer credit with the shopper user authenticated in the request header.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function associateCreditToShopperClient($code, $responseFields =  null)
	{
		$url = CreditUrl::associateCreditToShopperUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Resend the notification email that informs a shopper that a credit has been created.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	*/
	public static function resendCreditCreatedEmailClient($code)
	{
		$url = CreditUrl::resendCreditCreatedEmailUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a defined store credit applied to a customer account.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Credit $credit Properties of the store credit of gift card applied to a customer account. At this time, gift card functionality is reserved for future use.
	* @return MozuClient
	*/
	public static function updateCreditClient($credit, $code, $responseFields =  null)
	{
		$url = CreditUrl::updateCreditUrl($code, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($credit);
		return $mozuClient;

	}
	
	/**
	* Deletes a store credit previously applied to a customer account.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	*/
	public static function deleteCreditClient($code)
	{
		$url = CreditUrl::deleteCreditUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

