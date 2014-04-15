<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\LocationClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class LocationResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param string $code 
	* @return Location 
	*/
	public function getLocation($code, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationClient::getLocationClient($code, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @param string $locationUsageType 
	* @return Location 
	*/
	public function getLocationInUsageType($locationUsageType, $code, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationClient::getLocationInUsageTypeClient($locationUsageType, $code, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param string $locationUsageType 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return LocationCollection 
	*/
	public function getLocationsInUsageType($locationUsageType, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationClient::getLocationsInUsageTypeClient($locationUsageType, $startIndex, $pageSize, $sortBy, $filter, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @return Location 
	*/
	public function getDirectShipLocation(Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationClient::getDirectShipLocationClient($userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @return Location 
	*/
	public function getInStorePickupLocation($code, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationClient::getInStorePickupLocationClient($code, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $filter 
	* @param int $pageSize 
	* @param string $sortBy 
	* @param int $startIndex 
	* @return LocationCollection 
	*/
	public function getInStorePickupLocations($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationClient::getInStorePickupLocationsClient($startIndex, $pageSize, $sortBy, $filter, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

