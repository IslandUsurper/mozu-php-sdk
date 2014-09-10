<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Clients\Platform\Entitylists;

use Mozu\Api\MozuClient;
use Mozu\Api\Urls\Platform\Entitylists\EntityUrl;
use Mozu\Api\Headers;

use Mozu\Api\Contracts\MZDB\EntityCollection;

/**
* 
*/
class EntityClient {

	/**
	* 
	*
	* @param string $entityListFullName 
	* @param string $id 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getEntityClient($entityListFullName, $id, $responseFields =  null)
	{
		$url = EntityUrl::getEntityUrl($entityListFullName, $id, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* 
	*
	* @param string $entityListFullName 
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getEntitiesClient($entityListFullName, $pageSize =  null, $startIndex =  null, $filter =  null, $sortBy =  null, $responseFields =  null)
	{
		$url = EntityUrl::getEntitiesUrl($entityListFullName, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	/**
	* 
	*
	* @param string $entityListFullName 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param JObject $item 
	* @return MozuClient
	*/
	public static function insertEntityClient($item, $entityListFullName, $responseFields =  null)
	{
		$url = EntityUrl::insertEntityUrl($entityListFullName, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($item);

	}
	
	/**
	* 
	*
	* @param string $entityListFullName 
	* @param string $id 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param JObject $item 
	* @return MozuClient
	*/
	public static function updateEntityClient($item, $entityListFullName, $id, $responseFields =  null)
	{
		$url = EntityUrl::updateEntityUrl($entityListFullName, $id, $responseFields);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url)->withBody($item);

	}
	
	/**
	* 
	*
	* @param string $entityListFullName 
	* @param string $id 
	* @return MozuClient
	*/
	public static function deleteEntityClient($entityListFullName, $id)
	{
		$url = EntityUrl::deleteEntityUrl($entityListFullName, $id);
		$mozuClient = new MozuClient();
		return $mozuClient->withResourceUrl($url);

	}
	
	
}

?>

