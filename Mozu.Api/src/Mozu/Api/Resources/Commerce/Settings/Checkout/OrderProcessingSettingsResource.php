<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\Checkout;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\Checkout\OrderProcessingSettingsClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;

/**
* 
*/
class OrderProcessingSettingsResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @return OrderProcessingSettings 
	*/
	public function getOrderProcessingSettings(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderProcessingSettingsClient::getOrderProcessingSettingsClient($authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param OrderProcessingSettings $orderProcessingSettings 
	* @return OrderProcessingSettings 
	*/
	public function updateOrderProcessingSettings($orderProcessingSettings, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = OrderProcessingSettingsClient::updateOrderProcessingSettingsClient($orderProcessingSettings, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

