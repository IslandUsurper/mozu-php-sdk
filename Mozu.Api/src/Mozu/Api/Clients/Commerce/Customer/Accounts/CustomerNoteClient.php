<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Customer\Accounts\CustomerNoteUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Merchants can add and view internal notes for a customer account. For example, a merchant can track a customer's interests or complaints. Only merchants can add and view notes. Customers cannot see these notes from their My Account page.
*/
class CustomerNoteClient {

	/**
	* Retrieves the contents of a particular note attached to a specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account that contains the note being retrieved.
	* @param int $noteId Unique identifier of a particular note to retrieve.
	* @return MozuClient
	*/
	public static function getAccountNoteClient( $accountId,  $noteId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerNoteUrl::getAccountNoteUrl($accountId, $noteId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of notes added to a customer account according to any specified filter criteria and sort options.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter "A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - ""filter=IsDisplayed+eq+true"""
	* @param int $pageSize Used to create paged results from a query. Specifies the number of results to display on each page. Maximum: 200.
	* @param string $sortBy "The property by which to sort results and whether the results appear in ascending (a-z) order, represented by 'ASC' or in descending (z-a) order, represented by 'DESC'. The sortBy parameter follows an available property. <b>For example: sortBy=productCode+asc</b>"
	* @param int $startIndex "Used to create paged results from a query. Indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3."
	* @return MozuClient
	*/
	public static function getAccountNotesClient( $accountId, $filter =  null, $pageSize =  null, $sortBy =  null, $startIndex =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerNoteUrl::getAccountNotesUrl($accountId, $filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Adds a new note to the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account for which to create the note.
	* @param CustomerNote $note 
	* @return MozuClient
	*/
	public static function addAccountNoteClient($note,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerNoteUrl::addAccountNoteUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($note);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Modifies an existing note for a customer account.
	*
	* @param int $accountId Unique identifier of the customer account note to modify.
	* @param int $noteId Unique identifier of the note to update.
	* @param CustomerNote $note The new content to replace the existing note.
	* @return MozuClient
	*/
	public static function updateAccountNoteClient($note,  $accountId,  $noteId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerNoteUrl::updateAccountNoteUrl($accountId, $noteId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($note);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Removes a note from the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account that contains the note being deleted.
	* @param int $noteId Unique identifier of the customer account note being deleted.
	*/
	public static function deleteAccountNoteClient( $accountId,  $noteId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = CustomerNoteUrl::deleteAccountNoteUrl($accountId, $noteId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

