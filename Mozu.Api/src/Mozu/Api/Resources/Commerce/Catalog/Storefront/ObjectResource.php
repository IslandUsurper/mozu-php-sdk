<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Catalog\Storefront;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Catalog\Storefront\ObjectClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* 
*/
class ObjectResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* 
	*
	* @param RateRequest $rateRequest 
	* @return RatesResponse 
	*/
	public function getRates($rateRequest, Mozu\Api\Security\AuthTicket &$userAuthTicket= null)
	{
		$mozuClient = ObjectClient::getRatesClient($rateRequest, $userAuthTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

