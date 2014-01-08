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
use Mozu\Api\Clients\Commerce\Orders\BillingInfoClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Billing Info subresource to manage the billing information stored for an order.
*/
class BillingInfoResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves the billing information associated with an order.
	*
	* @param bool $draft If true, retrieve the draft version of the order billing information, which might include uncommitted changes.
	* @param string $orderId Unique identifier of the order.
	* @return BillingInfo 
	*/
	public function getBillingInfo($orderId, $draft =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = BillingInfoClient::getBillingInfoClient($orderId, $draft, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates the billing information supplied for an order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $updateMode Specifies whether to set the billing information by updating the original order, updating the order in draft mode, or updating the order in draft mode and then committing the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
	* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
	* @param BillingInfo $billingInfo The properties of the order billing information to update.
	* @return BillingInfo 
	*/
	public function setBillingInfo($billingInfo, $orderId, $updateMode =  null, $version =  null, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = BillingInfoClient::setBillingInfoClient($billingInfo, $orderId, $updateMode, $version, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

