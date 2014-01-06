<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\ChannelUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Channels resource to manage the channels a company uses to create logical commercial business divisions based on region or types of sales, such as "US Online," "Amazon," or "EMEA Retail." All orders include a channel association that enables the company to perform financial reporting for each defined channel. Because channels are managed at the tenant level, you must associate all the tenant's sites with a channel. Sites that do not have a defined channel association cannot successfully submit orders.
*/
class ChannelClient {

	/**
	* Retrieves a list of channels defined for a tenant according to any filter or sort criteria specified in the request.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @return MozuClient
	*/
	public static function getChannelsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChannelUrl::getChannelsUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the channel specified in the request.
	*
	* @param string $code User-defined code that identifies the channel to retrieve.
	* @return MozuClient
	*/
	public static function getChannelClient($code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChannelUrl::getChannelUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new channel that defines a new logical business division to use for financial reporting.
	*
	* @param Channel $channel Properties of the channel to create.
	* @return MozuClient
	*/
	public static function createChannelClient($channel, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChannelUrl::createChannelUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($channel);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates one or more details of a defined channel, including the associated sites.
	*
	* @param string $code User-defined code that identifies the channel to update.
	* @param Channel $channel Properties of a the channel to update.
	* @return MozuClient
	*/
	public static function updateChannelClient($channel, $code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChannelUrl::updateChannelUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($channel);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Deletes a defined channel for the tenant and removes the defined site associations. After deleting this channel, assign its associated sites to another channel.
	*
	* @param string $code User-defined code that identifies the channel to delete.
	*/
	public static function deleteChannelClient($code, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = ChannelUrl::deleteChannelUrl($code);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

