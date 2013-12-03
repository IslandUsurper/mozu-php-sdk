<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Commerce\Settings\General;

use Mozu\Api\MozuClient;
use Mozu\Api\Clients\Commerce\Settings\General\TaxableTerritoryClient;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the taxable territories subresource to manage the regional territories for this site that are subejct to sales tax.
*/
class TaxableTerritoryResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	/**
	* Retrieves a list of the taxable territories configured for the site.
	*
	* @return array|TaxableTerritory 
	*/
	public function getTaxableTerritories(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = TaxableTerritoryClient::getTaxableTerritoriesClient($authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Creates a new territory for which to calculate sales tax.
	*
	* @param TaxableTerritory $taxableTerritory Properties of the taxable territory to create.
	* @return TaxableTerritory 
	*/
	public function addTaxableTerritory($taxableTerritory, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = TaxableTerritoryClient::addTaxableTerritoryClient($taxableTerritory, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	/**
	* Updates one or more taxable territories configured for a site.
	*
	* @param array|TaxableTerritory $taxableterritories Properties of the taxable territories to update.
	* @return array|TaxableTerritory 
	*/
	public function updateTaxableTerritories($taxableterritories, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$mozuClient = TaxableTerritoryClient::updateTaxableTerritoriesClient($taxableterritories, $authTicket);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
	
}

?>

