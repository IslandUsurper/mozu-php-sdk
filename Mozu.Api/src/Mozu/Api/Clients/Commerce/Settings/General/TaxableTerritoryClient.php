<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Commerce\Settings\General;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Commerce\Settings\General\TaxableTerritoryUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the taxable territories subresource to manage the regional territories for this site that are subejct to sales tax.
*/
class TaxableTerritoryClient {

	/**
	* Retrieves a list of the taxable territories configured for the site.
	*
	* @return MozuClient
	*/
	public static function getTaxableTerritoriesClient(Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = TaxableTerritoryUrl::getTaxableTerritoriesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Creates a new territory for which to calculate sales tax.
	*
	* @param TaxableTerritory $taxableTerritory Properties of the taxable territory to create.
	* @return MozuClient
	*/
	public static function addTaxableTerritoryClient($taxableTerritory, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = TaxableTerritoryUrl::addTaxableTerritoryUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($taxableTerritory);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	/**
	* Updates one or more taxable territories configured for a site.
	*
	* @param array|TaxableTerritory $taxableterritories Properties of the taxable territories to update.
	* @return MozuClient
	*/
	public static function updateTaxableTerritoriesClient($taxableterritories, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = TaxableTerritoryUrl::updateTaxableTerritoriesUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($taxableterritories);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

