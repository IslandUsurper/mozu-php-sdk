<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Wishlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Wishlists\WishlistItemClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Wish List Items subresource to manage items in a shopper wish list. The same product can be defined as an item in any number of wish lists for the customer account. Use the Wish Lists resource to manage shopper wish lists.
*/
class WishlistItemResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the details of an item in a shopper wish list.
	*
	* @param string $wishlistId Unique identifier of the wish list item to retrieve.
	* @param string $wishlistItemId Unique identifier of the wish list associated with the item to retrieve.
	* @return WishlistItem 
	*/
	public function getWishlistItem($wishlistId, $wishlistItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::getWishlistItemClient($wishlistId, $wishlistItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves a list of items in a shopper wish list according to any specified filter and sort criteria.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $sortBy The property by which to sort results and whether the results appear in ascending (a-z) order, represented by ASC or in descending (z-a) order, represented by DESC. The sortBy parameter follows an available property. For example: "sortBy=productCode+asc"
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with a PageSize of 25, to get the 51st through the 75th items, use startIndex=3.
	* @param string $wishlistId Unique identifier of the wish list associated with the items to retrieve.
	* @return WishlistItemCollection 
	*/
	public function getWishlistItems($wishlistId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::getWishlistItemsClient($wishlistId, $startIndex, $pageSize, $sortBy, $filter, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $customerAccountId 
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @param string $wishlistName 
	* @return WishlistItemCollection 
	*/
	public function getWishlistItemsByWishlistName($customerAccountId, $wishlistName, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::getWishlistItemsByWishlistNameClient($customerAccountId, $wishlistName, $startIndex, $pageSize, $sortBy, $filter, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Adds a product in a site's catalog as an item in a shopper wish list.
	*
	* @param string $wishlistId Unique identifier of the wish list associated with the item to add.
	* @param WishlistItem $wishlistItem Properties of the item to add to the wish list.
	* @return WishlistItem 
	*/
	public function addItemToWishlist($wishlistItem, $wishlistId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::addItemToWishlistClient($wishlistItem, $wishlistId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the details of an item in a shopper wish list.
	*
	* @param string $wishlistId Unique identifier of the wish list associated with the item to update.
	* @param string $wishlistItemId Unique identifier of the item in the shopper wish list to update.
	* @param WishlistItem $wishlistItem Properties of the shopper wish list item to update.
	* @return WishlistItem 
	*/
	public function updateWishlistItem($wishlistItem, $wishlistId, $wishlistItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::updateWishlistItemClient($wishlistItem, $wishlistId, $wishlistItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the quantity of an item in a shopper wish list.
	*
	* @param int $quantity The quantity of the item in the wish list.
	* @param string $wishlistId Unique identifier of the wish list associated with the item quantity to update.
	* @param string $wishlistItemId Unique identifier of the item in the wish list to update quantity.
	* @return WishlistItem 
	*/
	public function updateWishlistItemQuantity($wishlistId, $wishlistItemId, $quantity, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::updateWishlistItemQuantityClient($wishlistId, $wishlistItemId, $quantity, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes all items associated with a shopper wish list.
	*
	* @param string $wishlistId Unique identifier of the wish list associated with the items to remove.
	* @return Wishlist 
	*/
	public function removeAllWishlistItems($wishlistId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::removeAllWishlistItemsClient($wishlistId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes an item from the wish list specified in the request.
	*
	* @param string $wishlistId Unique identifier of the wish list associated with the item to remove.
	* @param string $wishlistItemId Unique identifier of the item to remove from the shopper wish list.
	*/
	public function deleteWishlistItem($wishlistId, $wishlistItemId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = WishlistItemClient::deleteWishlistItemClient($wishlistId, $wishlistItemId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

