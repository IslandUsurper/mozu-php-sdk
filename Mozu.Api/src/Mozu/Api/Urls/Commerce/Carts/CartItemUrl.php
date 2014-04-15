<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Mozu\Api\Urls\Commerce\Carts;

use Mozu\Api\MozuUrl;
use Mozu\Api\UrlLocation;

class CartItemUrl  {

	/**
		* Get Resource Url for GetCartItems
		* @return string Resource Url
	*/
	public static function getCartItemsUrl()
	{
		$url = "/api/commerce/carts/current/items";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCartItem
		* @param string $cartItemId Identifier of the cart item to retrieve.
		* @return string Resource Url
	*/
	public static function getCartItemUrl($cartItemId)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddItemToCart
		* @return string Resource Url
	*/
	public static function addItemToCartUrl()
	{
		$url = "/api/commerce/carts/current/items";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCartItem
		* @param string $cartItemId Identifier of the cart item to update.
		* @return string Resource Url
	*/
	public static function updateCartItemUrl($cartItemId)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCartItemQuantity
		* @param string $cartItemId Identifier of the cart item to update quantity.
		* @param int $quantity The number of cart items in the shopper's active cart.
		* @return string Resource Url
	*/
	public static function updateCartItemQuantityUrl($cartItemId, $quantity)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}/{quantity}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for RemoveAllCartItems
		* @return string Resource Url
	*/
	public static function removeAllCartItemsUrl()
	{
		$url = "/api/commerce/carts/current/items";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCartItem
		* @param string $cartItemId Identifier of the cart item to delete.
		* @return string Resource Url
	*/
	public static function deleteCartItemUrl($cartItemId)
	{
		$url = "/api/commerce/carts/current/items/{cartItemId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("cartItemId", $cartItemId);
		return $mozuUrl;
	}
	
}

?>

