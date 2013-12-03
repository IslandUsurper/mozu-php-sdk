<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Customer\Accounts;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Customer\Accounts\TransactionClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class TransactionResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param int $accountId 
	* @return array|Transaction 
	*/
	public function getTransactions( $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = TransactionClient::getTransactionsClient( $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param Transaction $transaction 
	* @return Transaction 
	*/
	public function addTransaction($transaction,  $accountId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = TransactionClient::addTransactionClient($transaction,  $accountId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* 
	*
	* @param int $accountId 
	* @param string $transactionId 
	*/
	public function removeTransaction( $accountId,  $transactionId, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = TransactionClient::removeTransactionClient( $accountId,  $transactionId, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
	
}

?>

