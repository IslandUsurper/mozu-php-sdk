<?php


/**
* <auto-generated>
*     This code was generated by a tool.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Content\Documentlists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Content\Documentlists\FacetUrl;
use Mozu\Api\DataViewMode;
use Mozu\Api\Headers;

/**
* Use the facets subresource to allow a merchant to add information for product indexing and searching.
*/
class FacetClient {

	/**
	* Retrieves the properties of facets that aid in indexing and searching.
	*
	* @param string $documentListName The document list associated with the facets are to retrieve.
	* @param string $propertyName The property name associated with the facets to retrieve.
	* @return MozuClient
	*/
	public static function getFacetsClient( $documentListName,  $propertyName, Mozu\Api\Security\AuthTicket &$authTicket= null)
	{
		$url = FacetUrl::getFacetsUrl($documentListName, $propertyName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		if ($authTicket != null)
			$mozuClient = $mozuClient->withUserAuth($authTicket);
		return $mozuClient;

	}
	
	
}

?>

