<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Orders;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Orders\AdjustmentClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use this subresource to manage ad-hoc order level price adjustments.
*/
class AdjustmentResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Applies a shipping adjustment to the specified order.
	*
	* @param string $orderId Unique identifier of the order associated with the shipping adjustment.
	* @param string $updateMode Specifies whether to apply the shipping adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param Adjustment $adjustment Properties of the shipping adjustment to apply to the order.
	* @return Order 
	*/
	public function applyShippingAdjustment($adjustment, $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AdjustmentClient::applyShippingAdjustmentClient($adjustment, $orderId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Applies a price adjustment to the specified order.
	*
	* @param string $orderId Unique identifier of the order for which to apply the adjustment.
	* @param string $updateMode Specifies whether to apply the adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param Adjustment $adjustment Properties of the price adjustment to apply to the order.
	* @return Order 
	*/
	public function applyAdjustment($adjustment, $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AdjustmentClient::applyAdjustmentClient($adjustment, $orderId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a shipping adjustment previously applied to an order or draft.
	*
	* @param string $orderId Unique identifier of the order with the applied shipping adjustment.
	* @param string $updateMode Specifies whether to remove the shipping adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	*/
	public function removeShippingAdjustment($orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AdjustmentClient::removeShippingAdjustmentClient($orderId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Removes a price adjustment from the specified order.
	*
	* @param string $orderId Unique identifier of the order for which to delete the adjustment.
	* @param string $updateMode Specifies whether to remove the adjustment by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @return Order 
	*/
	public function removeAdjustment($orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = AdjustmentClient::removeAdjustmentClient($orderId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

