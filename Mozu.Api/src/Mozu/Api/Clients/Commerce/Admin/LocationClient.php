<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Admin;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Admin\LocationUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class LocationClient {

	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getLocationsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationUrl::getLocationsUrl($filter, $pageSize, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	* @return MozuClient
	*/
	public static function getLocationClient($locationCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationUrl::getLocationUrl($locationCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param Location $location 
	* @return MozuClient
	*/
	public static function addLocationClient($location, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationUrl::addLocationUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($location);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	* @param Location $location 
	* @return MozuClient
	*/
	public static function updateLocationClient($location, $locationCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationUrl::updateLocationUrl($locationCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($location);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* 
	*
	* @param string $locationCode 
	*/
	public static function deleteLocationClient($locationCode, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = LocationUrl::deleteLocationUrl($locationCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

