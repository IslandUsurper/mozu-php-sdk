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
use Mozu\Api\Clients\Commerce\Orders\PaymentClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the Payments subresource to manage payment transactions for orders. Each transaction performed for an order represents an individual payment. For example, if an order totals $75.00 but the shopper has a $50.00 gift certificate, both the gift certificate transaction and the credit card transaction for the remaining $25.00 are recorded as payments for the order.
*/
class PaymentResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves information about all payment transactions submitted for the specified order.
	*
	* @param string $orderId Unique identifier of the order.
	* @return PaymentCollection 
	*/
	public function getPayments($orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PaymentClient::getPaymentsClient($orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves information about a specific payment transaction submitted for the specified order.
	*
	* @param string $orderId Unique identifier of the order associated with the payment transaction.
	* @param string $paymentId Unique identifier of the payment transaction submitted for the order.
	* @return Payment 
	*/
	public function getPayment($orderId, $paymentId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PaymentClient::getPaymentClient($orderId, $paymentId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Retrieves the list of all available payment actions dependent on the order payment status by specifying the order ID.
	*
	* @param string $orderId Unique identifier of the order associated with the payment.
	* @param string $paymentId Unique identifer of the payment for which to retrieve available actions.
	* @return array|string 
	*/
	public function getAvailablePaymentActions($orderId, $paymentId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PaymentClient::getAvailablePaymentActionsClient($orderId, $paymentId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Performs the specified action for an individual order payment transaction.
	*
	* @param string $orderId Unique identifier of the order associated with the payment.
	* @param string $paymentId Unique identifer of the payment for which to perform the action.
	* @param PaymentAction $action The action to perform for the payment. Possible values are AuthAndCapture, AuthorizePayment, CapturePayment, VoidPayment, CreditPayment, RequestCheck, ApplyCheck, DeclineCheck.
	* @return Order 
	*/
	public function performPaymentAction($action, $orderId, $paymentId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PaymentClient::performPaymentActionClient($action, $orderId, $paymentId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new payment transaction for the specified order and performs the specified action.
	*
	* @param string $orderId Unique identifier of the order for which to apply the payment.
	* @param PaymentAction $action To action to perform for the newly created payment. Possible values are AuthAndCapture, AuthorizePayment, CapturePayment, VoidPayment, CreditPayment, RequestCheck, ApplyCheck, DeclineCheck.
	* @return Order 
	*/
	public function createPaymentAction($action, $orderId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = PaymentClient::createPaymentActionClient($action, $orderId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

