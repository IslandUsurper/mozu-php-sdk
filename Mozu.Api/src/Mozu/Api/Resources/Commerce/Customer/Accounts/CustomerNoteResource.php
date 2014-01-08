<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\Accounts\CustomerNoteClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Merchants can add and view internal notes for a customer account. For example, a merchant can track a customer's interests or complaints. Only merchants can add and view notes. Customers cannot see these notes from their My Account page.
*/
class CustomerNoteResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the contents of a particular note attached to a specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account that contains the note being retrieved.
	* @param int $noteId Unique identifier of a particular note to retrieve.
	* @return CustomerNote 
	*/
	public function getAccountNote($accountId, $noteId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerNoteClient::getAccountNoteClient($accountId, $noteId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of notes added to a customer account according to any specified filter criteria and sort options.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return CustomerNoteCollection 
	*/
	public function getAccountNotes($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerNoteClient::getAccountNotesClient($accountId, $startIndex, $pageSize, $sortBy, $filter, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a new note to the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account for which to create the note.
	* @param CustomerNote $note Properties of the customer account note to create.
	* @return CustomerNote 
	*/
	public function addAccountNote($note, $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerNoteClient::addAccountNoteClient($note, $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Modifies an existing note for a customer account.
	*
	* @param int $accountId Unique identifier of the customer account note to modify.
	* @param int $noteId Unique identifier of the note to update.
	* @param CustomerNote $note The new content to replace the existing note.
	* @return CustomerNote 
	*/
	public function updateAccountNote($note, $accountId, $noteId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerNoteClient::updateAccountNoteClient($note, $accountId, $noteId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a note from the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account that contains the note being deleted.
	* @param int $noteId Unique identifier of the customer account note being deleted.
	*/
	public function deleteAccountNote($accountId, $noteId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = CustomerNoteClient::deleteAccountNoteClient($accountId, $noteId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

