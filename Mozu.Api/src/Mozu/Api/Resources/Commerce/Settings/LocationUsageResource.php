<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\LocationUsageClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class LocationUsageResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @return LocationUsageCollection 
	*/
	public function getLocationUsages(Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationUsageClient::getLocationUsagesClient($userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @return LocationUsage 
	*/
	public function getLocationUsage($code, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationUsageClient::getLocationUsageClient($code, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param string $code 
	* @param LocationUsage $usage 
	* @return LocationUsage 
	*/
	public function updateLocationUsage($usage, $code, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = LocationUsageClient::updateLocationUsageClient($usage, $code, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

