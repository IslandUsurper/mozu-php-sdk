<?php


/**
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Mozu\Api\Resources\Platform\Entitylists;

use Mozu\Api\Clients\Platform\Entitylists\EntityContainerClient;
use Mozu\Api\ApiContext;

use Mozu\Api\Contracts\MZDB\EntityContainer;
use Mozu\Api\Contracts\MZDB\EntityContainerCollection;

/**
* 
*/
class EntityContainerResource {

	private $apiContext;
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	

	/**
	* 
	*
	* @param string $entityListFullName 
	* @param string $id 
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return EntityContainer 
	*/
	public function getEntityContainer($entityListFullName, $id, $responseFields =  null)
	{
		$mozuClient = EntityContainerClient::getEntityContainerClient($entityListFullName, $id, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

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
	* @return EntityContainerCollection 
	*/
	public function getEntityContainers($entityListFullName, $pageSize =  null, $startIndex =  null, $filter =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = EntityContainerClient::getEntityContainersClient($entityListFullName, $pageSize, $startIndex, $filter, $sortBy, $responseFields);
		return $mozuClient->withContext($this->apiContext)
				->execute()
				->getResult();

	}
	
	
}

?>
