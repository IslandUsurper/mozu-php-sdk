<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Event;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Event\EventNotificationClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the events resource to retrieve events, which are notifications about a create, read, update, or delete operation.
*/
class EventNotificationResource {

	/**
	* Retrieves a list of events.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return EventCollection 
	*/
	public function getEvents($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = EventNotificationClient::getEventsClient($startIndex, $pageSize, $sortBy, $filter, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves an event by providing the event ID.
	*
	* @param string $eventId The unique identifier of the event being retrieved. An event is a notification about a create, read, update, or delete on an order, product, discount or category.
	* @return Event 
	*/
	public function getEvent($eventId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = EventNotificationClient::getEventClient($eventId, $authTicket);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

